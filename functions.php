<?php



// Functions that are specific to theme demo (stuff like body classes for page layout) - no need to clutter the code, so separate keep it separated
get_template_part ( 'library/demo-functions' );


add_action( 'wp_enqueue_scripts', 'zt_enqueue_styles' );

function zt_enqueue_styles() {

	$parent_style = 'parent-style';

   // wp_enqueue_style( $parent_style, get_template_directory_uri() . '/dist/assets/css/app.css' );
   //  wp_enqueue_style( 'child-style',
   //      get_stylesheet_directory_uri()  . '/dist/assets/css/app.css',
   //      array( $parent_style ),
   //      wp_get_theme()->get('Version')
   //  );

    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri()  . '/dist/assets/css/app.css', wp_get_theme()->get('Version')
    );

   wp_enqueue_script( 'child-scripts', get_stylesheet_directory_uri().'/dist/assets/js/app.js', array('jquery'), true );
   // wp_enqueue_script( 'parent-scripts', get_template_directory_uri().'/dist/assets/js/app.js', array('jquery'), true );


   wp_enqueue_script('slick-slider', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), true);

}



