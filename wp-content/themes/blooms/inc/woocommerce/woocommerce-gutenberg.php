<?php
/**
 * WooCommerce Gutenberg functions
 *
 * @package WordPress
 * @subpackage fifthavenue
 * @since 1.0
 * @version 1.0
 */

function thb_woocommerce_blocks_product_grid_item_html( $html, $data, $product ) {
	$product_id = url_to_postid( $data->permalink );
	$categories = thb_get_product_category_list( $product_id );
	$html       = "<li class=\"wc-block-grid__product product\">
				{$data->badge}
				<figure class=\"product-thumbnail\">
					<a href=\"{$data->permalink}\" class=\"wc-block-grid__product-link thb-product-image-link\">
						{$data->image}
					</a>
				</figure>
				<div class=\"thb-product-inner-content\">
					{$categories}
					<h2 class=\"woocommerce-loop-product__title\"><a href=\"{$data->permalink}\">{$data->title}</a></h2>
					{$data->price}
					{$data->rating}
					{$data->button}
				</div>
			</li>";
	return $html;
}
add_filter( 'woocommerce_blocks_product_grid_item_html', 'thb_woocommerce_blocks_product_grid_item_html', 10, 3 );

function thb_activate_gutenberg_products( $can_edit, $post_type ) {
	if ( 'product' === $post_type ) {
		$can_edit = true;
	}

	return $can_edit;
}
add_filter( 'use_block_editor_for_post_type', 'thb_activate_gutenberg_products', 10, 2 );

function thb_woocommerce_taxonomy_args_product_cat_tag( $args ) {
	$args['show_in_rest'] = true;

	return $args;
}
add_filter( 'woocommerce_taxonomy_args_product_cat', 'thb_woocommerce_taxonomy_args_product_cat_tag', 10, 1 );
add_filter( 'woocommerce_taxonomy_args_product_tag', 'thb_woocommerce_taxonomy_args_product_cat_tag', 10, 1 );
