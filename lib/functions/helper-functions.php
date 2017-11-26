<?php
/**
 * Give a body class 'has-featured-image' when featured image exists
 *
 * @since 1.0.0
 *
 * @param $classes
 *
 * @return array
 */
function wst_add_featured_image_body_class( $classes ) {

	global $post;
	if ( isset ( $post->ID ) && get_the_post_thumbnail($post->ID) && !is_home() && !is_archive()) {
		$classes[] = 'has-featured-image';
	}
	return $classes;
}
add_filter( 'body_class', 'wst_add_featured_image_body_class' );

