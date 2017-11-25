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
}
