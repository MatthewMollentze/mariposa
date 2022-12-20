<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header();

$shop_columns = $shop_sidebar = $shop_active_widgets = $listing_sidebar = '';

if ( leadengine_get_option( 'tek-woo-shop-columns' ) ) {
	$shop_columns = leadengine_get_option( 'tek-woo-shop-columns' );
} else {
	$shop_columns = 'woo-3-columns';
}

if ( leadengine_get_option( 'tek-woo-sidebar-position' ) ) {
	$shop_sidebar = leadengine_get_option( 'tek-woo-sidebar-position' );
}

$listing_sidebar = '1';

$shop_active_widgets = is_active_sidebar( 'shop-sidebar' );

if (!$shop_active_widgets) {
  $listing_sidebar = '0';
}
?>

<section>
		<?php if ( woocommerce_product_loop() ) : ?>
			<div class="ShopFiltersWrapper">
				<div class="container">
					<?php
						/**
						 * woocommerce_before_shop_loop hook.
						 *
						 * @hooked woocommerce_output_all_notices - 10
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						do_action( 'woocommerce_before_shop_loop' );
					?>
				</div>
			</div>
			<div class="container">
				<?php if (isset($shop_columns) && isset($shop_sidebar) && $listing_sidebar) : ?>
					<?php if ($shop_columns == 'woo-2-columns' && $shop_sidebar == 'woo-sidebar-left') : ?>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="woo-sidebar">
								<?php dynamic_sidebar('shop-sidebar'); ?>
							</div>
						</div>
					<?php endif; ?>
				<?php endif; ?>

				<?php if (isset($shop_columns)) : ?>
					<?php if ($shop_columns == 'woo-2-columns' && $listing_sidebar) : ?>
	  				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 woo-2-columns">
					<?php else : ?>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 <?php echo esc_html($shop_columns); ?>">
					<?php endif; ?>
				<?php endif; ?>
			<?php woocommerce_product_loop_start();

			if ( wc_get_loop_prop( 'total' ) ) {
				while ( have_posts() ) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 */
					do_action( 'woocommerce_shop_loop' );

					wc_get_template_part( 'content', 'product' );
				}
			}

			woocommerce_product_loop_end();

			/**
			 * Hook: woocommerce_after_shop_loop.
			 *
			 * @hooked woocommerce_pagination - 10
			 */
			do_action( 'woocommerce_after_shop_loop' );
			?>
		</div>
		<?php if (isset($shop_columns) && isset($shop_sidebar) && $listing_sidebar) : ?>
			<?php if ($shop_columns == 'woo-2-columns' && $shop_sidebar == 'woo-sidebar-right') : ?>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 shop-sidebar">
					<div class="woo-sidebar">
						<?php dynamic_sidebar('shop-sidebar'); ?>
					</div>
				</div>
			<?php endif; ?>
		<?php endif; ?>

		<?php else: ?>
			<div class="container">
				<?php do_action( 'woocommerce_no_products_found' ); ?>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php get_footer(); ?>
