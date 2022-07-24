<?php
/**
 * Blog Post Style
 *
 * @package WordPress
 * @subpackage blooms
 * @since 1.0
 * @version 1.0
 */

$classes[] = 'post';
$classes[] = 'style1';

$thb_date = thb_customizer( 'post_meta_date', 1 );
$thb_cat  = thb_customizer( 'post_meta_cat', 1 );

$column_classes[] = 'small-12 medium-6 columns';
$column_classes[] = ! is_active_sidebar( 'blog' ) ? 'large-4' : false;
?>
<div class="<?php echo esc_attr( implode( ' ', $column_classes ) ); ?>">
	<div <?php post_class( $classes ); ?>>
		<?php if ( has_post_thumbnail() ) { ?>
			<figure class="post-gallery">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail( 'blooms-rectangle-x2' ); ?>
				</a>
			</figure>
		<?php } ?>
		<div class="post-content-container">
			<?php if ( $thb_cat ) { ?>
				<?php do_action( 'thb_categories' ); ?>
			<?php } ?>
			<div class="post-title"><h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><span><?php the_title(); ?></span></a></h3></div>

			<?php if ( $thb_date ) { ?>
				<aside class="thb-post-bottom">
					<div class="post-date"><?php echo get_the_date(); ?></div>
				</aside>
			<?php } ?>
		</div>
	</div>
</div>
