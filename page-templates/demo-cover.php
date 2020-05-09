<?php
/*
Template Name: Demo  - cover page
 */
?>


<div id="cover-wrapper">
	<span id="page-top"></span>

<?php
get_header('cover');
?>


<div class="loader">
	<img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/library/images/cover-page/zt_logo_dark.png' ?>" alt="" class="fade-in-fwd loader-image">
</div>


<?php while (have_posts()): the_post();?>

	<?php the_content();?>

	<?php endwhile;?>

		<div class="" id="back-to-top" data-magellan data-animation-easing="swing">
		<a href="#page-top" title="Up, Up and away!"><i class="fas fa-angle-double-up"></i></a>
	</div>

<?php get_template_part( 'template-parts/stickybuy' ); ?>

	<?php get_template_part('template-parts/homepage-footer'); ?>

<?php wp_footer();?>

</div> <!-- end .cover-wrapper -->

</body>
</div> <!-- end .off-canvas-content -->
<!-- </div> end .off-canvas-wrapper -->
</html>



