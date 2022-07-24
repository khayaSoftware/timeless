<?php
/**
 * Template Name: Page with Title
 *
 * @package WordPress
 * @subpackage blooms
 * @since 1.0
 * @version 1.0
 */

get_header();
?>
<div <?php post_class(); ?>>
	<div class="row">
		<div class="small-12 columns">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					if ( post_password_required() ) {
						get_template_part( 'inc/templates/misc/password-protected' );
					} else {
						do_action( 'thb_page_title' );
						the_content();
						wp_link_pages();
						if ( comments_open() || get_comments_number() ) {
							comments_template( '', true );
						}
					}
				endwhile;
			endif;
			?>
		</div>
	</div>
</div>
<?php
get_footer();
