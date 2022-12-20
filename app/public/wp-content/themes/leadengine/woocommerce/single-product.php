<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

 if ( ! defined( 'ABSPATH' ) ) {
 	exit; // Exit if accessed directly
 }

$single_sidebar = $sidebar_position = $shop_active_widgets = '';

if ( leadengine_get_option( 'tek-woo-single-sidebar' ) ) {
	$single_sidebar = leadengine_get_option( 'tek-woo-single-sidebar' );
}

$shop_active_widgets = is_active_sidebar( 'shop-sidebar' );

if ( !$shop_active_widgets ) {
  $single_sidebar = 0;
}

if ( leadengine_get_option( 'tek-woo-single-sidebar-position' ) ) {
	$sidebar_position = leadengine_get_option( 'tek-woo-single-sidebar-position' );
}

if ( leadengine_get_option( 'tek-woo-single-image-position' ) ) {
  $image_position = leadengine_get_option( 'tek-woo-single-image-position' );
}

if ( leadengine_get_option( 'tek-woo-single-gallery' ) ) {
  $gallery_template = leadengine_get_option( 'tek-woo-single-gallery' );
}

get_header(); ?>

<div class="container <?php echo esc_html($image_position); ?> <?php echo esc_html($gallery_template); ?>" id="product-content">
  <?php if ( isset( $single_sidebar ) && ( $single_sidebar == '1' ) && isset( $sidebar_position ) ) : ?>
    <?php if ( $sidebar_position == 'woo-single-sidebar-left' ) : ?>
    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="woo-sidebar">
          <?php dynamic_sidebar( 'shop-sidebar' ); ?>
        </div>
    	</div>
  	<?php endif; ?>
  <?php endif; ?>

  <?php if ( isset( $single_sidebar ) && ( $single_sidebar == '1' ) && isset( $sidebar_position ) ) : ?>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
  <?php else : ?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <?php endif; ?>
    <?php while ( have_posts() ) : the_post(); ?>
  		<?php wc_get_template_part( 'content', 'single-product' ); ?>
  	<?php endwhile; // end of the loop. ?>
	</div>

	<?php if ( isset( $single_sidebar ) && ( $single_sidebar == '1' ) && isset( $sidebar_position ) ) : ?>
    <?php if ( $sidebar_position == 'woo-single-sidebar-right' ) : ?>
    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="woo-sidebar">
          <?php dynamic_sidebar('shop-sidebar'); ?>
        </div>
    	</div>
  	<?php endif; ?>
  <?php endif; ?>

	<div id="ShopInnerContent" class="col-sm-12 ">
	   <?php do_action( 'woocommerce_after_main_content' );	?>
	</div>
</div>

<?php get_footer();?>
