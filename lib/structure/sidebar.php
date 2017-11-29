<?php
//add_action( 'wp', 'wst_set_up_sidebars_structure' );
/**
 * Set_up_sidebars_structure
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_set_up_sidebars_structure() {
	beans_add_attribute( 'beans_widget_panel', 'class', 'uk-panel-box' );
	//change sidebar width
	beans_replace_attribute('beans_primary', 'class', 'uk-width-medium-3-4','uk-width-large-7-10 uk-width-medium-2-3');
	beans_replace_attribute('beans_sidebar_primary', 'class', 'uk-width-medium-1-4','uk-width-large-3-10 uk-width-medium-1-3');
//	if(is_page_template())
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




