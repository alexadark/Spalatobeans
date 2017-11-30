<?php
add_action( 'wp', 'wst_set_up_sidebars_structure' );
/**
 * Set_up_sidebars_structure
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_set_up_sidebars_structure() {
	beans_add_attribute( 'beans_widget_panel', 'class', 'uk-panel-box' );
	add_action( 'beans_layout_grid_settings', 'wst_layout_grid_settings' );
}

/**
 * Change layout settings
 *
 * @since 1.0.0
 *
 * @param $layouts
 *
 * @return array
 */
function wst_layout_grid_settings($layouts){
	return array_merge( $layouts, array(
		'grid' => 10,
		'sidebar_primary' => 3,
		'sidebar_secondary' => 3,
	) );
}


add_action( 'widgets_init', 'wst_remove_secondary_sidebar' );
/**
 * Unregister secondary sidebar
 *
 * @since 1.0.0
 *
 * @return void
 */

function wst_remove_secondary_sidebar() {

	beans_deregister_widget_area( 'sidebar_secondary' );

}




