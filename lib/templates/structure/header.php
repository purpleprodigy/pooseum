<?php

add_action( 'wp', 'poo_set_up_header_structure' );
/**
 * Set up header structure
 *
 * @since 1.0.0
 *
 * @return void
 */
function poo_set_up_header_structure() {
	// Remove Tagline
	beans_remove_action( 'beans_site_title_tag' );

	// Sticky Header
	beans_add_attribute( 'beans_header', 'data-uk-sticky', "{top:-300, animation:'uk-animation-slide-top'}" );

	// Remove Breadcrumbs
	beans_remove_action( 'beans_breadcrumb' );
}
