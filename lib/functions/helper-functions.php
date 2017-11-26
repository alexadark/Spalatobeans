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
	if ( isset ( $post->ID ) && get_the_post_thumbnail($post->ID) && !is_home()) {
		$classes[] = 'has-featured-image';
	}
	return $classes;
}
add_filter( 'body_class', 'wst_add_featured_image_body_class' );


/**
 * Add the page name as css class to the body element
 *
 * @param  array $classes the current body classes
 * @return array $classes modified classes
 */
function wst_add_slug_body_class( $class ) {
	global $post;
	$class[] = $post->post_name.'-page';
	return $class;
}
add_filter( 'body_class', 'wst_add_slug_body_class' );