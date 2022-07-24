<?php
/**
 * Utility functions
 *
 * @package WordPress
 * @subpackage blooms
 * @since 1.0
 * @version 1.0
 */
// Body Classes.
function thb_body_classes( $classes ) {
	$single_product_ajax = thb_customizer( 'single_product_ajax' ) ? 'on' : 'off';
	$classes[]           = 'thb-single-product-ajax-' . $single_product_ajax;
	return $classes;
}
add_filter( 'body_class', 'thb_body_classes' );

// Change max image size.
function thb_max_srcset_image_width( $max_width, $size_array ) {
	$width = $size_array[0];
	return $width;
}
add_filter( 'max_srcset_image_width', 'thb_max_srcset_image_width', 10, 2 );

// Loading Lazy.
function thb_modify_post_thumbnail_html( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
	return str_replace( '<img', '<img loading="lazy"', $html );
}

// Load Template.
function thb_load_template_part( $template_name ) {
	ob_start();
	get_template_part( $template_name );
	$var = ob_get_clean();
	return $var;
}

// WooCommerce Check.
function thb_wc_supported() {
	return class_exists( 'WooCommerce' );
}
function thb_is_woocommerce() {
	if ( ! thb_wc_supported() ) {
		return false;
	}
	return ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() );
}

/* Excerpts */
add_filter( 'excerpt_length', 'thb_default_excerpt_length' );
add_filter( 'excerpt_more', 'thb_default_excerpt_more' );

function thb_default_excerpt_length() {
	return 55;
}
function thb_short_excerpt_length() {
	return 25;
}
function thb_default_excerpt_more() {
	return '&hellip;';
}

// Custom Password Protect Form.
function thb_password_form() {
	$o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
	<p class="password-text">' . esc_html__( 'This is a protected area. Please enter your password:', 'blooms' ) . '</p>
	<input name="post_password" type="password" class="box" placeholder="' . esc_html__( 'Password', 'blooms' ) . '"/><input type="submit" name="Submit" class="btn" value="' . esc_attr__( 'Submit', 'blooms' ) . '" /></form>
	';
	return $o;
}
add_filter( 'the_password_form', 'thb_password_form' );

// Add SVG to reply link.
function thb_add_svg_to_reply( $args, $comment, $post ) {
	$args['reply_text'] = thb_load_template_part( 'assets/img/svg/reply.svg' ) . $args['reply_text'];
	return $args;
}

add_filter( 'comment_reply_link_args', 'thb_add_svg_to_reply', 420, 4 );

// Translate Columns
function thb_translate_columns( $size, $double = false ) {
	if ( $double ) {
		if ( 6 === $size ) {
			return 'large-4';
		} elseif ( 5 === $size || 'thb-5' === $size ) {
			return 'thb-5';
		} elseif ( 4 === $size ) {
			return 'large-6';
		} elseif ( 3 === $size ) {
			return 'large-8';
		} elseif ( 2 === $size ) {
			return 'large-12';
		}
	}
	if ( 6 === $size ) {
		return 'large-2';
	} elseif ( 5 === $size || 'thb-5' === $size ) {
		return 'thb-5';
	} elseif ( 4 === $size ) {
		return 'large-3';
	} elseif ( 3 === $size ) {
		return 'large-4';
	} elseif ( 2 === $size ) {
		return 'large-6';
	}
}

// Get Breadcrumbs.
function thb_breadcrumbs() {
	?>
	<div class="thb-breadcrumb-bar">
		<?php
		if ( function_exists( 'yoast_breadcrumb' ) ) {
			yoast_breadcrumb( '<p id="breadcrumbs" class="yoast-breadcrumbs">', '</p>' );
		}
		?>
	</div>
	<?php
}
add_action( 'thb_breadcrumbs', 'thb_breadcrumbs' );

// Post Categories Array.
function thb_blog_categories() {
	$blog_categories = get_categories();
	$out             = array();
	foreach ( $blog_categories as $category ) {
		$out[ $category->cat_ID ] = $category->name;
	}
	return $out;
}

// Product Categories Array.
function thb_product_categories() {
	if ( ! thb_wc_supported() ) {
		return;
	}

	$args = array(
		'orderby'    => 'name',
		'order'      => 'ASC',
		'hide_empty' => '0',
	);

	$product_categories = get_terms( 'product_cat', $args );
	$out                = array();
	if ( ! isset( $product_categories->errors ) ) {
		foreach ( $product_categories as $product_category ) {
			$out[ $product_category->term_id ] = $product_category->name;
		}
	}
	return $out;
}
// Page Title.
function thb_page_title() {
	?>
	<div class="thb-page-title">
		<div class="page-title">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<?php
}
add_action( 'thb_page_title', 'thb_page_title' );

// Archive Title.
function thb_archive_title() {
	if ( is_front_page() ) {
		return;
	}
	?>
	<div class="thb-page-title">
		<h1>
			<?php
			if ( is_category() ) {
				echo single_cat_title( '', false );

			} elseif ( is_tag() ) {
				echo single_tag_title( '', false );

			} elseif ( is_search() ) {
				/* translators: %s: search term */
				printf( esc_html__( 'Search Results for: %s', 'blooms' ), '<span>' . get_search_query() . '</span>' );

			} elseif ( is_author() ) {
				/* translators: %s: author name */
				printf( esc_html__( 'Author Archives: %s', 'blooms' ), '<span>' . get_the_author() . '</span>' );

			} elseif ( is_day() ) {
				/* translators: %s: day */
				printf( esc_html__( 'Daily Archives: %s', 'blooms' ), '<span>' . get_the_date() . '</span>' );

			} elseif ( is_month() ) {
				/* translators: %s: month */
				printf( esc_html__( 'Monthly Archives: %s', 'blooms' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

			} elseif ( is_year() ) {
				/* translators: %s: year */
				printf( esc_html__( 'Yearly Archives: %s', 'blooms' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

			} elseif ( is_home() ) {
				single_post_title();
			}
			?>
		</h1>
		<?php
		$blog_header_categories = thb_customizer( 'blog_header_categories', '' );

		if ( $blog_header_categories && '' !== $blog_header_categories ) {
			?>
				<ul class="thb-blog-categories">
					<li><span><?php esc_html_e( 'Browse by:', 'blooms' ); ?></span></li>
				<?php
				$blog_header_categories = explode( ',', $blog_header_categories );
				foreach ( $blog_header_categories as $thb_cat ) {
					$category  = get_term_by( 'id', $thb_cat, 'category' );
					$active_id = get_queried_object_id();
					$class     = intval( $thb_cat ) === $active_id ? 'active' : '';

					if ( $category ) {
						?>
						<li><a href="<?php echo esc_url( get_category_link( $thb_cat ) ); ?>" class="<?php echo esc_attr( $class ); ?>"><?php echo esc_html( $category->name ); ?></a></li>
						<?php
					}
				}
				?>
				</ul>
			<?php
		}
		?>
	</div>
	<?php
}
add_action( 'thb_archive_title', 'thb_archive_title' );
