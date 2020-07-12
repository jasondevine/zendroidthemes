<?php
/**
 * The template for displaying the header on the cover page - this does not have the main menu and it is purposely as stripped down as possible
 *
 * @package zendroidPress
 * @since zendroidPress 1.0.0
 */

?>



<!doctype html>
<html class="no-js" <?php language_attributes();?> >
	<head>
		<meta charset="<?php bloginfo('charset');?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head();?>
	</head>

	<body>



	<header class="cover-header site-header" id="cover-header" role="banner">

			<!-- <div class="grid-container"> -->
				<div class="grid-x grid-padding-x align-bottom">
				<figure class="zt-logo cell medium-3 medium-offset-1">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/zendroid-themes-light.png' ?>" alt="" class="hide-for-medium">
						<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/zendroid-themes.png' ?>" alt="" class="show-for-medium">
					</a>
				</figure>
				<div class="cell strapline shrink">
					<span class="hide-for-medium">Wordpress-Fu.</span>

					<span class="show-for-medium">We make fine Wordpress themes.</span>
				</div>

				<div class="cell support-link shrink menu-item">
					<a href="http://zendroidthemes.ticksy.com" target="">
						<span>Support</span><i class="fas fa-envelope-open-text"></i>
					</a>
			</div>
				<div class="cell buy-link shrink menu-item">
					<a href="#" target="">
						<span>Buy</span><i class="fas fa-shopping-basket"></i>
					</a>
				</div>
				<div class="cell medium-1"></div>
				</div>
			<!-- </div> -->


	</header>

