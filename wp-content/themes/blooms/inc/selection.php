<?php
/**
 * Theme Options Output
 *
 * @package WordPress
 * @subpackage blooms
 * @since 1.0
 * @version 1.0
 */

function thb_hex2rgb( $hex ) {
	$hex = str_replace( '#', '', $hex );

	if ( strlen( $hex ) === 3 ) {
		$r = hexdec( substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) );
		$g = hexdec( substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) );
		$b = hexdec( substr( $hex, 2, 1 ) . substr( $hex, 2, 1 ) );
	} else {
		$r = hexdec( substr( $hex, 0, 2 ) );
		$g = hexdec( substr( $hex, 2, 2 ) );
		$b = hexdec( substr( $hex, 4, 2 ) );
	}

	$rgb = array( $r, $g, $b );

	return implode( ',', $rgb ); // returns the rgb values separated by commas

}

function thb_adjust_color_lighten_darken( $color_code, $percentage_adjuster = 0 ) {
	$percentage_adjuster = round( $percentage_adjuster / 100, 2 );
	if ( is_array( $color_code ) ) {
			$r = $color_code['r'] - ( round( $color_code['r'] ) * $percentage_adjuster );
			$g = $color_code['g'] - ( round( $color_code['g'] ) * $percentage_adjuster );
			$b = $color_code['b'] - ( round( $color_code['b'] ) * $percentage_adjuster );

			return array(
				'r' => round( max( 0, min( 255, $r ) ) ),
				'g' => round( max( 0, min( 255, $g ) ) ),
				'b' => round( max( 0, min( 255, $b ) ) ),
			);
	} elseif ( preg_match( '/#/', $color_code ) ) {
			$hex = str_replace( '#', '', $color_code );
			$r   = ( strlen( $hex ) === 3 ) ? hexdec( substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) ) : hexdec( substr( $hex, 0, 2 ) );
			$g   = ( strlen( $hex ) === 3 ) ? hexdec( substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) ) : hexdec( substr( $hex, 2, 2 ) );
			$b   = ( strlen( $hex ) === 3 ) ? hexdec( substr( $hex, 2, 1 ) . substr( $hex, 2, 1 ) ) : hexdec( substr( $hex, 4, 2 ) );
			$r   = round( $r - ( $r * $percentage_adjuster ) );
			$g   = round( $g - ( $g * $percentage_adjuster ) );
			$b   = round( $b - ( $b * $percentage_adjuster ) );

			return '#' . str_pad( dechex( max( 0, min( 255, $r ) ) ), 2, '0', STR_PAD_LEFT )
					. str_pad( dechex( max( 0, min( 255, $g ) ) ), 2, '0', STR_PAD_LEFT )
					. str_pad( dechex( max( 0, min( 255, $b ) ) ), 2, '0', STR_PAD_LEFT );

	}
}
/**
 * Outputs theme options css
 */
function thb_selection() {
	$logo_height        = thb_customizer( 'logo_height' );
	$logo_height_mobile = thb_customizer( 'logo_height_mobile' );
	$accent_color       = thb_customizer( 'accent_color' );
	$secondary_color    = thb_customizer( 'secondary_color' );
	$tertiary_color     = thb_customizer( 'tertiary_color' );
	ob_start();
	?>

	<?php if ( $accent_color ) { ?>
		:root {
			--color-accent: <?php echo esc_html( $accent_color ); ?>;
		}
	<?php } ?>
	<?php if ( $secondary_color ) { ?>
		:root {
			--color-secondary: <?php echo esc_html( $secondary_color ); ?>;
		}
	<?php } ?>
	<?php if ( $tertiary_color ) { ?>
		:root {
			--color-tertiary: <?php echo esc_html( $tertiary_color ); ?>;
		}
	<?php } ?>

	<?php if ( $logo_height ) { ?>
		.logo-holder .logolink .logoimg {
			max-height: <?php echo esc_html( $logo_height ); ?>;
		}
		.logo-holder .logolink .logoimg[src$=".svg"] {
			max-height: 100%;
			height: <?php echo esc_html( $logo_height ); ?>;
		}
	<?php } ?>
	<?php if ( $logo_height_mobile ) { ?>
		@media screen and (max-width: 1067px) {
			.header .logo-holder .logolink .logoimg {
				max-height: <?php echo esc_html( $logo_height_mobile ); ?>;
			}
			.header .logo-holder .logolink .logoimg[src$=".svg"] {
				max-height: 100%;
				height: <?php echo esc_html( $logo_height_mobile ); ?>;
			}
		}
	<?php } ?>

	<?php
	// Fonts.
	$primary_font   = thb_customizer( 'primary_typography' );
	$secondary_font = thb_customizer( 'secondary_typography' );

	$primary_font   = json_decode( $primary_font );
	$secondary_font = json_decode( $secondary_font );

	if ( $primary_font ) {
		if ( isset( $primary_font->font ) ) {
			?>
			h1,h2,h3,h4,h5,h6, q, blockquote, .post-content blockquote, .sidebar .widget .thb-widget-title, .footer .widget .thb-widget-title, .wp-block-latest-posts.is-grid li>a {
				font-family: <?php echo esc_attr( $primary_font->font ); ?> !important;
			}
			<?php
		}
	}
	if ( $secondary_font ) {
		if ( isset( $secondary_font->font ) ) {
			?>
			body, .shop-regular-title, .woocommerce-billing-fields h3, #order_review_heading, .woocommerce-Address-title h3, .woocommerce-MyAccount-content h3, #ship-to-different-address, blockquote cite, .post-content blockquote cite {
				font-family: <?php echo esc_attr( $secondary_font->font ); ?> !important;
			}
			<?php
		}
	}
	$out = ob_get_clean();
	// Remove comments.
	$out = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $out );
	// Remove space after colons.
	$out = str_replace( ': ', ':', $out );
	// Remove whitespace.
	$out = str_replace( array( "\r\n", "\r", "\n", "\t", '  ', '    ', '    ' ), '', $out );

	return $out;
}
