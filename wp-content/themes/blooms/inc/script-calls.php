<?php
/**
 * Enqueue / dequeue assets
 *
 * @package WordPress
 * @subpackage blooms
 * @since 1.0
 * @version 1.0
 */

// De-register Contact Form 7 styles.
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

// Main Styles.
function thb_main_styles() {
	global $post;
	$thb_theme_directory_uri = Thb_Theme_Admin::$thb_theme_directory_uri;
	$thb_theme_version       = Thb_Theme_Admin::$thb_theme_version;

	// Enqueue.
	wp_enqueue_style( 'thb-app', esc_url( get_theme_file_uri( 'assets/css/app.css' ) ), null, esc_attr( $thb_theme_version ) );

	if ( ! defined( 'THB_DEMO_SITE' ) ) {
		wp_enqueue_style( 'thb-style', get_stylesheet_uri(), null, esc_attr( $thb_theme_version ) );
	}
	if ( thb_theme_admin()->thb_googlefont_url() ) {
		wp_enqueue_style( 'thb-google-fonts', thb_theme_admin()->thb_googlefont_url(), null, esc_attr( $thb_theme_version ) );
	}

	wp_add_inline_style( 'thb-app', thb_selection() );

	if ( $post ) {
		if ( has_shortcode( $post->post_content, 'contact-form-7' ) && function_exists( 'wpcf7_enqueue_styles' ) ) {
			wpcf7_enqueue_styles();
		}
	}

}
add_action( 'wp_enqueue_scripts', 'thb_main_styles' );

// Main Scripts.
function thb_register_js() {
	if ( ! is_admin() ) {
		global $post;
		$thb_dependency          = array( 'jquery' );
		$thb_theme_directory_uri = Thb_Theme_Admin::$thb_theme_directory_uri;
		$thb_theme_version       = Thb_Theme_Admin::$thb_theme_version;

		wp_enqueue_script( 'thb-app', esc_url( get_theme_file_uri( 'assets/js/app.min.js' ) ), $thb_dependency, esc_attr( $thb_theme_version ), true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		if ( $post ) {
			if ( has_shortcode( $post->post_content, 'contact-form-7' ) && function_exists( 'wpcf7_enqueue_scripts' ) ) {
				wpcf7_enqueue_scripts();
			}
		}

		wp_localize_script(
			'thb-app',
			'themeajax',
			array(
				'url'      => admin_url( 'admin-ajax.php' ),
				'l10n'     => array(
					'adding_to_cart' => esc_html__( 'Adding to Cart', 'blooms' ),
					'added_to_cart'  => esc_html__( 'Added To Cart', 'blooms' ),
					'has_been_added' => esc_html__( 'has been added to your cart.', 'blooms' ),
					'prev'           => esc_html__( 'Prev', 'blooms' ),
					'next'           => esc_html__( 'Next', 'blooms' ),
					'qty'            => esc_html__( 'QTY', 'blooms' ),
				),
				'settings' => array(
					'thumbnail_columns' => apply_filters( 'woocommerce_product_thumbnails_columns', 5 ),
					'cart_url'          => thb_wc_supported() ? wc_get_cart_url() : false,
					'is_cart'           => thb_wc_supported() ? is_cart() : false,
					'is_checkout'       => thb_wc_supported() ? is_checkout() : false,
				),
			)
		);
	}
}
add_action( 'wp_enqueue_scripts', 'thb_register_js' );

// WooCommerce Remove Unnecessary Files.
function thb_remove_wc_gallery_noscript() {
	remove_action( 'wp_head', 'wc_gallery_noscript' );
}
add_action( 'init', 'thb_remove_wc_gallery_noscript' );

function thb_woocommerce_scripts_styles() {
	if ( ! is_admin() ) {
		if ( thb_wc_supported() ) {
			wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
			wp_deregister_style( 'woocommerce_prettyPhoto_css' );

			wp_dequeue_style( 'jquery-selectBox' );
			wp_dequeue_script( 'jquery-selectBox' );

			if ( ! class_exists( 'WC_Checkout_Add_Ons_Loader' ) ) {
				wp_dequeue_style( 'selectWoo' );
				wp_deregister_style( 'selectWoo' );
				wp_dequeue_script( 'selectWoo' );
				wp_deregister_script( 'selectWoo' );
			}

			if ( ! is_checkout() ) {
				wp_dequeue_script( 'jquery-selectBox' );
				wp_dequeue_style( 'selectWoo' );
				wp_dequeue_script( 'selectWoo' );
			}
		}
	}
}

add_action( 'wp_enqueue_scripts', 'thb_woocommerce_scripts_styles', 10001 );
add_filter( 'woocommerce_enqueue_styles', '__return_false' );
