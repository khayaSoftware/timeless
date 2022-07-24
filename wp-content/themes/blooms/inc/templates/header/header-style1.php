<?php
/**
 * Header Template
 *
 * @package WordPress
 * @subpackage blooms
 * @since 1.0
 * @version 1.0
 */

$shadow         = thb_customizer( 'fixed_header_shadow', 'thb-fixed-shadow-style1' );
$header_class[] = 'header';
$header_class[] = 'thb-main-header';
$header_class[] = $shadow;

?>
<div class="header-placeholder"></div>
<header class="<?php echo esc_attr( implode( ' ', $header_class ) ); ?>">
	<div class="header-logo-row">
		<?php do_action( 'thb_mobile_toggle' ); ?>
		<div class="logo-and-menu">
			<?php do_action( 'thb_logo' ); ?>
			<?php get_template_part( 'inc/templates/header/full-menu' ); ?>
		</div>
		<?php do_action( 'thb_secondary_area' ); ?>
	</div>
	<div class="thb-header-inline-search <?php echo esc_attr( $shadow ); ?>">
		<?php
		if ( ! thb_wc_supported() ) {
			get_search_form();
		} else {
			wc_get_template( 'product-searchform.php' );
		}
		?>
	</div>
</header>
