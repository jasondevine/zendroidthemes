<?php
/*
Template Name: Demo content - Infinite Scroll
 */

get_header();

?>


<?php
global $ids;
global $wp_query;
$infinite_scroll_number = get_theme_mod('zendroidPress-infinite-scroll-number');

?>

<!-- Let's check has any post been set to 'Widescreen Post', and if so, then laod the template to display
it properly -->
<?php if (get_post_meta(get_the_ID(), 'is_widescreen_post', true)) {?>
<div class="widescreen-block">
	<?php get_template_part('template-parts/content-block-widescreen');?>
</div>
<?php }?>

		<!-- SLIDER BLOCK/ORBIT -->
		<?php
// We want the slider to be displayed by default before a choice has been made in the customizer, so:
if (!get_theme_mod('zendroidPress-slider-toggle') || get_theme_mod('zendroidPress-slider-toggle') === 'value1') {?>
		<div id="slider-block" class="content-block-container grid-container-full orbit-slider">
				<?php get_template_part('template-parts/slider-block');?>
		</div> <!-- end #slider-block -->
		<?php }?>


<div class="main-container">

	<div class="main-grid">
			<main class="main-content masonry-container" id="main-post-container" >
				<h1 class="section-heading latest-section-heading">Latest.</h1>

				<?php
global $ids;
$ids = implode(', ', $ids);
echo do_shortcode('[ajax_load_more id="infinite-scroll" post__not_in="' . $ids . '" scroll="true" posts_per_page="' . $infinite_scroll_number . '" images_loaded="true" button_label="" ] ');

?>
</main>

<?php
/* Restore original Post Data */
wp_reset_postdata();
?>

<?php get_sidebar();?>

	</div> <!-- end .main-grid -->
</div> <!-- end .main-container -->




<?php get_footer();
