'use strict';

import plugins       from 'gulp-load-plugins';
import yargs         from 'yargs';
import browser       from 'browser-sync';
import gulp          from 'gulp';
import rimraf        from 'rimraf';
import yaml          from 'js-yaml';
import fs            from 'fs';
import dateFormat    from 'dateformat';
import webpackStream from 'webpack-stream';
import webpack2      from 'webpack';
import named         from 'vinyl-named';
import log           from 'fancy-log';
import colors        from 'ansi-colors';
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var cssnano = require('gulp-cssnano');
var criticalCss = require('gulp-penthouse');
const minifycss = require( 'gulp-uglifycss' ); // Minifies CSS files.
// const autoprefixer = require( 'gulp-autoprefixer' ); // Autoprefixing magic.
const sourcemaps = require( 'gulp-sourcemaps' ); // Maps code in a compressed file (E.g. style.css) back to it’s original position in a source file (E.g. structure.scss, which was later combined with other css files to generate style.css).
const beep = require( 'beepbeep' );
const mmq = require( 'gulp-merge-media-queries' ); // Combine matching media queries into one.
const plumber = require( 'gulp-plumber' ); // Prevent pipe breaking caused by errors from gulp plugins.
const notify = require( 'gulp-notify' ); // Sends message notification to you.
const terser = require('gulp-terser'); // we need this for ES6 compatibility
const filter = require( 'gulp-filter' ); // Enables you to work on a subset of the original files by filtering them using a glob.

// Load all Gulp plugins into one variable
const $ = plugins();

const errorHandler = r => {
  notify.onError( '\n\n❌  ===> ERROR: <%= error.message %>\n' )( r );
  beep();

  // this.emit('end');
};

// Check for --production flag
const PRODUCTION = !!(yargs.argv.production);

// Check for --development flag unminified with sourcemaps
const DEV = !!(yargs.argv.dev);

// Load settings from settings.yml
const { BROWSERSYNC, COMPATIBILITY, REVISIONING, PATHS } = loadConfig();


// Check if file exists synchronously
function checkFileExists(filepath) {
  let flag = true;
  try {
    fs.accessSync(filepath, fs.F_OK);
  } catch(e) {
    flag = false;
  }
  return flag;
}

// Load default or custom YML config file
function loadConfig() {
  log('Loading config file...');

  if (checkFileExists('config.yml')) {
    // config.yml exists, load it
    log(colors.bold(colors.cyan('config.yml')), 'exists, loading', colors.bold(colors.cyan('config.yml')));
    let ymlFile = fs.readFileSync('config.yml', 'utf8');
    return yaml.load(ymlFile);

  } else if(checkFileExists('config-default.yml')) {
    // config-default.yml exists, load it
    log(colors.bold(colors.cyan('config.yml')), 'does not exist, loading', colors.bold(colors.cyan('config-default.yml')));
    let ymlFile = fs.readFileSync('config-default.yml', 'utf8');
    return yaml.load(ymlFile);

  } else {
    // Exit if config.yml & config-default.yml do not exist
    log('Exiting process, no config file exists.');
    log('Error Code:', err.code);
    process.exit(1);
  }
}

// Delete the "dist" folder
// This happens every time a build starts
function clean(done) {
  rimraf(PATHS.dist, done);
}

// Copy files out of the assets folder
// This task skips over the "images", "js", and "scss" folders, which are parsed separately
function copy() {
  return gulp.src(PATHS.assets)
    .pipe(gulp.dest(PATHS.dist + '/assets'));
}


// Compile Sass into CSS
// In production, the CSS is compressed
function sass() {
  return gulp.src('src/assets/scss/app.scss')
    .pipe($.sourcemaps.init())
    .pipe($.sass({
      includePaths: PATHS.sass
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: COMPATIBILITY
    }))

    .pipe($.if(PRODUCTION, $.cleanCss({ compatibility: 'ie9' })))
    .pipe($.if(!PRODUCTION, $.sourcemaps.write()))
    .pipe($.if(REVISIONING && PRODUCTION || REVISIONING && DEV, $.rev()))
    .pipe(gulp.dest(PATHS.dist + '/assets/css'))
    .pipe($.if(REVISIONING && PRODUCTION || REVISIONING && DEV, $.rev.manifest()))
    .pipe(gulp.dest(PATHS.dist + '/assets/css'))
    .pipe(browser.reload({ stream: true }));
}

// Combine JavaScript into one file
// In production, the file is minified
const webpack = {
  config: {
    module: {
      rules: [
        {
          test: /.js$/,
          loader: 'babel-loader',
          exclude: /node_modules(?![\\\/]foundation-sites)/,
        },
      ],
    },
    // plugins: [
    //       new TerserPlugin(),
    // ],
    externals: {
      jquery: 'jQuery',
    },
  },

  changeHandler(err, stats) {
    log('[webpack]', stats.toString({
      colors: true,
    }));

    browser.reload();
  },

  build() {
    return gulp.src(PATHS.entries)
      .pipe(named())
      .pipe(webpackStream(webpack.config, webpack2))
      .pipe($.if(PRODUCTION, $.terser()
        .on('error', e => { console.log(e); }),
      ))
      .pipe($.if(REVISIONING && PRODUCTION || REVISIONING && DEV, $.rev()))
      .pipe(gulp.dest(PATHS.dist + '/assets/js'))
      .pipe($.if(REVISIONING && PRODUCTION || REVISIONING && DEV, $.rev.manifest()))
      .pipe(gulp.dest(PATHS.dist + '/assets/js'));
  },

  watch() {
    const watchConfig = Object.assign(webpack.config, {
      watch: true,
      devtool: 'inline-source-map',
    });

    return gulp.src(PATHS.entries)
      .pipe(named())
      .pipe(webpackStream(watchConfig, webpack2, webpack.changeHandler)
        .on('error', (err) => {
          log('[webpack:error]', err.toString({
            colors: true,
          }));
        }),
      )
      .pipe(gulp.dest(PATHS.dist + '/assets/js'));
  },
};

gulp.task('webpack:build', webpack.build);
gulp.task('webpack:watch', webpack.watch);

// Copy images to the "dist" folder
// In production, the images are compressed
function images() {
  return gulp.src('src/assets/images/**/*')
    .pipe($.if(PRODUCTION, $.imagemin([
      $.imagemin.jpegtran({
        progressive: true,
      }),
      $.imagemin.optipng({
        optimizationLevel: 5,
      }),
      $.imagemin.gifsicle({
        interlaced: true,
      }),
      $.imagemin.svgo({
        plugins: [
          {cleanupAttrs: true},
          {removeComments: true},
        ]
      })
    ])))
    .pipe(gulp.dest(PATHS.dist + '/assets/images'));
}

// Create a .zip archive of the theme
function archive() {
  var time = dateFormat(new Date(), "yyyy-mm-dd_HH-MM");
  var pkg = JSON.parse(fs.readFileSync('./package.json'));
  var title = pkg.name + '_' + time + '.zip';

  return gulp.src(PATHS.package)
    .pipe($.zip(title))
    .pipe(gulp.dest('packaged'));
}

// PHP Code Sniffer task
gulp.task('phpcs', function() {
  return gulp.src(PATHS.phpcs)
    .pipe($.phpcs({
      bin: 'wpcs/vendor/bin/phpcs',
      standard: './codesniffer.ruleset.xml',
      showSniffCode: true,
    }))
    .pipe($.phpcs.reporter('log'));
});

// PHP Code Beautifier task
gulp.task('phpcbf', function () {
  return gulp.src(PATHS.phpcs)
  .pipe($.phpcbf({
    bin: 'wpcs/vendor/bin/phpcbf',
    standard: './codesniffer.ruleset.xml',
    warningSeverity: 0
  }))
  .on('error', log)
  .pipe(gulp.dest('.'));
});

// Start BrowserSync to preview the site in
function server(done) {
  browser.init({
    proxy: BROWSERSYNC.url,
    files: "dist/assets/css/*.css",
    // files: "src/assets/scss/*.scss",

    ui: {
      port: 3001
    },
    injectChanges: true,
    notify: true,
    cors: true,
    open: false,
    reloadDelay: 0,
  });
  //when css files change, reload browserSync 
    // gulp.watch('dist/assets/css/*.css').on('change', function () {
    //     browser.reload();
    // });
  done();
}

// Reload the browser with BrowserSync
function reload(done) {
  browser.reload();
  done();
}

// Watch for changes to static assets, pages, Sass, and JavaScript
function watch() {
  gulp.watch(PATHS.assets, copy);
  gulp.watch('src/assets/scss/**/*.scss', sass)
    .on('change', path => log('File ' + colors.bold(colors.magenta(path)) + ' changed.'))
    .on('unlink', path => log('File ' + colors.bold(colors.magenta(path)) + ' was removed.'));
  gulp.watch('**/**/*.php', reload)
    .on('change', path => log('File ' + colors.bold(colors.magenta(path)) + ' changed.'))
    .on('unlink', path => log('File ' + colors.bold(colors.magenta(path)) + ' was removed.'));
  gulp.watch('src/assets/images/**/*', gulp.series(images, reload));
}


// Extract the critical path css and output as a php files, that we can call as a template in the header
gulp.task('critical-css', function () {
return gulp.src('./dist/assets/css/app.css')
.pipe(criticalCss({
out: 'critical.php', // output file name
url: 'https://zendroidthemes.com/amplifier', // url from where we want penthouse to extract critical styles
width: 1920, // max window width for critical media queries
height: 900, // max window height for critical media queries
userAgent: 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)' // pretend to be googlebot when grabbing critical page styles.
}))
.on('error', function(err) { log.error(err.message); })
.pipe(cssnano({
safe:true // this isn't required, but I've included cssNano to minify the output file
}))
.pipe(gulp.dest('./template-parts')); // destination folder for the output file
});






// Build the "dist" folder by running all of the below tasks
gulp.task('build',
  gulp.series(clean, gulp.parallel(sass, 'webpack:build', images, copy)));


// Build the "dist" folder by running all of the below tasks
gulp.task('build-no-images',
  gulp.series(clean, gulp.parallel(sass, 'webpack:build', copy)));


// Build the site, run the server, and watch for file changes
gulp.task('default',
  gulp.series('build', server, gulp.parallel('webpack:watch', watch)));

// Package task
gulp.task('package',
  gulp.series('build', archive));

// Package task
gulp.task('package-no-images',
  gulp.series('build-no-images', archive));
