<?php
add_action( 'after_setup_theme', 'wst_set_up_child_theme' );
/**
 * Set up child theme
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_set_up_child_theme(){
	wst_add_new_image_sizes();
}

/**
 * Adds new image sizes.
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_add_new_image_sizes() {
	$config = array(
//		'featured-image' => array(
//			'width'  => 720,
//			'height' => 400,
//			'crop'   => true,
//		),
	);

	foreach( $config as $name => $args ) {
		$crop = array_key_exists( 'crop', $args ) ? $args['crop'] : false;

		add_image_size( $name, $args['width'], $args['height'], $crop );
	}
}

