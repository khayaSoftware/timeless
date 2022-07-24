<?php
/**
 * Sub-Footer
 *
 * @package WordPress
 * @subpackage blooms
 * @since 1.0
 * @version 1.0
 */

	$subfooter_classes[] = 'subfooter';
	$subfooter_classes[] = 'style1';
?>
<!-- Start subfooter -->
<div class="<?php echo esc_attr( implode( ' ', $subfooter_classes ) ); ?>">
	<div class="row subfooter-row align-middle">
		<div class="small-12 medium-6 text-center medium-text-left columns">
			<?php
				echo wp_kses_post( thb_customizer( 'copyright_text', '© 2021 Fuel Themes' ) );
			?>
		</div>
		<div class="small-12 medium-6 text-center medium-text-right columns">
			<?php
				echo wp_kses_post( thb_customizer( 'subfooter_text', 'Made by Fuel Themes' ) );
			?>
		</div>
	</div>
</div>
<!-- End Subfooter -->
