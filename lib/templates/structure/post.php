<?php

add_action( 'wp', 'poo_set_up_post_structure' );
/**
 * Set up the post structure.
 *
 * @since 1.0.0
 *
 * @return void
 */
function poo_set_up_post_structure() {
	add_filter( 'beans_post_meta_items', 'remove_date_from_post_meta_items' );
	/**
	 * Remove date from the post meta.
	 *
	 * @since 1.0.0
	 *
	 * @return array
	 */
	function remove_date_from_post_meta_items() {
		return array(
			'author'   => 20,
			'comments' => 30
		);
	}

	// Align post image to the left.
	beans_add_attribute( 'beans_post_image', 'class', 'uk-float-left uk-margin-top-remove uk-margin-large-right uk-margin-bottom' );

	// Comments styling.
	beans_remove_attribute( 'beans_comments', 'class', 'uk-panel-box' );
	beans_add_attribute( 'beans_comment_form_wrap', 'class', 'uk-panel-box' );

	// Remove comments from pages.
	if ( ! is_page() ) {
		return;
	}
	remove_post_type_support( 'page', 'comments' );
}
