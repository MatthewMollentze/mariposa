<?php
/**
 * The template for displaying 404 pages (Not Found)
 * @package leadengine
 * by KeyDesign
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<section class="page-404">
	<div class="container">
	    <div class="row" >
				<h2 class="section-heading"><?php echo ( leadengine_get_option( 'tek-404-title' ) ) ? esc_html( leadengine_get_option( 'tek-404-title' ) ) : _e( 'Page 404', 'leadengine' ); ?></h2>
				<?php if ( leadengine_get_option( 'tek-404-subtitle' )) : ?>
	        <p class="section-subheading"><?php echo esc_html( leadengine_get_option( 'tek-404-subtitle' ) ) ?></p>
	      <?php endif; ?>
				<a href="<?php echo esc_url(get_site_url()); ?>" class="tt_button"><?php echo ( leadengine_get_option( 'tek-404-back' ) ) ? esc_html( leadengine_get_option( 'tek-404-back' ) ) : _e( 'Back to homepage', 'leadengine' ); ?></a>
	    </div>
    </div>
</section>

<?php get_footer(); ?>
