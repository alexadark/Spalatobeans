<?php

add_action( 'wp', 'wst_set_up_menu_structure' );
/**
 * Set up menu structure
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_set_up_menu_structure(){
//remove the button class and the word menu, from hamburger icon on mobile
	beans_remove_attribute('beans_primary_menu_offcanvas_button','class','uk-button');
	beans_remove_output('beans_offcanvas_menu_button');
	beans_remove_attribute('beans_widget_panel_offcanvas_menu','class','uk-panel-box');

}

