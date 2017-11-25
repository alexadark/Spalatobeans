<?php

add_action( 'wp', 'wst_set_up_post_structure' );
/**
 * Set up post structure
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_set_up_post_structure() {

	if ( is_page() ) {
		//Remove title only on pages
		beans_remove_action( 'beans_post_title' );
		//Remove featured image on pages
		beans_remove_action('beans_post_image');
		//remove comments from pages
		remove_post_type_support( 'page', 'comments' );
	}

}
