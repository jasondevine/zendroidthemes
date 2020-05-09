<?php
/*
Template Name: Demo content - Post layout - Standard, Title above Thumbnail
 */
get_header('light');?>





<div class="main-container">

<?php if (is_page('post-layout-3')) {
	the_title('<h1 class="entry-title entry-title-full-width"><a href="' . esc_url(get_permalink()) . '" rel="bookmark"><span class="sassy-underline">', '</span></a></h1>');
	get_template_part('template-parts/subheading-snippet');
	?>

	<div class="main-grid sidebar-right">
		<main class="main-content">
				<div class="entry-content">



<article>

	<div class="article-wrapper">
	<header class="article-header">

		<div class="featured-image">
							<div class="breakout-image-single hide-for-large">
						<?php
the_post_thumbnail('zt-thumb-900');
	?>
							</div> <!-- end .hide-for-large -->
							<div class="breakout-image-featured show-for-large">
						<?php
the_post_thumbnail('large');
	?>
							</div> <!-- end .show-for-large -->
					</div>

<?php
}
if (is_page('post-layout-4')) {
	?>
<div class="main-grid sidebar-right">
		<main class="main-content">
				<div class="entry-content">
<article>

	<div class="article-wrapper">
	<header class="article-header">

		<?php
the_title('<h1 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark"><span class="sassy-underline">', '</span></a></h1>');
	get_template_part('template-parts/subheading-snippet');?>
							<div class="featured-image">
							<div class="breakout-image-single hide-for-large">
						<?php
the_post_thumbnail('zt-thumb-900');
	?>
							</div> <!-- end .hide-for-large -->
							<div class="breakout-image-featured show-for-large">
						<?php
the_post_thumbnail('large');
	?>
							</div> <!-- end .show-for-large -->
					</div>
					<?php
}
?>
	<div class="meta-container"><?php zendroidPress_entry_meta();?></div>
	</header>
	<div class="entry-content">


		<?php edit_post_link('<span data-tooltip class="inner-link" title="Edit this post.">', '</span>');?>
			<?php while (have_posts()): the_post();?>
					<?php the_content();?>
			<?php endwhile;?>
	</div><!-- end .entry-content -->
	<footer>
	</footer>
	</div> <!-- end .article-wrapper -->
</article>




					<?php get_template_part('template-parts/author-bio');?>
					<?php get_template_part('template-parts/previous-next-snippet');?>
					<?php zt_related_posts_2();?>

					</div>
		</main>
		<?php get_sidebar();?>
	</div>
</div>
<?php get_footer();
