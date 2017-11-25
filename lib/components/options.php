<?php
//add_action( 'admin_init', 'wst_spalatobeans_options' );
function wst_spalatobeans_options() {
	$fields = array(
		array(
			'id'      => 'css_dev_mode',
			'label'   => 'Css dev mode',
			'type'    => 'checkbox',
			'default' => 0
		),

	);

	beans_register_options( $fields, 'theme_options', 'settings', array( 'title' => 'Css dev mode' ) );

}

use Carbon_Fields\Container;
use Carbon_Fields\Field;



	Container::make( 'theme_options', 'Theme Options' )
	         ->add_fields( array(
		         Field::make( 'checkbox', 'crb_css_dev_mode' )
	         ) );

