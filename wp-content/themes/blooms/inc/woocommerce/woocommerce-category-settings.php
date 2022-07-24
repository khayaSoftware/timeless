<?php
if ( ! thb_wc_supported() ) {
	return;
}
if ( ! is_admin() ) {
	return;
}
/**
 * Edit category header field.
 */

function thb_edit_category_header_img( $term, $taxonomy ) {
	$image     = '';
	$header_id = absint( get_term_meta( $term->term_id, 'header_id', true ) );
	if ( $header_id ) {
		$image = wp_get_attachment_image_url( $header_id, 'thumbnail' );
	} else {
		$image = wc_placeholder_img_src();
	}

	?>
	<tr class="form-field">
		<th scope="row"><h2><?php esc_html_e( 'Blooms Settings', 'blooms' ); ?></h2></th>
	</tr>
	<tr class="form-field">
		<th scope="row" valign="top"><label><?php esc_html_e( 'Header Image', 'blooms' ); ?></label></th>
		<td>
			<div id="product_cat_header" style="float:left;margin-right:10px;"><img src="<?php echo esc_url( $image ); ?>" width="60px" height="60px" /></div>
			<div style="line-height: 60px;">
				<input type="hidden" id="product_cat_header_id" name="product_cat_header_id" value="<?php echo esc_attr( $header_id ); ?>" />
				<button type="submit" class="thb_upload_header button"><?php esc_html_e( 'Upload/Add image', 'blooms' ); ?></button>
				<button type="submit" class="thb_remove_header button"><?php esc_html_e( 'Remove image', 'blooms' ); ?></button>
			</div>
		</td>
	</tr>
	<?php
}
add_action( 'product_tag_edit_form_fields', 'thb_edit_category_header_img', 20, 2 );
add_action( 'product_cat_edit_form_fields', 'thb_edit_category_header_img', 20, 2 );

/**
 * Woocommerce_category_header_img_save function.
 */

function thb_category_header_img_save( $term_id ) {
	$product_cat_header_id = filter_input( INPUT_POST, 'product_cat_header_id', FILTER_VALIDATE_INT );
	if ( isset( $product_cat_header_id ) ) {
		update_term_meta( $term_id, 'header_id', absint( $product_cat_header_id ) );
	}
}
add_action( 'edited_product_cat', 'thb_category_header_img_save', 10, 2 );
add_action( 'edited_product_tag', 'thb_category_header_img_save', 10, 2 );


/**
 * Header column added to category admin.
 */

function thb_woocommerce_product_cat_header_columns( $columns ) {

	$new_columns       = array();
	$new_columns['cb'] = $columns['cb'];
	if ( is_product_category() ) {
		$new_columns['thumb'] = esc_html__( 'Image', 'blooms' );
	}
	$new_columns['header'] = esc_html__( 'Header', 'blooms' );
	unset( $columns['cb'] );
	unset( $columns['thumb'] );

	return array_merge( $new_columns, $columns );

}
add_filter( 'manage_edit-product_cat_columns', 'thb_woocommerce_product_cat_header_columns' );
add_filter( 'manage_edit-product_tag_columns', 'thb_woocommerce_product_cat_header_columns' );


/**
 * Thumbnail column value added to category admin.
 */
function thb_woocommerce_product_cat_header_column( $columns, $column, $id ) {

	if ( 'header' === $column ) {
		$image        = '';
		$thumbnail_id = get_term_meta( $id, 'header_id', true );

		if ( $thumbnail_id ) {
			$image = wp_get_attachment_image_url( $thumbnail_id, 'thumbnail' );
		} else {
			$image = wc_placeholder_img_src();
		}
		$columns .= '<img src="' . esc_url( $image ) . '" alt="Thumbnail" class="wp-post-image" height="40" width="40" />';

	}
	return $columns;
}
add_filter( 'manage_product_cat_custom_column', 'thb_woocommerce_product_cat_header_column', 10, 3 );
add_filter( 'manage_product_tag_custom_column', 'thb_woocommerce_product_cat_header_column', 10, 3 );
