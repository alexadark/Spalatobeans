<?php
add_action( 'widgets_init', 'wst_register_widget_areas' );
/**
 * Register your widget areas here
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_register_widget_areas() {

	$widgets_areas = array(

		array(
			'name'        => __( 'Fat Footer', CHILD_TEXT_DOMAIN ),
			'id'          => 'fat-footer',
			'beans_type'  => 'grid',
			'description' => __( 'This is the widget area for the fat footer widgets', CHILD_TEXT_DOMAIN )
		),
		array(
			'name'        => __( 'Top Bar', CHILD_TEXT_DOMAIN ),
			'id'          => 'top-bar',
			'beans_type'  => 'grid',
			'description' => __( 'This is the widget area for the top bar', CHILD_TEXT_DOMAIN )
		),
	);

	foreach ( $widgets_areas as $widget_area ) {

		beans_register_widget_area( $widget_area );


	}
}

