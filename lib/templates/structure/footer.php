<?php

beans_modify_action_callback( 'beans_footer_content', 'beans_child_footer_content' );
/**
 * Overwrite the Footer content.
 *
 * @since 1.0.0
 *
 * @return void
 */
function beans_child_footer_content() {
	include_once CHILD_THEME_DIR . '/views/footer.php';
}
