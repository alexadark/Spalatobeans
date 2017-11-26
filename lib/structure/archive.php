<?php
add_action( 'wp', 'wst_set_up_archive_structure' );
/**
 * Set up archive structure
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_set_up_archive_structure() {

	if(is_home()){
		//featured image on top of posts on blog page

		add_action( 'beans_post_prepend_markup', 'beans_post_image' );

	}

}