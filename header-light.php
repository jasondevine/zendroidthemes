<?php
/**
 * The template for displaying the light header - this is for demo purposes only as the header type is actually controlled by a php switch block based on customizer choice, with classes doing all the styling. In here, we remove that switch block and simplify the header as much as we can
 *
 * Displays all of the head element and everything up until the "container" div.
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

	<body <?php
if (is_page('post-layout-3')) {body_class('light-header page-template-demo-header-light standard-post-layout-title-above has-full-width-entry-title');} else if (is_page('post-layout-4')) {body_class('light-header page-template-demo-header-light standard-post-layout-title-above no-full-width-entry-title');} else if (is_page('post-layout-5')) {body_class('light-header page-template-demo-header-light standard-post-layout-title-below has-full-width-entry-title');} else if (is_page('post-layout-6')) {body_class('light-header page-template-demo-header-light standard-post-layout-title-below no-full-width-entry-title');} else if (is_page('logo-left') || is_page('logo-centre')) {body_class(' logo-position-demo light-header page-template-demo-header-light');} else {body_class('light-header');}?>>

	<?php get_template_part('template-parts/loader-snippet')?>

	<div class="" id="back-to-top" data-magellan data-animation-easing="swing">
		<a href="#page-top" title="Up, Up and away!"><i class="fas fa-angle-double-up"></i></a>
	</div>

	<div class="sticky-header-container" data-aos="">
		<div id="sticky-header">
			<div class="sticky-header-logo">
			<?php if (get_theme_mod('zendroidPress-sticky-header-logo')): ?>
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php echo esc_url(get_theme_mod('zendroidPress-sticky-header-logo')); ?>" alt=""></a>
					<?php else: ?>
						<a class="no-logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php echo esc_url(get_template_directory_uri()) . '/library/images/Amplifier-default-sticky-logo.png' ?>" alt=""></a>
					 <?php endif;?>
			</div> <!-- end .sticky-header-logo -->
			<div class="sticky-header-label">
				<span>Now reading:</span>
			</div>
			<div id="now-reading">

				<?php if (is_front_page() || is_home() || is_search() || is_archive() || is_page()) {?>
					<h4> <?php
print_r(get_theme_mod('zendroidPress-MOTD'));?>
					</h4> <?php
} elseif (is_single()) {
	the_title('<h4 class="">', '</h4>');
}?>

			</div>

<!-- This is so that we can evenly space items in the flex parent ( the dummy item is given the same width as it's opposite counterpart, and hidden from view) -->
		<div class="dummy-sticky-header-logo">
		</div>

		<?php get_template_part('template-parts/hamburger-button');?>


	</div> <!-- end .sticky-header -->
</div> <!-- end .sticky-header-container -->
	<div class="off-canvas-wrapper">
	<?php get_template_part('template-parts/mobile-off-canvas');?>


	<div id="page-top"></div>


	<header class="light-header site-header" role="banner">

		<div class="site-header-background"></div>

	<div id="custom-search" class="reveal" data-reveal>

				<?php get_search_form();?>

				<div class="custom-search-tag-list grid-container">
					<?php zt_tag_cloud();?>
				</div>

	<div id="searchclose" data-close></div>
	</div>


<?php if ( ! is_page('logo-centre')) { ?>

		<div class="site-logo-bar">
			<?php if (get_theme_mod('zendroidPress-header-logo')): ?>
						<div class="site-logo"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php echo esc_url(get_theme_mod('zendroidPress-header-logo')); ?>" alt=""></a></div>
			<?php else: ?>
						<div class="site-logo default-site-logo">
							<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
								<img src="<?php echo esc_url(get_template_directory_uri()) . '/library/images/Amplifier-default-logo.png' ?>" alt="">
							</a>
						</div>
			<?php endif;?>
		</div>
		<?php
}

?>

<!-- Mobile menu -->
		<div class="site-title-bar title-bar mobile-title-bar">
			<div class="title-bar-left">


<?php get_template_part('template-parts/hamburger-button');?>

				<div class="site-mobile-title title-bar-title">
					<<?php if (get_theme_mod('zendroidPress-mobile-logo')): ?>
						<div class="site-mobile-logo"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php echo esc_url(get_theme_mod('zendroidPress-mobile-logo')); ?>" alt=""></a></div>
					<?php else: ?>
						<div class="site-mobile-logo default-site-mobile-logo"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php echo esc_url(get_template_directory_uri()) . '/library/images/Amplifier-default-mobile-logo.png' ?>" alt=""></a></div>
					<?php endif;?>
				</div>
			</div><!--  end .title-bar-left -->
		</div> <!-- end .mobile-title-bar -->

		<nav class="site-navigation top-bar" role="navigation" data-show-for="large">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
				</div>
			</div>

			<div class="top-bar-centre">
				<?php zt_top_bar_r();?>
			</div>
			<div class="top-bar-right">
				<?php if (!get_theme_mod('wpt_mobile_menu_layout') || get_theme_mod('wpt_mobile_menu_layout') === 'topbar'): ?>
					<?php get_template_part('template-parts/mobile-top-bar');?>
				<?php endif;?>
			</div>
		</nav>

		<div class="site-search">
			<div id="search-button" data-open="custom-search"></div>
			<div class="show-for-large"><?php get_template_part('template-parts/hamburger-button');?></div>
		</div>

	</header>
