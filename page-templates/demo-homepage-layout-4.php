<?php
/*
Template Name: Demo content - Homepage Layout 4 - Masonry
 */

get_header();

?>


<?php
global $ids;
global $wp_query;
$infinite_scroll_number = get_theme_mod('zendroidPress-infinite-scroll-number');
$load_more_number = get_theme_mod('zendroidPress-load-more-number');

?>


<!-- Let's check has any post been set to 'Widescreen Post', and if so, then laod the template to display
it properly -->
<?php if (get_post_meta(get_the_ID(), 'is_widescreen_post', true)) {?>
<div class="widescreen-block">
	<?php get_template_part('template-parts/content-block-widescreen');?>
</div>
<?php }?>

<div class="main-container">
	<div class="main-grid">
		<?php if (is_page('homepage-layout-4') && class_exists('AjaxLoadMore')) {
	?>
			<main class="main-content masonry-container" id="main-post-container" >
				<h1 class="section-heading latest-section-heading">Latest.</h1>
				<?php
$ids = implode(', ', $ids);

			echo do_shortcode('[ajax_load_more theme_repeater="homepage-layout-4.php" loading_style="infinite fading-circles" id="infinite-scroll" post__not_in="' . $ids . '" post_type="post" scroll_distance="200" transition="masonry" masonry_selector=".masonry-post" masonry_animation="zoom-out" images_loaded="true"]')

	?>
			</main>

<?php
}
/* Restore original Post Data */
wp_reset_postdata();
?>

<?php get_sidebar();?>

	</div> <!-- end .main-grid -->
</div> <!-- end .main-container -->




<?php get_footer();
