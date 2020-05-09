<?php
/*
Template Name: Demo content - Standard Pagination
 */

get_header();

global $ids;
global $wp_query;

?>

<!-- Let's check has any post been set to 'Widescreen Post', and if so, then laod the template to display
it properly -->
<?php if (get_post_meta(get_the_ID(), 'is_widescreen_post', true)) {?>
<div class="widescreen-block">
	<?php get_template_part('template-parts/content-block-widescreen');?>
</div>
<?php }?>

<?php

$checkpaged = (get_query_var('paged')) ? get_query_var('paged') : 1;
// Query Arguments
$args = array(
	'post_type' => array('post'),
	// 'ignore_sticky_posts' => true,
	'order' => 'DESC',
	'orderby' => 'date',
	'posts_per_page' => 5,
	'paged' => $checkpaged,
	'post__not_in' => $ids,
);
// The Query
$main_filtered = new WP_Query($args);



// As zt_pagination() uses the global $wp_query, we need to alter the global $wp_query variable here before paginate_links is called, so that the custom query is being used to generate the pages. We'll save the global as a new variable and overwrite it, before restoring afterwards
	$original_query = $wp_query; // store original query for later use
	$wp_query = $main_filtered; // overwrite it with the custom query

	?>


<div class="main-container">
	<div class="main-grid">
			<main class="main-content" id="main-post-container" >
				<h1 class="section-heading latest-section-heading">Latest.</h1>


<?php

// The Loop
	if ($wp_query->have_posts()) {
		$counter = -1; // Initialize a counter variable
		while ($wp_query->have_posts()) {
			$wp_query->the_post();
			$counter++;
			get_template_part('template-parts/over-and-under', get_post_format());

		} // end while $wp_query->the_post()
	} // end if $wp_query->the_post()
	else {
			esc_html_e('No posts found', 'zendroidPress'); // no posts found
		}


?>

<?php
if (function_exists('zt_pagination')):
		zt_pagination();
	endif; // endif function_exists
?>




		</main>

		<?php

		$wp_query = $original_query; // restore original query

/* Restore original Post Data */
	wp_reset_postdata();

	?>

		<?php get_sidebar();?>

			</div> <!-- end .main-grid -->
		</div> <!-- end .main-container -->




		<?php get_footer();
