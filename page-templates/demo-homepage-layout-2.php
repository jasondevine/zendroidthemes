<?php
/*
Template Name: Demo content - Homepage Layout 2 - Over-and-Under
 */

get_header();

?>


<?php
global $ids; // this is the array that we pass all the previously displayed post ID's into, to avoid repetition

?>

<!-- Let's check has any post been set to 'Widescreen Post', and if so, then laod the template to display
it properly -->
<?php if (get_post_meta(get_the_ID(), 'is_widescreen_post', true)) {?>
<div class="widescreen-block">
	<?php get_template_part('template-parts/content-block-widescreen');?>
</div>
<?php }?>






		<!-- FEATURED POSTS BLOCK -->
		<!-- We want this shown by default OR if the option is chosen in the customizer -->
		<?php if ((!get_theme_mod('zendroidPress-featured-posts-toggle')) || (get_theme_mod('zendroidPress-featured-posts-toggle') === 'value1')) {?>
				<div id="featured-block" class="content-block-container grid-container">

						<h1 class="section-heading">Featured.</h1>
						<?php get_template_part('template-parts/featured-posts-block');?>
				</div> <!-- end #featured-block -->
		<?php }?>


		<!-- FIRST CONTENT BLOCK -->
		<!-- We don't want the block to be shown if the category is not set explicitly in customizer, so ..... -->

		<?php if (get_theme_mod('zendroidPress-category-dropdown') != 0) {
	?>
		<div id="<?php $catname = get_cat_name(get_theme_mod('zendroidPress-category-dropdown'));
	echo esc_attr($catname)?>-block" class="content-block-container content-block-1 grid-container">
				<h1 class="section-heading"><?php $catname = get_cat_name(get_theme_mod('zendroidPress-category-dropdown'));
	echo esc_attr($catname)?>.</h1>
				<?php get_template_part('template-parts/content-block-1');?>
		</div> <!-- end content-block-1 -->
		<?php }?>


		<!-- SECOND CONTENT BLOCK -->
		<!-- We don't want the block to be shown if the category is not set explicitly in customizer, so ..... -->

		<?php if (get_theme_mod('zendroidPress-category-dropdown-2') != 0) {
	?>
		<div id="<?php $catname = get_cat_name(get_theme_mod('zendroidPress-category-dropdown-2'));
	echo esc_attr($catname)?>-block" class="content-block-container content-block-2 grid-container">
				<h1 class="section-heading"><?php $catname = get_cat_name(get_theme_mod('zendroidPress-category-dropdown-2'));
	echo esc_attr($catname)?>.</h1>
				<?php get_template_part('template-parts/content-block-2');?>
		</div>	<!-- end content-block-2 -->
		<?php }?>

<div class="main-container">
	<div class="main-grid">
		<?php if (is_page('homepage-layout-2') && class_exists('AjaxLoadMore')) {
	?>
			<main class="main-content" id="main-post-container" >
				<h1 class="section-heading latest-section-heading">Latest.</h1>
				<?php
$ids = implode(', ', $ids);

	echo do_shortcode('[ajax_load_more theme_repeater="homepage-layout-2.php" loading_style="infinite skype"  post_type="post" post__not_in="' . $ids .'" images_loaded="true"]')
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
