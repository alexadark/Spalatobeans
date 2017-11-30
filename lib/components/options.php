<?php
add_action( 'admin_init', 'wst_spalatobeans_options' );
function wst_spalatobeans_options() {

	$fields = array(
		array(
			'id'      => 'css_dev_mode',
			'label'   => 'Css dev mode',
			'description' => __('check this if you want to 
			use your own compiler during development in order to enjoy source maps and livereload, uncheck it in production',CHILD_TEXT_DOMAIN),
			'type'    => 'checkbox',
			'default' => false
		),

	);

	beans_register_options( $fields, 'beans_settings', 'options', array( 'title' => 'Css dev mode' ) );

}

