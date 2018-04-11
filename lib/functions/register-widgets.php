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
			'name'        => __( 'Above Header', CHILD_TEXT_DOMAIN ),
			'id'          => 'above-header-widget',
			'beans_type'  => 'grid',
			'description' => __( 'This is the widget area for above the header.', CHILD_TEXT_DOMAIN )
		),
		array(
			'name'        => __( 'Before Footer', CHILD_TEXT_DOMAIN ),
			'id'          => 'before-footer',
			'beans_type'  => 'grid',
			'description' => __( 'This is the widget area for before the footer widgets.', CHILD_TEXT_DOMAIN )
		),
		array(
			'name'        => __( 'Footer Widget 1', CHILD_TEXT_DOMAIN ),
			'id'          => 'footer-widget-1',
			'beans_type'  => 'grid',
			'description' => __( 'This is the widget area for footer widget 1.', CHILD_TEXT_DOMAIN )
		),
		array(
			'name'        => __( 'Footer Widget 2', CHILD_TEXT_DOMAIN ),
			'id'          => 'footer-widget-2',
			'beans_type'  => 'grid',
			'description' => __( 'This is the widget area for footer widget 3.', CHILD_TEXT_DOMAIN )
		),
		array(
			'name'        => __( 'Footer Widget 3', CHILD_TEXT_DOMAIN ),
			'id'          => 'footer-widget-3',
			'beans_type'  => 'grid',
			'description' => __( 'This is the widget area for footer widget 3.', CHILD_TEXT_DOMAIN )
		),
	);

	foreach ( $widgets_areas as $widget_area ) {
		beans_register_widget_area( $widget_area );
	}
}
