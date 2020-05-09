<?php
/*
Template Name: Demo content - Transparent header
 */
get_header('transparent');?>


<?php
get_template_part('template-parts/featured-image-with-title');
?>

<div class="main-container">

	<div class="main-grid">
		<main class="main-content">
		<div class="entry-content">
<?php while (have_posts()): the_post();?>
				<?php the_content();?>
	<?php endwhile;?>
	<?php
echo do_shortcode("[dummy-content]");
?>
	<?php get_template_part('template-parts/author-bio');?>
	<?php get_template_part('template-parts/previous-next-snippet');?>
	<?php zt_related_posts_2();?></div>
		</main>
		<?php get_sidebar();?>
	</div>
</div>
<?php get_footer();
