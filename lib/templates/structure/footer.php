<?php

add_action( 'wp', 'poo_set_up_footer_structure' );
/**
 * Set up the footer widgets.
 *
 * @since 1.0.0
 *
 * @return void
 */
function poo_set_up_footer_structure() {
	beans_wrap_markup( 'beans_footer', 'beans_footer_wrapper', 'div', array( 'class' => 'tm-footer-wrapper' ) );
}

// Overwrite the Footer content
beans_modify_action_callback( 'beans_footer_content', 'beans_child_footer_content' );

function beans_child_footer_content() {
	include_once CHILD_THEME_DIR . '/views/footer.php';
}
