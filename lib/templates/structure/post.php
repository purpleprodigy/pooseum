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
	// Remove the post meta, post meta categories and comments.
	beans_remove_action( 'beans_post_meta' );
	beans_remove_action( 'beans_post_meta_categories' );
	beans_remove_action( 'beans_comments_template' );

	// Align post image to the left.
	beans_add_attribute( 'beans_post_image', 'class', 'uk-float-left uk-margin-top-remove uk-margin-large-right uk-margin-bottom' );
}
