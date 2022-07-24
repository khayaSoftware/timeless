<?php
/**
 * Mobile Menu Template
 *
 * @package WordPress
 * @subpackage blooms
 * @since 1.0
 * @version 1.0
 */

?>
<!-- Start Mobile Menu -->
<nav id="mobile-menu">
	<div class="mobile-menu-top">
		<?php
		$mobile_menu_search = thb_customizer( 'mobile_menu_search', 1 );
		if ( $mobile_menu_search ) {
			if ( ! thb_wc_supported() ) {
				get_search_form();
			} else {
				wc_get_template(
					'product-searchform.php',
					array(
						'index' => 999,
					)
				);
			}
		}
		if ( has_nav_menu( 'nav-menu' ) ) {
			wp_nav_menu(
				array(
					'theme_location' => 'nav-menu',
					'depth'          => 4,
					'container'      => false,
					'menu_class'     => 'thb-mobile-menu',
					'walker'         => new Thb_MobileDropdown(),
				)
			);
		}
		do_action( 'thb_secondary_menu', true );
		?>
		<?php dynamic_sidebar( 'mobile-menu' ); ?>
	</div>
	<div class="mobile-menu-bottom">
		<?php
		$mobile_menu_footer = thb_customizer( 'mobile_menu_footer' );
		if ( $mobile_menu_footer ) {
			?>
			<div class="menu-footer">
				<?php echo do_shortcode( $mobile_menu_footer ); ?>
			</div>
		<?php } ?>
	</div>
</nav>
<!-- End Mobile Menu -->
