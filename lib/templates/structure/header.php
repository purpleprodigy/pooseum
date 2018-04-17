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
	beans_replace_attribute( 'beans_site_title_tag', 'class', 'uk-text-small', 'poo-tagline' );

	// Display Above Header Widget and Header Widget
	add_action( 'beans_header_before_markup', 'poo_display_above_header_widget' );
	add_action( 'beans_header', 'poo_display_header_right_widget' );

	// Remove Breadcrumbs
	beans_remove_action( 'beans_breadcrumb' );

	beans_remove_attribute( 'beans_widget_panel_above-header-widget', 'class', 'uk-panel-box' );
	beans_add_attribute( 'beans_widget_panel_above-header-widget', 'class', 'uk-hidden-small' );
}

/**
 * Display the above header widget.
 *
 * @since 1.0.0
 *
 * @return void
 */
function poo_display_above_header_widget() {
	if ( ! is_active_sidebar( 'above-header-widget' ) ) {
		return;
	} ?>
    <div class="above-header-widget">
        <div class="uk-container uk-container-center">
			<?php echo beans_widget_area( 'above-header-widget' ); ?>
        </div>
    </div>
<?php }

/**
 * Display header right widget.
 *
 * @since 1.0.0
 *
 * @return void
 */
function poo_display_header_right_widget() {
	if ( ! is_active_sidebar( 'header-right-widget' ) ) {
		return;
	} ?>

    <div class="header-right-widget">
		<?php echo beans_widget_area( 'header-right-widget' ); ?>
    </div>
<?php }
