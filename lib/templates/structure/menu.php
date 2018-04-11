<?php

add_action( 'wp', 'poo_set_up_menu_structure' );
/**
 * Set up the menu structure.
 *
 * @since 1.0.0
 *
 * @return void
 */
function poo_set_up_menu_structure() {
//remove the button class and the word 'Menu', from hamburger icon on mobile.
	beans_remove_attribute( 'beans_primary_menu_offcanvas_button', 'class', 'uk-button' );
	beans_remove_output( 'beans_offcanvas_menu_button' );
	beans_remove_attribute( 'beans_widget_panel_offcanvas_menu', 'class', 'uk-panel-box' );
}
