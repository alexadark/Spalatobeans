<?php
add_action( 'admin_init', 'wst_spalatobeans_options' );
function wst_spalatobeans_options() {
	$fields = array(
		array(
			'id'      => 'css_dev_mode',
			'label'   => 'Css dev mode',
			'type'    => 'checkbox',
			'default' => false
		),

	);

	beans_register_options( $fields, 'beans_settings', 'options', array( 'title' => 'Css dev mode' ) );

}

