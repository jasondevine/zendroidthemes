<?php
/*
Template Name: Demo content - Post layout - Featured Image, Title Contained
 */
get_header('transparent');?>
<?php
get_template_part('template-parts/featured-image-with-title');
?>
<div class="main-container">
	<div class="main-grid sidebar-right">
		<main class="main-content">
			<div class="entry-content">
				<article>
					<div class="article-wrapper">
						<header class="article-header">
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