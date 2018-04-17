<?php

add_action( 'widgets_init', 'poo_register_widget_areas' );
/**
 * Register the widget areas.
 *
 * @since 1.0.0
 *
 * @return void
 */
function poo_register_widget_areas() {
	$widgets_areas = array(
		array(
			'name'        => __( 'Header Right', CHILD_TEXT_DOMAIN ),
			'id'          => 'header-right-widget',
			'beans_type'  => 'grid',
			'description' => __( 'This is the widget area for the right of the header.', CHILD_TEXT_DOMAIN )
		),
		array(
			'name'        => __( 'Above Header', CHILD_TEXT_DOMAIN ),
			'id'          => 'above-header-widget',
			'beans_type'  => 'grid',
			'description' => __( 'This is the widget area for above the header.', CHILD_TEXT_DOMAIN )
		),
	);

	foreach ( $widgets_areas as $widget_area ) {
		beans_register_widget_area( $widget_area );
	}
}
