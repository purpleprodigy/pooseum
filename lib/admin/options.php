<?php

add_action( 'admin_init', 'pooseum_options' );
/**
 * Add Options Beans Settings for Purple Prodigy Beans Child Theme.
 *
 * @since 1.0.0
 *
 * @return void
 */
function pooseum_options() {
	$fields = array(
		array(
			'id'          => 'css_dev_mode',
			'label'       => 'CSS dev mode',
			'description' => __( 'Check this if you want to use your own compiler during development in
			order to display source maps. Uncheck this in production.', CHILD_TEXT_DOMAIN ),
			'type'        => 'checkbox',
			'default'     => false
		),
	);

	beans_register_options( $fields, 'beans_settings', 'options', array( 'title' => 'Purple Prodigy Child Theme Options' ) );
}
