<?php
/**
 * Footer widget area template
 * @package leadengine
 * by KeyDesign
 */

  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
  }

  $footer_active_widgets = is_active_sidebar( 'footer-first-widget-area' ) + is_active_sidebar( 'footer-second-widget-area' ) + is_active_sidebar( 'footer-third-widget-area' ) + is_active_sidebar( 'footer-fourth-widget-area' );
  $sidebar_cols_class = "col-xs-12 col-sm-12 col-md-3 col-lg-3";

  if ( $footer_active_widgets == "1" ) {
    $sidebar_cols_class = "col-xs-12 col-sm-12 col-md-12 col-lg-12";
  } elseif ( $footer_active_widgets == "2" ) {
    $sidebar_cols_class = "col-xs-12 col-sm-6 col-md-6 col-lg-6";
  } elseif ( $footer_active_widgets == "3" ) {
    $sidebar_cols_class = "col-xs-12 col-sm-12 col-md-4 col-lg-4";
  } elseif ( $footer_active_widgets == "4" ) {
    $sidebar_cols_class = "col-xs-12 col-sm-12 col-md-3 col-lg-3";
  }
?>

<?php if ( $footer_active_widgets ) : ?>
    <div class="upper-footer">
          <div class="container">
              <div class="row">
              <?php if ( is_active_sidebar( 'footer-first-widget-area' ) ) : ?>
                  <div class="<?php echo esc_html( $sidebar_cols_class ); ?> first-widget-area">
                      <?php dynamic_sidebar( 'footer-first-widget-area' ); ?>
                  </div>
              <?php endif;?>

              <?php if ( is_active_sidebar( 'footer-second-widget-area' ) ) :?>
                  <div class="<?php echo esc_html( $sidebar_cols_class ); ?> second-widget-area">
                      <?php dynamic_sidebar( 'footer-second-widget-area' ); ?>
                  </div>
              <?php endif;?>

              <?php if ( is_active_sidebar( 'footer-third-widget-area' ) ) : ?>
              <div class="<?php echo esc_html( $sidebar_cols_class ); ?> third-widget-area">
                  <?php dynamic_sidebar( 'footer-third-widget-area' ); ?>
              </div>
              <?php endif;?>

              <?php if ( is_active_sidebar( 'footer-fourth-widget-area' ) ) : ?>
              <div class="<?php echo esc_html( $sidebar_cols_class ); ?> forth-widget-area">
                  <?php dynamic_sidebar( 'footer-fourth-widget-area' ); ?>
              </div>
              <?php endif;?>
              </div>
          </div>
    </div>
<?php endif;?>
