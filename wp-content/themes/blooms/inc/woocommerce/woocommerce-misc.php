<?php
/**
 * WooCommerce misc functions
 *
 * @package WordPress
 * @subpackage blooms
 * @since 1.0
 * @version 1.0
 */

if ( ! thb_wc_supported() ) {
	return;
}

// Mini Cart Buttons.
remove_action( 'woocommerce_widget_shopping_cart_buttons', 'woocommerce_widget_shopping_cart_button_view_cart', 10 );

add_action( 'woocommerce_widget_shopping_cart_buttons', 'thb_woocommerce_widget_shopping_cart_button_view_cart', 10 );
function thb_woocommerce_widget_shopping_cart_button_view_cart() {
	echo '<a href="' . esc_url( wc_get_cart_url() ) . '" class="button style2">' . esc_html__( 'View cart', 'blooms' ) . '</a>';
}
