<?php
/**
 * Global Notification
 *
 * @package WordPress
 * @subpackage pure-fashion
 * @since 1.0
 * @version 1.0
 */

$subheader = thb_customizer( 'subheader', 1 );

if ( ! $subheader ) {
	return;
}
?>
<aside class="subheader">
	<div class="row align-middle">
		<div class="small-12 columns text-center">
			<?php echo do_shortcode( thb_customizer( 'subheader_content' ) ); ?>
		</div>
	</div>
</aside>
