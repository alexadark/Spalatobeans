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
			'name'        => 'Fat Footer',
			'id'          => 'fat-footer',
			'beans_type'  => 'grid',
			'description' => ''
		),
	);
	foreach ( $widgets_areas as $widget_area ) {
		beans_register_widget_area( array(
			'name'        => $widget_area['name'],
			'id'          => $widget_area['id'],
			'beans_type'  => $widget_area['beans_type'],
			'description' => $widget_area['description']
		) );

	}
}

