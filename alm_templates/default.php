<?php

/**
 * The default template file for Ajax Load More
 *
 * This is the file that the Ajax Load More plugin calls by default, when rendering content for infinite scroll
 *
 * Learn more: {@link https://connekthq.com/plugins/ajax-load-more/}
 *
 * @package zendroidPress
 * @since zendroidPress 1.0.0
 */

global $post;
global $ids; // this is the array that we pass all the previously displayed post ID's into, to avoid repetition

$zt_sticky = get_option('sticky_posts');
$zt_remaining_sticky_posts = array_diff($zt_sticky, $ids);
$zt_remaining_sticky_posts = implode(',', $zt_remaining_sticky_posts);

$zt_sticky = implode(', ', $zt_sticky);

switch (get_theme_mod('zendroidPress-loop-arrangement')) {
case "value1":
	get_template_part('template-parts/side-by-side', get_post_format());
	break;
case "value2":
	get_template_part('template-parts/over-and-under', get_post_format());
	break;
case "value3":
	get_template_part('template-parts/list', get_post_format());
	break;
case "value4":
	get_template_part('template-parts/masonry', get_post_format());
	break;
} // end switch
