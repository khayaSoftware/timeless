<?php
/**
 * WooCommerce Filter bar functions
 *
 * @package WordPress
 * @subpackage blooms
 * @since 1.0
 * @version 1.0
 */


if ( ! thb_wc_supported() ) {
	return;
}

// Remove/Add Breadcrumbs.
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

function thb_wc_breadcrumbs() {
	$classes[] = 'thb-woocommerce-header';
	?>
	<?php
	if ( is_shop() ) {
		$shop_header_bg = thb_customizer( 'shop_header_bg' );
		if ( $shop_header_bg ) {
			?>
			<div class="thb-shop-header-image">
				<?php
					echo wp_get_attachment_image( $shop_header_bg, 'full' );
				?>
			</div>
			<?php
		}
	}
	?>
	<?php if ( is_product_category() || is_product_tag() ) { ?>
			<?php
				$cat       = get_queried_object();
				$cat_id    = $cat->term_id;
				$header_id = get_term_meta( $cat_id, 'header_id', true );
				$image     = wp_get_attachment_url( $header_id, 'full' );

			if ( $image ) {
				?>
				<div class="thb-shop-header-image">
					<?php echo wp_get_attachment_image( $header_id, 'full' ); ?>
				</div>
				<?php
			}
	}
	?>
	<div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
		<?php if ( is_product() ) { ?>
			<div class="thb-breadcrumb-bar">
					<?php woocommerce_breadcrumb(); ?>
					<?php do_action( 'thb_product_navigation' ); ?>
			</div>
		<?php } ?>
		<div class="row">
			<div class="small-12 columns">
				<?php if ( ! is_product() ) { ?>
					<div class="thb-woocommerce-header-title">
						<div class="thb-category-title-container">
							<h1><?php woocommerce_page_title(); ?></h1>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php
}
add_action( 'woocommerce_before_main_content', 'thb_wc_breadcrumbs', 0 );

function thb_filter_bar() {
	if ( is_product() ) {
		return;
	}

	?>
	<div class="thb-filter-bar">
		<div class="thb-filter-bar-inner">
			<?php	if ( is_active_sidebar( 'thb-shop-filters' ) ) { ?>
				<a href="#" id="thb-shop-filters"><?php get_template_part( 'assets/img/svg/filter.svg' ); ?> <?php esc_html_e( 'Toggle Filters', 'blooms' ); ?></a>
			<?php } ?>
			<?php if ( is_active_sidebar( 'thb-shop-filters' ) ) { ?>
				<aside class="thb-shop-filters">
					<header class="thb-shop-filter-header">
						<div class="thb-panel-title"><?php esc_html_e( 'Filters', 'blooms' ); ?></div>
						<a href="#" class="thb-close" title="<?php esc_attr_e( 'Close', 'blooms' ); ?>"><?php get_template_part( 'assets/img/svg/close.svg' ); ?></a>
					</header>
					<div class="thb-shop-filter-content">
						<?php
							dynamic_sidebar( 'thb-shop-filters' );
						?>
					</div>
				</aside>
			<?php } ?>
			<div class="thb-filter-bar-box">
				<?php woocommerce_catalog_ordering(); ?>
			</div>
		</div>
	</div>
	<?php
}
add_action( 'woocommerce_before_main_content', 'thb_filter_bar', 5 );
