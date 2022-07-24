<?php
/**
 * Post Detail Page
 *
 * @package WordPress
 * @subpackage blooms
 * @since 1.0
 * @version 1.0
 */

$classes[] = 'sidebar-content-main';
$classes[] = is_active_sidebar( 'single' ) ? 'has-sidebar' : 'no-sidebar';

$columns = has_post_thumbnail() ? 'medium-6 large-5' : false;
?>
<div class="post-detail-row has-article-padding">
	<div class="row">
		<div class="small-12 columns">
			<article itemscope itemtype="http://schema.org/Article" <?php post_class( 'post post-detail post-detail-style1' ); ?> id="post-<?php the_ID(); ?>">
				<div class="post-header-container">
					<?php
					if ( has_post_thumbnail() ) {
						?>
						<div class="thb-article-featured-image">
							<?php the_post_thumbnail( 'blooms-full' ); ?>
						</div>
						<?php
					}
					?>
					<div class="post-title-container">
						<?php if ( thb_customizer( 'article_cat', 1 ) ) { ?>
							<?php do_action( 'thb_categories', true ); ?>
						<?php } ?>
						<header class="post-title entry-header">
							<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
						</header>
						<?php do_action( 'thb_article_after_h1' ); ?>
					</div>
				</div>
				<div class="sidebar-container">
					<div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
						<?php do_action( 'thb_before_content' ); ?>
						<div class="post-content entry-content" itemprop="articleBody">
							<?php the_content(); ?>
						</div>
						<?php do_action( 'thb_after_content' ); ?>
						<?php
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
						?>
					</div>
					<aside class="sidebar">
						<div class="thb-social-top">
							<?php
							if ( function_exists( 'sharing_display' ) ) {
								sharing_display( '', true );
							}
							?>
						</div>
						<?php dynamic_sidebar( 'single' ); ?>
					</aside>
				</div>
			</article>
		</div>
	</div>
</div>
