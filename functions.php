<?php



// Functions that are specific to theme demo (stuff like body classes for page layout) - no need to clutter the code, so separate keep it separated
get_template_part ( 'library/demo-functions' );


add_action( 'wp_enqueue_scripts', 'zt_enqueue_styles' );

function zt_enqueue_styles() {


    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style( 'zendroidthemes-com',
        get_stylesheet_directory_uri() . '/dist/assets/css/zendroidthemes.css', array(), $theme_version, 'all'
    );

   wp_enqueue_script( 'child-scripts', get_stylesheet_directory_uri().'/dist/assets/js/app.js', array('jquery'), true );


   // wp_enqueue_script('slick-slider', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), true);

}



