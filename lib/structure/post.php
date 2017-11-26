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
	//Remove featured image (it will appear in hero area)
	beans_remove_action('beans_post_image');
	if ( is_page() ) {
		//Remove title only on pages
		beans_remove_action( 'beans_post_title' );

		//remove comments from pages
		remove_post_type_support( 'page', 'comments' );
	}
	beans_remove_attribute('beans_comments','class','uk-panel-box');
	beans_add_attribute('beans_comment_form_wrap','class','uk-panel-box');

}
