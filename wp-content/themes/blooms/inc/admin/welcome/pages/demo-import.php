<?php
/**
 * Fuel Themes Admin Demo Import
 *
 * @package WordPress
 * @subpackage blooms
 * @since 1.0
 * @version 1.0
 */
?>

<div class="wrap about-wrap thb_welcome thb_product_registration">
	<?php get_template_part( '/inc/admin/welcome/pages/header' ); ?>
</div>
<div class="wrap about-wrap">
	<div class="theme-browser thb-demo-import thb-content">
		<?php
		do_action( 'thb_demo_import_page' );

		$demos = thb_theme_admin()->thb_demos();
		foreach ( $demos as $demo ) {
			?>
			<div class="theme">
				<p>
					<?php
					printf(
						wp_kses(
							/* translators: %s: Plugin Link */
							__( 'Please install and activate <a href="%s" target="_blank">One Click Import</a> plugin from WordPress.org and use the below files:', 'blooms' ),
							array(
								'a' => array(
									'href'  => array(),
									'title' => array(),
								),
							)
						),
						'https://wordpress.org/plugins/one-click-demo-import/'
					);
					?>
				</p>
				<ul>
					<li><strong><?php esc_html_e( 'Demo Content:', 'blooms' ); ?></strong> <a href="<?php echo esc_url( $demo['import_file_url'] ); ?>"><?php esc_html_e( 'Download .XML', 'blooms' ); ?></a></li>
					<li><strong><?php esc_html_e( 'Customizer:', 'blooms' ); ?></strong> <a href="<?php echo esc_url( $demo['import_customizer_file_url'] ); ?>"><?php esc_html_e( 'Download .DAT', 'blooms' ); ?></a></li>
					<li><strong><?php esc_html_e( 'Widgets:', 'blooms' ); ?></strong> <a href="<?php echo esc_url( $demo['import_widget_file_url'] ); ?>"><?php esc_html_e( 'Download .JSON', 'blooms' ); ?></a></li>
				</ul>
			</div>
			<?php
		}
		?>
	</div>
</div>
