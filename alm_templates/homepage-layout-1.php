<?php

/**
 * Repeater template file for Ajax Load More to display home page layout #1 on demo site
 *
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

get_template_part('template-parts/side-by-side', get_post_format());


