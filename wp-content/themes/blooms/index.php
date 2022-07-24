<?php
/**
 * Index
 *
 * Main index file for the theme.
 *
 * @package WordPress
 * @subpackage blooms
 */

?>
<?php get_header(); ?>
<div class="row">
	<div class="small-12 columns">
		<?php do_action( 'thb_archive_title' ); ?>
		<?php if ( is_active_sidebar( 'blog' ) ) { ?>
		<div class="sidebar-container">
			<div class="sidebar-content-main">
		<?php } ?>
				<div class="row">
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							get_template_part( 'inc/templates/post-styles/post-style1' );
						endwhile;
					endif;
					?>
				</div>
				<?php
				the_posts_pagination(
					array(
						'prev_text' => esc_html__( 'Previous', 'blooms' ),
						'next_text' => esc_html__( 'Next', 'blooms' ),
						'mid_size'  => 2,
					)
				);
				?>
		<?php if ( is_active_sidebar( 'blog' ) ) { ?>
			</div>
			<aside class="sidebar">
				<?php dynamic_sidebar( 'blog' ); ?>
			</aside>
		</div>
		<?php } ?>
	</div>
</div>
<?php
get_footer();
