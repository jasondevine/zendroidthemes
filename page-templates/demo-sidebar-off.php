<?php
/*
Template Name: Demo content - Sidebar off
*/
get_header('transparent'); ?>


<?php 
	get_template_part( 'template-parts/featured-image-with-title' ); 
?>



<div class="main-container">
		<?php
		if (get_field('subheading')) { ?>
			<div class="subheading">
		<?php
			$subheading = get_field('subheading'); print_r ($subheading);
		?> 
			</div>
		<?php
		}
		?>

	<div class="main-grid sidebar-off">
		<main class="main-content">
				<div class="entry-content">
					<?php while (have_posts()): the_post();?>
											<?php the_content();?>
					<?php endwhile;?>
					<?php get_template_part('template-parts/author-bio'); ?>
					<?php get_template_part('template-parts/previous-next-snippet'); ?>
					<?php zt_related_posts_2(); ?>
					</div>
		</main>
	</div>
</div>
<?php get_footer();
