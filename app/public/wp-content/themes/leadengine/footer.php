<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #wrapper div and all content after.
 *
 * @package leadengine
 * by KeyDesign
 */

  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
  }

  $footer_fixed_class = $footer_active_widgets = $header_button = '';

  $footer_active_widgets = is_active_sidebar( 'footer-first-widget-area' ) + is_active_sidebar( 'footer-second-widget-area' ) + is_active_sidebar( 'footer-third-widget-area' ) + is_active_sidebar( 'footer-fourth-widget-area' );

  if ( leadengine_get_option( 'tek-footer-fixed' ) == '1') {
    $footer_fixed_class ='fixed';
  } else {
    $footer_fixed_class ='classic';
  }

  $header_button = leadengine_get_option( 'tek-header-button' );
?>

</div>
<footer id="footer" class="<?php echo esc_attr( $footer_fixed_class ); ?>">
  <?php if( $footer_active_widgets >= "1" ) :
    get_sidebar( 'footer' );
  endif; ?>
  <div class="lower-footer">
    <div class="container">
      <div class="pull-left">
        <span>
          <?php leadengine_footer_copyright(); ?>
        </span>
      </div>
      <div class="pull-right">
        <?php if ( has_nav_menu( 'footer-menu' ) ) {
          wp_nav_menu( array( 'theme_location' => 'footer-menu', 'depth' => 1, 'container' => false, 'menu_class' => 'navbar-footer', 'fallback_cb' => 'false' ) );
        } ?>
      </div>
    </div>
  </div>
</footer>

<?php if ( leadengine_get_option( 'tek-backtotop' ) == "1") : ?>
  <div class="back-to-top">
     <i class="fa fa-angle-up"></i>
  </div>
<?php endif; ?>


<?php if ( isset( $header_button ) && '' != $header_button) : ?>
  <?php if ( leadengine_get_option( 'tek-header-button-action' ) == '1' ) : ?>
    <?php get_template_part( 'core/templates/header/content', 'contact-modal' ); ?>
  <?php endif; ?>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
