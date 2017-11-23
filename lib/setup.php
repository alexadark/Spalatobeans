<?php
add_action( 'after_setup_theme', 'wst_set_up_child_theme' );
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

//Timber

// If the Timber plugin isn't activated, print a notice in the admin.
if ( ! class_exists( 'Timber' ) ) {
	add_action( 'admin_notices', function() {
		echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php' ) ) . '</a></p></div>';
	} );
	return;
}

add_filter( 'timber_context', 'wst_add_to_context'  );

function wst_add_to_context( $context ) {
	$post               = new TimberPost();
	$context['post']    = $post;
	$context['options'] = get_fields('option');
	return $context;
}