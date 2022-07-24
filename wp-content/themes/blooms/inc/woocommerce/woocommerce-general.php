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

// Pagination.
function thb_woocommerce_pagination_args( $defaults ) {
	$defaults['type']      = 'plain';
	$defaults['prev_text'] = esc_html__( 'Previous', 'blooms' );
	$defaults['next_text'] = esc_html__( 'Next', 'blooms' );

	return $defaults;
}
add_filter( 'woocommerce_pagination_args', 'thb_woocommerce_pagination_args' );

// Remove Hooks.
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
add_action( 'woocommerce_before_shop_loop_item', 'woocommerce_show_product_loop_sale_flash', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 60 );

// Move Rating.
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 98 );

// woocommerce_before_shop_loop_item.
function thb_woocommerce_before_shop_loop_item() {
	?>
	<figure class="product-thumbnail">
	<?php
}
add_action( 'woocommerce_before_shop_loop_item', 'thb_woocommerce_before_shop_loop_item', 0 );

// woocommerce_before_shop_loop_item_title.
function thb_woocommerce_before_shop_loop_item_title() {
	?>
	</figure>
	<div class="thb-product-inner-content">
	<?php
}
add_action( 'woocommerce_before_shop_loop_item_title', 'thb_woocommerce_before_shop_loop_item_title', 99 );

// woocommerce_after_shop_loop_item.
function thb_woocommerce_after_shop_loop_item() {
	?>
	</div>
	<?php
}
add_action( 'woocommerce_after_shop_loop_item', 'thb_woocommerce_after_shop_loop_item', 99 );

// Add Custom Notice wrapper.
add_action( 'thb_after_main', 'thb_custom_notice', 10 );
function thb_custom_notice() {
	?>
	<div class="thb-woocommerce-notices-wrapper"></div>
	<?php
}

// Product Classes.
function thb_add_product_classes( $classes, $product ) {
	if ( ! is_single() || ( $product->get_id() !== get_queried_object_id() && is_single() ) ) {
		global $woocommerce_loop;
		// Settings.
		$columns = thb_translate_columns( wc_get_loop_prop( 'columns' ), false );

		$classes[] = 'small-6';
		$classes[] = isset( $columns ) ? $columns : 'medium-6';
		$classes[] = 'columns';
		$classes[] = 'thb-listing-index-' . $woocommerce_loop['loop'];
	}
	if ( is_single() && $product->get_id() === get_queried_object_id() ) {
		$classes[] = 'thb-product-detail';
	}
	return $classes;
}
add_filter( 'woocommerce_post_class', 'thb_add_product_classes', 10, 2 );

// Filter Products per page.
function thb_new_loop_shop_per_page( $products_per_page ) {
	$products_per_page = thb_customizer( 'shop_products_per_page' );

	return $products_per_page;
}
add_filter( 'loop_shop_per_page', 'thb_new_loop_shop_per_page', 20 );

// Get Product Category list.

function thb_get_product_category_list( $id ) {
	if ( 1 === thb_customizer( 'shop_product_category', 1 ) ) {

		if ( 1 === thb_customizer( 'shop_product_category_single', 1 ) ) {

			if ( class_exists( 'WPSEO_Primary_Term' ) ) {
				$wpseo_primary_term = new WPSEO_Primary_Term( 'product_cat', $id );
				$wpseo_primary_term = $wpseo_primary_term->get_primary_term();
				if ( $wpseo_primary_term ) {
					$term = get_term_by( 'id', $wpseo_primary_term, 'product_cat' );
					return '<div class="product-category"><a href="' . get_term_link( $wpseo_primary_term, 'product_cat' ) . '" title="' . esc_attr( $term->name ) . '">' . esc_html( $term->name ) . '</a></div>';
				}
			}

			if ( ! has_filter( 'term_links-product_cat', 'thb_shop_product_category_single' ) ) {
				function thb_shop_product_category_single( $links ) {
					return array( $links[0] );
				}
				add_filter( 'term_links-product_cat', 'thb_shop_product_category_single' );
			}
		}
		if ( wc_get_product_category_list( $id, ', ' ) ) {
			return '<div class="product-category">' . wc_get_product_category_list( $id, ', ' ) . '</div>';
		}
	}

}

// Add to Cart Styles
add_action( 'before_woocommerce_init', 'thb_different_add_to_cart', 15 );

function thb_different_add_to_cart() {
	if ( false === thb_customizer( 'shop_product_add_to_cart', 1 ) ) {
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
	}
};

// Add Title with Link.
function thb_template_loop_product_title() {
	global $product;
	$product_url = apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product );
	?>
	<?php echo wp_kses_post( thb_get_product_category_list( $product->get_id() ) ); ?>
	<h2 class="<?php echo esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ); ?>"><a href="<?php echo esc_url( $product_url ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	<?php
}
add_action( 'woocommerce_shop_loop_item_title', 'thb_template_loop_product_title', 10 );

// Remove Rating Text
function thb_template_loop_product_rating( $html, $rating, $count ) {
	$html = '<span style="width:' . ( ( $rating / 5 ) * 100 ) . '%"></span>';
	return $html;
}
add_filter( 'woocommerce_get_star_rating_html', 'thb_template_loop_product_rating', 5, 3 );


// Breadcrumb Delimiter.
function thb_change_breadcrumb_delimiter( $defaults ) {
	$defaults['delimiter'] = ' <i>/</i> ';
	return $defaults;
}
add_filter( 'woocommerce_breadcrumb_defaults', 'thb_change_breadcrumb_delimiter' );
