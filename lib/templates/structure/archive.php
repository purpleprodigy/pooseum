<?php
add_filter( 'get_the_archive_title', 'poo_remove_category_from_title' );
/**
 * Remove the word 'Category' from the title on the Archive page.
 *
 * @since 1.0.0
 *
 * @param $title
 *
 * @return string|void
 */
function poo_remove_category_from_title($title) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
		return $title;
	}
}
