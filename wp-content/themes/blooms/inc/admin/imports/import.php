<?php
/**
 * Demo Imports
 *
 * @package WordPress
 * @subpackage blooms
 * @since 1.0
 * @version 1.0
 */

if ( ! is_admin() ) {
	return;
}

function thb_ocdi_import_files() {
	return thb_theme_admin()->thb_demos();
}
add_filter( 'pt-ocdi/import_files', 'thb_ocdi_import_files' );

add_action( 'pt-ocdi/enable_wp_customize_save_hooks', '__return_true' );

function thb_ocdi_after_import( $selected_import ) {
	// Set Pages.
	update_option( 'show_on_front', 'page' );

	$home = get_page_by_title( 'Home' );
	$blog = get_page_by_title( 'Blog' );

	$myaccount = get_page_by_title( 'My Account' );
	$shop      = get_page_by_title( 'Shop' );
	$cart      = get_page_by_title( 'Cart' );
	$checkout  = get_page_by_title( 'Checkout' );

	// Set Pages.
	update_option( 'page_on_front', $home->ID );
	update_option( 'page_for_posts', $blog->ID );

	// Set WC Pages.
	update_option( 'woocommerce_myaccount_page_id', $myaccount->ID );
	update_option( 'woocommerce_shop_page_id', $shop->ID );
	update_option( 'woocommerce_cart_page_id', $cart->ID );
	update_option( 'woocommerce_checkout_page_id', $checkout->ID );

	// Set Menus.
	$navigation = get_term_by( 'name', 'navigation', 'nav_menu' );
	$acc_menu   = get_term_by( 'name', 'account', 'nav_menu' );

	set_theme_mod(
		'nav_menu_locations',
		array(
			'nav-menu'     => $navigation->term_id,
			'acc-menu-out' => $acc_menu->term_id,
			'acc-menu-in'  => $acc_menu->term_id,
		)
	);
}
add_action( 'pt-ocdi/after_import', 'thb_ocdi_after_import' );

// Disable Branding.
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

// Clear Widgets.
function thb_ocdi_before_widgets_import( $selected_import ) {
	update_option( 'sidebars_widgets', array() );
}
add_action( 'pt-ocdi/before_widgets_import', 'thb_ocdi_before_widgets_import' );

// Disable Image Regeneration:
add_filter( 'pt-ocdi/regenerate_thumbnails_in_content_import', '__return_false' );
