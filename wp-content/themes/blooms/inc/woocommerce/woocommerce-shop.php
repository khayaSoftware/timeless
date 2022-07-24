<?php
/**
 * WooCommerce Shop Page related functions
 *
 * @package WordPress
 * @subpackage blooms
 * @since 1.0
 * @version 1.0
 */

// Remove Default Sidebar.
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

// Before Shop page content.
function thb_woocommerce_before_main_content() {
	if ( is_product() ) {
		return;
	}
	?>
	<div class="row">
		<div class="small-12 columns">
	<?php
}
add_action( 'woocommerce_before_main_content', 'thb_woocommerce_before_main_content', 5 );

// After Shop page content.
function thb_woocommerce_after_main_content() {
	if ( is_product() ) {
		return;
	}
	?>
			<?php
			if ( ! is_product_category() && ! is_product_tag() ) {
				if ( thb_customizer( 'shop_bottom_text' ) ) {
					echo '<div class="shop-bottom-text">' . wp_kses_post( wpautop( thb_customizer( 'shop_bottom_text' ) ) ) . '</div>';
				}
			}
			?>
		</div>
	</div>
	<?php
}
add_action( 'woocommerce_after_main_content', 'thb_woocommerce_after_main_content', 99 );
