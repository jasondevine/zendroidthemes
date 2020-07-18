<?php
/**
 * Author: Jason Devine
 * URL: http://www.zendroidthemes.com
 *
 * DEMO FUNCTIONS
 *
 * Demo specific functions that aren't part of the core theme - used for displaying page layouts, etc
 *
 * @since [1.0]
 *
 * @package zendroidPress
 * @since  zendroidPress 1.0.0
 */


function zt_homepage_content_shortcode($atts, $content = null) {
	// We're storing the content of each of these dummy content pages as a variable run through the output buffer
	ob_start();
?>


<div class="grid-x grid-padding-x align-left amplifier-theme-listing">

	<div class="cell small-10 small-offset-1 large-4 large-offset-1">
			<h1 data-sal="fade-in-left" data-sal-delay="300">Meet our latest Wordpress theme.</h1>

			<a href="/amplifier" class="hide-for-large">
						<figure class="screen-mockup">
						<span class="release-number">v 1.0</span>
							<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/surface-3.jpg' ?>" alt="">
						</figure>
			</a>

			<a href="/amplifier">
								<figure class="theme-logo-container">
								<img class="theme-logo" src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/Amplifier-logo-sunset.png' ?>" data-sal="slide-in-blurred-bottom" data-sal-delay="600"  data-sal-duration='300' alt="">
								</figure>
			</a>



			<div class="theme-feature-blurb">
						<h4>Get ready</h4>
						<p> &hellip; to take your site to the next level. A fully-featured, deeply customisable, and responsive WordPress magazine and blog theme, Amplifier is designed to showcase your unique content with the readability and visual impact it deserves, on any screen size.</p>

						<span class="footnote wholelottalove">(We put a lot of <i class="fa fa-heart"></i> into developing this theme, and we think it shows)</span>
			</div>

			<div>
						<h6 class="theme-feature-tags-title">Tagged:</h6>
							<ul class="theme-feature-tags">
								<li class="theme-feature-tag">Responsive</li>
								<li class="theme-feature-tag">Minimal</li>
								<li class="theme-feature-tag">Magazine</li>
								<li class="theme-feature-tag">Blogger</li>
								<li class="theme-feature-tag">Readable</li>
								<li class="theme-feature-tag">Awesome</li>
							</ul>
			</div>

	</div> <!-- end.cell -->



	<div class="cell small-10 small-offset-1 large-5 large-offset-1">

					<a href="/amplifier" class="show-for-large">
						<figure class="screen-mockup">
						<span class="release-number">v 1.0</span>
							<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/surface-3.jpg' ?>" alt="">
						</figure>
					</a>

										<div class="homepage-buttons">

						<form action="/features" class="">


						<button class="btn btn-3 btn-3a icon-cog" id="features-button" title="Take a tour of the theme's features">Features
							<div class="button-gradient-1"></div>
							<div class="button-gradient-2"></div>
						</button>
						</form>

						<form action="/amplifier" class="">


						<button class="btn btn-3 btn-3a icon-arrow-right" title="Ready for a test-drive?" id="demo-button">Demo
							<div class="button-gradient-1"></div>
							<div class="button-gradient-2"></div>
						</button>
						</form>
					</div>
	</div>



</div>

			<div class="grid-x grid-padding-x align-left align-top theme-listing white">

					<div class="cell small-10 small-offset-1 large-4 large-offset-1">
						<h1>Coming soon!</h1>

						<figure class="screen-mockup coming-soon hide-for-large">
							<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/zt_surface_empty.jpg' ?>" alt="">
						</figure>

				<div class="theme-feature-blurb">
							<h4>Our next theme &hellip;</h4>
							<p>	&hellip;&nbsp;&nbsp;&nbsp;&nbsp;is under development and will be available to buy soon<sup>TM</sup>. What can you expect from it? The same meticulous attention-to-detail, the same focus on readability and even more customization options than available in Amplifier. Stay tuned!  </p>
				</div>

			</div>

				<div class="cell small-10 small-offset-1 large-5 large-offset-1">
						<figure class="screen-mockup coming-soon show-for-large">
							<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/zt_surface_empty.jpg' ?>" alt="">
						</figure>


				</div>

			</div>





	<?php

	$dc2 = ob_get_clean();

	return $dc2;

}

function zt_features_content_shortcode($atts, $content = null) {
	// We're storing the content of each of these dummy content pages as a variable run through the output buffer
	ob_start();
	?>

<div class="grid-x full align-center">
	<div class="cell large-12"></div>
	<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/perspective.jpg' ?>" alt="">
</div>


						<!-- <div class="feature-list">
	<h1>Feature List</h1>
	<ul>




		<li>Advanced Custom Fields</li>
		<li>One Click Demo Import</li>
		<li>Ajax Infinite Scoll/Load More/Pagination</li>
		<li>Font Awesome icons</li>
		<li>Drop-caps, ampersands, etc</li>
		<li>Sidebar Left, Right, Off</li>
		<li>Header options</li>
		<li>Widescreen post block</li>
		<li>Responsive design</li>
		<li>Related Posts</li>
		<li>Featured posts block</li>
		<li>Video background</li>
		<li>Light/dark mode on sidebar</li>
		<li>8 post layouts</li>
		<li>4 blog layouts</li>
		<li>Lazy load images</li>
		<li>Recent Posts widget extended</li>
		<li>Top 10 plugin integration - post views counter</li>
		<li>Sticky sidebar</li>
		<li>Sticky header</li>
		<li>Lightbox</li>
		<li>Mega menu</li>
		<li>Author Widget</li>
		<li>Twitter widget</li>
		<li>Instagram Feed widgets</li>
		<li>Mailchimp sign-up widget</li>
		<li>Developer? Amplifier comes packaged with all SASS files so you can customize the theme in your preferred text editor. Mention Flexbox</li>
		<li>Customizable login screen</li>
		<li>Google fonts</li>
		<li>Gutenberg ready</li>
		<li>Highly performant - 96% on GTMetrix</li>
		<li>Extensive Customizer options</li>



		// These are on hold, or just need to be covered in a simple list
		<li>Translation ready</li>
		<li>Free updates</li>
		<li>Post view count</li>





	</ul>
</div> -->



	<div class="grid-x grid-padding-x align-left align-middle theme-feature-block grey"  id="developer-friendly-feature-block">

		<div class="cell large-5 large-offset-1 theme-feature-description" >
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/sass.png' ?>" alt="" class="strapline-image">
			<span class="strapline">Source files included</span>
<!-- 			<h1 class="theme-feature-title" data-aos-duration="200" data-aos-delay="200" data-aos="fade-right" data-aos-easing="ease-out-cubic">Developer-friendly
			</h1> -->
			<h1 class="theme-feature-title">Developer-friendly
			</h1>
			<p class="theme-feature-blurb">
			All <em><strong>SASS</strong></em> partials are packaged with the theme, so you can fire up your editor and get customizing from the get-go. Not only that, but with a simple <code>npm install</code> you can have a <a href="https://www.browsersync.io/"><em><strong>Browsersync</strong></em></a> enabled dev environment up-and-running too.
			</p>
		</div>
		<div class="cell large-6 theme-feature-image">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/macbook-air.png' ?>" alt="">
		</div>
	</div> <!-- end theme-feature-block -->


		<div class="grid-x grid-padding-x align-left align-middle theme-feature-block"  id="google-fonts-feature-block">
		<div class="cell large-5 large-offset-1 theme-feature-description">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/google_icon.png' ?>" alt="" class="strapline-image google-icon">
			<span class="strapline">Next-level Typography</span>
			<h1 class="theme-feature-title">Google Fonts
			</h1>
			<p class="theme-feature-blurb">
			Choose from more than <a href="https://fonts.google.com/"><strong>900 beautiful fonts</strong></a> to enhance your content. Whatever typefaces you end up choosing, they get cached locally in order to speed up future site visits for your users.
			</p>
		</div>
		<div class="cell large-6 theme-feature-image">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/fonts.png' ?>" alt="">

		</div>
	</div> <!-- end theme-feature-block -->

		<div class="grid-x grid-padding-x align-left align-middle theme-feature-block grey" id="gutenberg-ready-feature-block">
		<div class="cell large-5 large-offset-1 theme-feature-description">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/gutenberg-logo-grey.png' ?>" alt="" class="strapline-image gutenberg-logo">
			<span class="strapline">Wordpress 5.0</span>
			<h1 class="theme-feature-title">Gutenberg-ready
			</h1>
			<p class="theme-feature-blurb">
			<span class="theme-feature-inline-image-container"><img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/Amplifier-logo-sunset.png' ?>" class="theme-feature-inline-image" alt=""></span> is compatible with <strong><em>Gutenberg</em></strong>, the powerful new block editor introduced in WordPress 5.0. With an ever-growing range of blocks available, from galleries to blockquotes, editing and publishing your content the way you want it has never been simpler.
			</p>
		</div>
		<div class="cell large-6 theme-feature-image">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/gutenberg_block_select.png' ?>" alt="" class="shadow">
		</div>
	</div> <!-- end theme-feature-block -->


	<div class="grid-x grid-padding-x align-left align-middle theme-feature-block" id="high-performance-feature-block">

		<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/graph.png' ?>" alt="" class="graph_background">

		<div class="cell large-5 large-offset-1 theme-feature-description">
			<i class="fas fa-meteor strapline-image"></i>
			<span class="strapline">Fasten your seatbelts</span>
			<h1 class="theme-feature-title">Optimised for performance.
			</h1>
			<p class="theme-feature-blurb">
			<span class="theme-feature-inline-image-container"><img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/Amplifier-logo-sunset.png' ?>" class="theme-feature-inline-image" alt=""></span> was designed with high-performance as a core feature, so it's not surprising it delivers exceptional webpage speed - 97% on Google pagespeed insights and A+ on GTmetrix.

			(Note: page speed is closely linked to server configuration)
			</p>
		</div>


		<div class="cell large-6 theme-feature-image">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/pagespeed_score.png' ?>" alt="" class="">
		</div>
	</div> <!-- end theme-feature-block -->





	<div class="grid-x grid-padding-x align-left align-middle theme-feature-block grey" id="customizer-options-feature-block">
	<div class="cell large-5 large-offset-1 theme-feature-description">
			<i class="fas fa-sliders-h strapline-image"></i>
			<span class="strapline">Make it personal.</span>
			<h1 class="theme-feature-title">Extensive customizer options.
			</h1>
			<p class="theme-feature-blurb">
			We've built on WordPress's native customizer with an extensive list of options that allow you to set up the theme just as you want it, from typography controls to colour themes to blog and post layouts. There are literally thousands of unique combinations to pick from - making your site as individual as you want it to be.
			</p>
		</div>


		<div class="cell large-6 theme-feature-image">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/customizer_panel.png' ?>" alt="" class="">
		</div>
	</div> <!-- end theme-feature-block -->



	<div class="grid-x grid-padding-x align-left align-middle theme-feature-block" id="custom-login-feature-block">
	<div class="cell large-5 large-offset-1 theme-feature-description">
			<i class="fas fa-copyright strapline-image"></i>
			<span class="strapline">Admin page branding</span>
			<h1 class="theme-feature-title">Custom login screen logo.
			</h1>
			<p class="theme-feature-blurb">
			Upload your own image to replace the default Wordpress logo that's found on the login screen. It's the little touches, right?
			</p>
		</div>


		<div class="cell large-4 theme-feature-image">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/custom_login.png' ?>" alt="" class="">
		</div>
	</div> <!-- end theme-feature-block -->



	<div class="grid-x grid-padding-x align-left align-middle theme-feature-block grey" id="mailchimp-widget-feature-block">
	<div class="cell large-5 large-offset-1 theme-feature-description">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/mailchimp_monkey.png' ?>" alt="" class="strapline-image">
			<span class="strapline">Grow your campaign.</span>
			<h1 class="theme-feature-title">

				<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/mailchimp_logo_white.png' ?>" alt="" class="demo-inline-logo">signup widget.
			</h1>
			<p class="theme-feature-blurb">
			If you're managing an email marketing campaign, or want to start one,<span class="theme-feature-inline-image-container"><img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/Amplifier-logo-sunset.png' ?>" class="theme-feature-inline-image" alt=""></span>comes with support for Mailchimp and a widget to sign up new subscribers.
			</p>
		</div>


		<div class="cell large-6 theme-feature-image">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/mailchimp_widget.png' ?>" alt="">
		</div>
	</div> <!-- end theme-feature-block -->


	<div class="grid-x grid-padding-x align-left align-middle theme-feature-block" id="instagram-widget-feature-block">
	<div class="cell large-5 large-offset-1 theme-feature-description">
			<i class="fab fa-instagram strapline-image"></i>
			<span class="strapline">Beautiful imagery</span>
			<h1 class="theme-feature-title"><em>Instagram feed</em> widget.
			</h1>
			<p class="theme-feature-blurb">
			Social is important. Display your latest Instagram pictures in a widget that's perfectly styled to match the rest of your blog, and keep your content fresh as a daisy.
			</p>
		</div>


		<div class="cell large-4 theme-feature-image">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/instagram_widget.png' ?>" alt="" class="">
		</div>
	</div> <!-- end theme-feature-block -->


	<div class="grid-x grid-padding-x align-left align-middle theme-feature-block grey" id="twitter-widget-feature-block">
	<div class="cell large-5 large-offset-1 theme-feature-description">
			<i class="fab fa-twitter strapline-image"></i>
			<span class="strapline">Social engagement</span>
			<h1 class="theme-feature-title"><em>Twitter feed</em> widget.
			</h1>
			<p class="theme-feature-blurb">
			Pull in your most recent tweets and put them on your sidebar (or any other widget-ready area). You can choose how many, and easily adjust the styling.
			</p>
		</div>


		<div class="cell large-6 theme-feature-image">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/twitter_widget.png' ?>" alt="">
		</div>
	</div> <!-- end theme-feature-block -->


	<div class="grid-x grid-padding-x align-left align-middle theme-feature-block" id="about_me-widget-feature-block">

	<div class="cell large-5 large-offset-1 theme-feature-description">
			<i class="fas fa-user strapline-image"></i>
			<span class="strapline">The incomparable You</span>
			<h1 class="theme-feature-title"><em>About the Author</em> widget.
			</h1>
			<p class="theme-feature-blurb">
			Sum up who you are and what you do. If you've set them up in the ' <a href="'#social-feature-block">Social</a> ' section of the theme customizer, the widget automatically displays your signature, your profile photo, and links to any social profile you've got configured.
			</p>
		</div>


		<div class="cell large-4 theme-feature-image">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/about_me_widget.png' ?>" alt="" class="">
		</div>
	</div> <!-- end theme-feature-block -->




	<div class="grid-x grid-padding-x align-left align-bottom theme-feature-block grey" id="mega-menu-feature-block">

	<div class="cell large-4 large-offset-1 theme-feature-description">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/maxmegamenu.png' ?>" alt="">
			<span class="strapline">Big Picture Navigation</span>
			<h1 class="theme-feature-title">Mega Menu.
			</h1>
			<p class="theme-feature-blurb">
			Who doesn't love a Mega Menu? Get your most important stuff front-and-centre, with premade Mega Menu-specific widgets for your recent posts and most popular posts. 
			</p>
		</div>

		<div class="cell large-6 theme-feature-image">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/mega-menu.png' ?>" alt="" class="screenshot">
		</div>


	</div> <!-- end theme-feature-block -->





	<div class="grid-x grid-padding-x align-left align-middle theme-feature-block" id="sticky-header-feature-block">
		<div class="theme-feature-image">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/sticky-header.png' ?>" alt="" class="screenshot">
		</div>

	<div class="cell large-5 large-offset-1 theme-feature-description">
			<i class="fas fa-tape strapline-image"></i>
			<span class="strapline">Unobtrusive navigation</span>
			<h1 class="theme-feature-title">Sticky header.
			</h1>
			<p class="theme-feature-blurb">
			The sticky header fades in gently when the reader has scrolled a part of the way down the page, and it contains an off-canvas navigation that can slide over or push the main content out of the way at the touch of a button. It's also set up to show the title of the current post, or if not on a post then it shows the '<i>Message of the Day</i>'. Like most of the features, you can turn it on or off from the customizer.
			</p>
		</div>


	</div> <!-- end theme-feature-block -->




	<div class="grid-x grid-padding-x align-left align-bottom theme-feature-block grey" id="lightbox-feature-block">

	<div class="cell large-4 large-offset-1 theme-feature-description">
			<i class="fas fa-adjust strapline-image"></i>
			<span class="strapline">Media features</span>
			<h1 class="theme-feature-title">Lightbox.
			</h1>
			<p class="theme-feature-blurb">
			<span class="theme-feature-inline-image-container"><img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/Amplifier-logo-sunset.png' ?>" class="theme-feature-inline-image" alt=""></span>has an image lightbox system - Javascript code that enlarges clicked images into a full-screen overlay and darkens the background, which is an effective way of drawing attention to the gallery.

			</p>
		</div>

		<div class="cell theme-feature-image large-6">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/lightbox.png' ?>" alt="" class="screenshot">
		</div>


	</div> <!-- end theme-feature-block -->




	<div class="grid-x grid-padding-x align-left align-middle theme-feature-block" id="sticky-sidebar-feature-block">



	<div class="cell large-3 large-offset-1 theme-feature-description">
			<img class="strapline-image" src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/sidebar.png' ?>" alt="">
			<span class="strapline">Smart navigation</span>
			<h1 class="theme-feature-title">Sticky sidebar.
			</h1>
			<p class="theme-feature-blurb">
			If enabled through the customizer, the sticky sidebar will automagically pin itself to the top of the viewport when scrolling up or down on a post or the blog. If it's not your cup of tea, you can switch it off
			</p>
		</div>


		<div class="cell large-6 large-offset-1">
			<video src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/sticky_sidebar.webm' ?>" class="screengrab" autoplay muted loop>
			</video>
		</div>
	</div> <!-- end theme-feature-block -->






	<div class="grid-x grid-padding-x align-left align-middle theme-feature-block grey" id="top-10-feature-block">

	<div class="cell large-3 large-offset-1 theme-feature-description">
			<i class="fas fa-fire-alt strapline-image" ></i>
			<span class="strapline">Track post views</span>
			<h1 class="theme-feature-title"><em>Popular Posts</em> widgets.
			</h1>
			<p class="theme-feature-blurb">
			Along with the Top-10 plugin (which is installed along with the theme), <span class="theme-feature-inline-image-container"><img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/Amplifier-logo-sunset.png' ?>" class="theme-feature-inline-image" alt=""></span>can track page views and generate lists of daily/weekly/all-time most popular posts and package it up into either of two beautifully designed widgets. See what your readers are engaging with most.
			</p>
		</div>


		<div class="cell large-8 theme-feature-image-stack">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/popular_posts_widget.jpg' ?>" alt="" class="screenshot image-stack-2">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/popular_posts_mega_menu_light.jpg' ?>" alt="" class="screenshot image-stack-1">
		</div>
	</div> <!-- end theme-feature-block -->



	<div class="grid-x grid-padding-x align-left align-middle theme-feature-block" id="rpwe-feature-block">

	<div class="cell large-3 large-offset-1 theme-feature-description">
			<i class="fas fa-stopwatch  strapline-image"></i>
			<span class="strapline">Promote your freshest content</span>
			<h1 class="theme-feature-title"><em>Recent Posts</em> widgets.
			</h1>
			<p class="theme-feature-blurb">
			We've bundled the theme with a plugin that extends the functionality of the native 'Recent Posts' widget and makes it even more powerful, and then we went ahead and made specific widgets for both the sidebar and the mega-menu, so you can promote your newest content in the most visible areas of your blog, with minimal effort.
			</p>
		</div>


		<div class="cell large-8 theme-feature-image-stack">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/recent_posts_widget.jpg' ?>" alt="" class="screenshot image-stack-2">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/recent_posts_mega_menu.jpg' ?>" alt="" class="screenshot image-stack-1">
		</div>
	</div> <!-- end theme-feature-block -->




	<div class="grid-x grid-padding-x align-left align-bottom theme-feature-block grey" id="lazyload-feature-block">

	<div class="cell large-4 large-offset-1 theme-feature-description">
			<i class="fas fa-spinner fa-spin strapline-image"></i>
			<span class="strapline">Media features</span>
			<h1 class="theme-feature-title">Lazy loading images.
			</h1>
			<p class="theme-feature-blurb">
			If you don't treat your website's performance as <em><strong>crucial</strong></em> to staying on top, then you're doing it wrong, and handling images is super-important to getting that right. If those beautiful photos are slowing your page load times then your readers just aren't going to hang around waiting. That's where lazy loading comes in.<span class="theme-feature-inline-image-container"><img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/Amplifier-logo-sunset.png' ?>" class="theme-feature-inline-image" alt=""></span>automatically finds images in your posts or blog pages and only loads them when they enter the viewport, saving valuable bandwidth and making sure your site feels <i><strong>fast</strong></i>.
			</p>
		</div>

		<div class="cell theme-feature-image large-5 large-offset-1" data-aos="blur-in"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-once ="false"
    data-aos-anchor-placement="top-center">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/apollo.jpg' ?>" alt="" class="screenshot">
		</div>


	</div> <!-- end theme-feature-block -->




	<div class="grid-x grid-padding-x align-left align-top theme-feature-block" id="blog-layouts-feature-block">

	<div class="cell large-3 large-offset-1 theme-feature-description">
			<i class="fas fa-columns strapline-image"></i>
			<span class="strapline">Customize your page design</span>
			<h1 class="theme-feature-title">4 blog layouts.
			</h1>
			<p class="theme-feature-blurb">
			There are 4 main blog or homepage layouts to choose from: <a href="/homepage-layout-1">'Side-by-Side'</a>,  <a href="/homepage-layout-2">'Under-and-Over'</a>, <a href="'homepage-layout-3">'List'</a>, and <a href="/homepage-layout-4">'Masonry'</a>. These layouts affect the appearance of the posts as they occur in the main loop area, and when combined with other layout options such as sidebar side, pagination style, sliders and featured post blocks, you can create a unique structure for all your posts.
			</p>
		</div>

<div class="cell large-8 theme-feature-description">
	<div class="blog-layout-slider">
		<div class="blog-layout-slide">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/blog-layout-list.jpg' ?>" alt="" class="blog-layout-image">
		</div>
		<div class="blog-layout-slide">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/blog-layout-side-by-side.jpg' ?>" alt="" class="blog-layout-image">
		</div>
		<div class="blog-layout-slide">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/blog-layout-over-and-under.jpg' ?>" alt="" class="blog-layout-image">
		</div>
		<div class="blog-layout-slide">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/blog-layout-masonry.jpg' ?>" alt="" class="blog-layout-image">
		</div>
	</div>
</div>






</div> <!-- end theme-feature-block -->



<div class="grid-x grid-padding-x align-left align-top theme-feature-block grey" id="post-layouts-feature-block">

	<div class="cell large-3 large-offset-1 theme-feature-description">
			<i class="fas fa-layer-group strapline-image"></i>
			<span class="strapline">Customize your page design</span>
			<h1 class="theme-feature-title">7 post layouts.
			</h1>
			<p class="theme-feature-blurb">
			Choose from 7 different layouts to display the actual post content. Whether your prefer to have the featured image (or video) span the full width of the page over the heading, or the heading <i>inside</i> that featured image, or over it, and the heading centre-aligned or justified .... You get the idea. There are oodles of options to find the perfect layout.
			</p>
		</div>




<div class="cell large-8">
	<div class="post-layout-slider" data-aos-duration="400" data-aos-delay="500" data-aos="fade-left" data-aos-easing="ease-out-cubic">
		<div class="post-layout-slide">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/post-layout-1.jpg' ?>" alt="" class="post-layout-image">
		</div>
		<div class="post-layout-slide">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/post-layout-2.jpg' ?>" alt="" class="post-layout-image">
		</div>
		<div class="post-layout-slide">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/post-layout-3.jpg' ?>" alt="" class="post-layout-image">
		</div>
		<div class="post-layout-slide">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/post-layout-4.jpg' ?>" alt="" class="post-layout-image">
		</div>
		<div class="post-layout-slide">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/post-layout-5.jpg' ?>" alt="" class="post-layout-image">
		</div>
		<div class="post-layout-slide">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/post-layout-6.jpg' ?>" alt="" class="post-layout-image">
		</div>
		<div class="post-layout-slide">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/post-layout-7.jpg' ?>" alt="" class="post-layout-image">
		</div>
	</div>
</div>

</div> <!-- end theme-feature-block -->


<div class="grid-x grid-padding-x align-left align-middle theme-feature-block" id="responsive-feature-block">

	<div class="cell large-3 large-offset-1 theme-feature-description">
			<i class="fas fa-mobile strapline-image"></i>
			<!-- <i class="fas fa-desktop strapline-image fa-stack-2x"></i> -->
			<span class="strapline">Responsive design</span>
			<h1 class="theme-feature-title">Beautiful on any device.
			</h1>
			<p class="theme-feature-blurb">
			As of September 2019, <a href="">more than 51%</a> of all global internet traffic is mobile in origin. So it makes sense that unless you want to risk alienating over half your visitors, phone and tablet users need to be offered as polished an experience on your site as desktop users are used to getting. That's why
			<span class="theme-feature-inline-image-container"><img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/Amplifier-logo-sunset.png' ?>" class="theme-feature-inline-image" alt=""></span> was designed from day one to be fully responsive, and adapt to display perfectly on any device with any dimensions, all the while remaining as powerful as can be.
			</p>
		</div>

		<div class="cell large-7 large-offset-1 theme-feature-image-stack">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/isometric_imac.png' ?>" alt="" class="image-stack-1">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/isometric_iphone.png' ?>" alt="" class="image-stack-2">
		</div>

</div> <!-- end theme-feature-block -->

<div class="theme-feature-block grey" id="video-background-feature-block">



	<div class="grid-x grid-padding-x align-left align-middle ">

			<div class="bgvideo">
			<video src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/airbag.webm' ?>" class="" autoplay muted loop></video>
	</div>

		<div class="cell large-3 large-offset-1 theme-feature-description">
				<i class="fas fa-film strapline-image"></i>
				<span class="strapline">Media features</span>
				<h1 class="theme-feature-title">Video backgrounds.
				</h1>
				<p class="theme-feature-blurb">
				Want to make a post really stand out from the crowd? Get your video background on, stand back, and watch the fireworks. Or super slow-mo paint explosions. 
				</p>
			</div>




			<div class="cell large-6 large-offset-1">
				<div class="video-container">
					<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/browser_chrome.png' ?>" alt="">
					<video src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/video_background_post.webm' ?>"class="screengrab" autoplay muted loop>
					</video>
				</div>
			</div>
	</div>
</div> <!-- end theme-feature-block -->




	<div class="theme-feature-block" id="related-posts-feature-block">

	<div class="grid-x grid-padding-x align-left align-middle">
		<div class="cell large-3 large-offset-1 theme-feature-description">
				<i class="fas fa-link strapline-image"></i>
				<span class="strapline">Smart suggestions</span>
				<h1 class="theme-feature-title"><em>Related Posts</em> block.
				</h1>
				<p class="theme-feature-blurb">
				Encourage your readers to carry on reading similar articles that share the same tags as the current post.
				</p>
			</div>

		<div class="cell large-7 large-offset-1 theme-feature-image-stack">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/related_block.png' ?>" alt="" class="image-stack-1 show-for-medium">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/related_block_2.jpg' ?>" alt="" data-aos-delay="600" data-aos-duration="600" class="hide-for-medium">
		</div>

	</div>

</div> <!-- end theme-feature-block -->








	<div class="theme-feature-block grey" id="featured-posts-feature-block">

	<div class="grid-x grid-padding-x align-left align-middle">
		<div class="cell large-3 large-offset-1 theme-feature-description">
				<i class="fas fa-highlighter strapline-image"></i>
				<span class="strapline">Highlight stories</span>
				<h1 class="theme-feature-title"><em>Featured Posts</em> block.
				</h1>
				<p class="theme-feature-blurb">
				If you want to keep a post visible and relevant, then by flagging it as a featured post on the editor, it automatically appears in this custom block above the main loop of posts.
				</p>
			</div>

		<div class="cell large-7 large-offset-1 theme-feature-image-stack">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/featured_block.jpg' ?>" alt="" class="image-stack-1 ">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/featured_post_metabox.png' ?>" alt="" class="image-stack-2 screenshot">
		</div>
	</div>

</div> <!-- end theme-feature-block -->

<div class="grid-x grid-padding-x align-left align-middle theme-feature-block" id="offcanvas-feature-block">
	<div class="cell large-3 large-offset-1 theme-feature-description">
			<i class="fas fa-bars strapline-image"></i>
			<span class="strapline">It's the little things</span>
			<h1 class="theme-feature-title">Off-canvas menu.
			</h1>
			<p class="theme-feature-blurb">
			The off-canvas area doubles-up as both mobile navigation and as a widgetised panel to display subtly animated recent posts, popular posts, newsletter signup widgets, etc. You can choose to have it appear from either the right or left side of the screen, to slide over the top of the main page or push it out of the way, and it's triggered by an animated hamburger icon with 4 different animations to choose from. Super-easy to set up from within the customizer.
			</p>
		</div>
		<div class="cell large-6 large-offset-1">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/off-canvas.jpg' ?>" alt="" class="screenshot">
		</div>
	</div> <!-- end theme-feature-block -->



<div class="grid-x grid-padding-x align-left align-middle theme-feature-block grey" id="sidebar-sides-feature-block">

	<div class="cell large-4 large-offset-1 theme-feature-description">
			<img class="strapline-image" src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/sidebar.png' ?>" alt="">
			<span class="strapline">Sidebar options</span>
			<h1 class="theme-feature-title"><div>To sidebar or not to sidebar. </div><div><em>That</em> is the question.</div>
			</h1>
			<p class="theme-feature-blurb">
			If you want to give your text more room to breathe, then the sidebar can be disabled completely, or you can choose to place it on either the left or the right side of the page.
			</p>
		</div>


		<div class="cell large-5 large-offset-1 theme-feature-image-stack">
			<div class="sidebar-side-slider">
				<div class="sidebar-side-slide">
					<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/sidebar_left.jpg' ?>" alt="" class="screenshot image-stack-1 sidebar-side-image">
				</div>
				<div class="sidebar-side-slide">
					<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/sidebar_off.jpg' ?>" alt="" class="screenshot image-stack-2 sidebar-side-image">
				</div>
				<div class="sidebar-side-slide">
					<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/sidebar_right.jpg' ?>" alt="" class="screenshot image-stack-3 sidebar-side-image">
				</div>
			</div>
		</div>
	</div> <!-- end theme-feature-block -->

<div class="grid-x grid-padding-x align-left align-top theme-feature-block" id="header-layouts-feature-block">


	<div class="cell large-12 header-layout-slider" data-aos-easing="ease-out-cubic">
		<div class="header-layout-slide">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/header-dark-left-logo.jpg' ?>" alt="" class="header-layout-image screenshot">
		</div>
		<div class="header-layout-slide">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/header-light-left-logo.jpg' ?>" alt="" class="header-layout-image screenshot">
		</div>
		<div class="header-layout-slide">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/header-transparent-left-logo.jpg' ?>" alt="" class="header-layout-image screenshot">
		</div>
		<div class="header-layout-slide">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/header-transparent-centre-logo.jpg' ?>" alt="" class="header-layout-image screenshot">
		</div>
		<div class="header-layout-slide">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/header-light-centre-logo.jpg' ?>" alt="" class="header-layout-image screenshot">
		</div>
		<div class="header-layout-slide">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/header-dark-centre-logo.jpg' ?>" alt="" class="header-layout-image screenshot">
		</div>
	</div>

<div class="cell large-10 large-offset-1 theme-feature-description">
			<i class="fas fa-newspaper strapline-image"></i>
			<span class="strapline">Above the fold</span>
			<h1 class="theme-feature-title">6 header variations.
			</h1>
			<p class="theme-feature-blurb">
			Choose from 6 different styles of header: light, dark, or transparent with the logo on the left of the navigation, or alternatively with the logo right in the centre of the menu itself.
			</p>
		</div>


</div> <!-- end theme-feature-block -->



	<div class="theme-feature-block grey grid-x grid-padding-x align-left align-middle" id="widescreen-post-feature-block">

		<div class="cell large-3 large-offset-1 theme-feature-description">
				<img class="strapline-image" src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/panorama-grey.png' ?>" alt="">
				<span class="strapline">Imax for posts</span>
				<h1 class="theme-feature-title"><em>Widescreen</em> block.
				</h1>
				<p class="theme-feature-blurb">
				Have a post that you think needs the cinematic treatment? If you toggle the custom <i>'Widescreen Post'</i> field, then it's displayed full-screen at the top of the page with a gorgeous featured image background for maximum visual impact.
				</p>
		</div>

		<div class="cell large-7 large-offset-1 theme-feature-image-stack">

			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/widescreen_block.png' ?>" alt="" class="image-stack-1 screenshot">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/widescreen_metabox.png' ?>" alt="" class="image-stack-2 screenshot">
		</div>
	</dv>

</div> <!-- end theme-feature-block -->


	<div class="theme-feature-block" id="typography-feature-block">

	<div class="grid-x grid-padding-x align-left align-middle">

		<div class="cell large-3 large-offset-1 theme-feature-description">
				<i class="fas fa-pen-fancy strapline-image"></i>
				<span class="strapline">Typographical fine-points</span>
				<h1 class="theme-feature-title">Why settle for average ampersands?
				</h1>
				<p class="theme-feature-blurb">
				It might be a small thing, but we felt it was worth doing.<span class="theme-feature-inline-image-container"><img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/Amplifier-logo-sunset.png' ?>" class="theme-feature-inline-image" alt=""></span> has some clever code that seeks out all ampersands in titles and headings and replaces them with an SVG version of the best looking ampersand out there, no matter what font is chosen for the rest.
				</p>
		</div>

		<div class="cell large-7 large-offset-1 theme-feature-image-stack">

			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/ampersand_circle.png' ?>" alt="" class="image-stack-1 screenshot">


		</div>
	</div>

</div> <!-- end theme-feature-block -->


<div class="theme-feature-block grey" id="fontawesome-feature-block">

	<div class="grid-x grid-padding-x align-left align-middle">

		<div class="cell large-3 large-offset-1 theme-feature-description">
				<i class="fas fa-flag strapline-image"></i>
				<span class="strapline">Lose yourself in icons</span>
				<h1 class="theme-feature-title">1,598 FontAwesome icons.
				</h1>
				<p class="theme-feature-blurb">
				Includes the complete free set of the web's most popular icon font, Font Awesome.
				</p>
		</div>

		<div class="cell large-6 large-offset-1 theme-feature-image-stack">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/fontawesome2.png' ?>" alt="" class="image-stack-1">
		</div>
	</div>

</div> <!-- end theme-feature-block -->



<div class="theme-feature-block" id="pagination-feature-block">

	<div class="grid-x grid-padding-x align-left align-middle">

		<div class="cell large-3 large-offset-1 theme-feature-description">
				<i class="fas fa-infinity strapline-image"></i>
				<span class="strapline">Where does it end?</span>
				<h1 class="theme-feature-title">Infinite scroll post loading.
				</h1>
				<p class="theme-feature-blurb">
				Increase page views and enhance the experience for the reader by adding infinite loading to your blog loop. As they scroll, older posts will load into view when the bottom of the page is reached, thereby removing the need for standard pagination (though this is still an option in the customizer). In addition, pick from 6 different animated spinners to indicate loading in progress.
				</p>
		</div>

		<div class="cell large-6 large-offset-1">
			<div class="theme-feature-image-stack">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/loader-fading-circles.gif' ?>" alt="" class="image-stack-1">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/loader-fading-blocks.gif' ?>" alt="" class="image-stack-2">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/spinner.gif' ?>" alt="" class="image-stack-3">
			</div>
			<div class="theme-feature-image-stack">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/spinner-ring.gif' ?>" alt="" class="image-stack-4">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/spinner-chasing-arrows.gif' ?>" alt="" class="image-stack-5">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/spinner-skype.gif' ?>" alt="" class="image-stack-6">
			</div>
			<div class="theme-feature-image-stack">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/load-more-button.png' ?>" alt="" class="image-stack-1">
			</div>
		</div>


	</div>

</div> <!-- end theme-feature-block -->


<div class="theme-feature-block grey" id="oneclick-feature-block">

	<div class="grid-x grid-padding-x align-left align-middle">

		<div class="cell large-3 large-offset-1 theme-feature-description">
				<i class="fas fa-upload strapline-image"></i>
				<span class="strapline">Get up-and-running in seconds</span>
				<h1 class="theme-feature-title">One-click demo import.
				</h1>
				<p class="theme-feature-blurb">
				If you want to base your site on the particular configuration used on our own demo, then you can import all the content and customizer settings via the One-click Demo Import plugin. We've bundled the required files along with the theme. And it really is as simple as one click.
				</p>
		</div>

		<div class="cell large-6 large-offset-1 theme-feature-image-stack">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/import-demo-data.png' ?>" alt="" class="image-stack-1 screenshot">
		</div>
	</div>

</div> <!-- end theme-feature-block -->



<div class="theme-feature-block" id="acf-feature-block">

	<div class="grid-x grid-padding-x align-left align-middle">

		<div class="cell large-6 large-offset-3 theme-feature-description">
				<img class="strapline-image no-lazy" src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/acf-logo.png' ?>" alt="">
				<span class="strapline">Supercharge your blog</span>
				<h1 class="theme-feature-title">Advanced Custom Fields.
				</h1>
				<p class="theme-feature-blurb">
				<span class="theme-feature-inline-image-container"><img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/Amplifier-logo-sunset.png' ?>" class="theme-feature-inline-image" alt=""></span> harnesses the power of a plugin called <a class="smoothScroll" href="https://www.advancedcustomfields.com/">Advanced Custom Fields</a> to add extra fields to posts and other objects. What that does, in turn, is allowauthors to do things like embed video backgrounds and designate posts as <a class="smoothScroll" href="#blog-layouts-feature-block">featured</a> or <a class="smoothScroll" href="#widescreen-post-feature-block">widescreen</a>. We'll be adding new custom fields in future updates to make it an even more powerful feature.
				</p>
		</div>

		<div class="cell large-5 large-offset-1">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/acf-3.jpg' ?>" alt="" class="image-stack-1 screenshot">
		</div>
		<div class="cell large-6">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/acf-2.jpg' ?>" alt="" class="image-stack-2 screenshot">
		</div>

	</div>

</div> <!-- end theme-feature-block -->


<div class="theme-feature-block grey" id="syntax-feature-block">

	<div class="grid-x grid-padding-x align-left align-middle">

		<div class="cell large-3 large-offset-1 theme-feature-description">
				<i class="fas fa-code strapline-image"></i>
				<span class="strapline">Highlight code blocks</span>
				<h1 class="theme-feature-title">Built-in syntax highlighting.
				</h1>
				<p class="theme-feature-blurb">
				If you're a developer, then rejoice at the inclusion of <a href="https://prismjs.com/">prism.js</a> to highlight syntax in your <code>code</code> blocks. 
				</p>
		</div>

		<div class="cell large-6 large-offset-1 theme-feature-image-stack">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/code.jpg' ?>" alt="" class="image-stack-1 screenshot">
		</div>

	</div>

</div> <!-- end theme-feature-block -->



<div class="theme-feature-block" id="social-feature-block">

	<div class="grid-x grid-padding-x align-left align-middle">

		<div class="social-features-slider">
			<div class="social-features-slide">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/iphone-twitter.jpg' ?>" alt="" class="social-features-image">
			</div>
			<div class="social-features-slide">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/iphone-facebook.jpg' ?>" alt="" class="social-features-image">
			</div>
			<div class="social-features-slide">
				<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/iphone-instagram.jpg' ?>" alt="" class="social-features-image">
			</div>
		</div> <!-- end #social-features-slider -->

		<div class="cell large-3 large-offset-1 theme-feature-description">
				<i class="fas fa-thumbs-up strapline-image"></i>
				<span class="strapline">Connect with your audience</span>
				<h1 class="theme-feature-title">Social media account integration.
				</h1>
				<p class="theme-feature-blurb">
				Offering readers tools to re-post and share your content is a no-brainer when it comes to generating bigger and bigger audiences. Add all your social media account names to the customizer and Amplifier will do the rest. The theme also pulls in your latest tweets and displays them in a perfectly styled widget.
				</p>
		</div>

		<div class="cell large-3 large-offset-1 theme-feature-image-stack">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/customizer-social.jpg' ?>" alt="" class="image-stack-1 screenshot">
		</div>










</div> <!-- end theme-feature-block -->






</div> <!-- end grid-container full -->

<?php

	$dc1 = ob_get_clean();

	return $dc1;

}

function register_demo_shortcodes() {

	add_shortcode('features-content', 'zt_features_content_shortcode');
	add_shortcode('homepage-content', 'zt_homepage_content_shortcode');


}

add_action('init', 'register_demo_shortcodes');



function zt_demo_google_fonts() {
	wp_enqueue_style('zt-demo-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:400,700|Open Sans:400,400i,500,500i|Crimson+Text:400,400i,600,600i|Product+Sans:300,300i,500,500i,700,700i&display=swap', false);
}

add_action('wp_enqueue_scripts', 'zt_demo_google_fonts');

?>