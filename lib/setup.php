<?php

add_action( 'after_setup_theme', 'poo_set_up_child_theme' );
/**
 * Set up the child theme.
 *
 * @since 1.0.0
 *
 * @return void
 */
function poo_set_up_child_theme() {
	poo_add_new_image_sizes();
}

/**
 * Add new image sizes.
 *
 * @since 1.0.0
 *
 * @return void
 */
function poo_add_new_image_sizes() {
	$config = array(
		'featured-image' => array(
			'width'  => 450,
			'height' => 300,
			'crop'   => true,
		),
	);

	foreach ( $config as $name => $args ) {
		$crop = array_key_exists( 'crop', $args ) ? $args['crop'] : false;

		add_image_size( $name, $args['width'], $args['height'], $crop );
	}
}
