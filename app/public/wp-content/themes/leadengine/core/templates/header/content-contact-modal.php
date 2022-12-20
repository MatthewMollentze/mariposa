<?php
  $modal_wrapper_class = $modal_css_class = $modal_template_class = '';

  $modal_bg_image = leadengine_get_option( 'tek-modal-bg-image' );

  if ( '' != leadengine_get_option( 'tek-modal-css-class' ) ) {
      $modal_css_class = leadengine_get_option( 'tek-modal-css-class' );
  }

  $modal_wrapper_class = implode(' ', array('modal', 'fade', 'popup-modal', $modal_css_class));
?>

  <div class="<?php echo esc_attr($modal_wrapper_class); ?>" id="popup-modal" role="dialog">
    <div class="modal-content">
        <div class="row">
          <div class="col-sm-6 modal-content-contact">
          <?php if ( '' != leadengine_get_option( 'tek-modal-title' ) ) : ?>
            <h2><?php echo esc_html( leadengine_get_option( 'tek-modal-title' ) ); ?></h2>
          <?php endif; ?>
          <?php if ( '' != leadengine_get_option( 'tek-modal-subtitle' ) ) : ?>
            <p><?php echo wp_kses_post( leadengine_get_option( 'tek-modal-subtitle' ) ); ?></p>
          <?php endif; ?>
          <?php if ( '' != leadengine_get_option( 'tek-business-phone' ) ) : ?>
              <div class="key-icon-box icon-default icon-left cont-left">
                  <i class="iconsmind-Telephone fa"></i>
                  <h4 class="service-heading"><a href="tel:<?php echo esc_attr( leadengine_get_option( 'tek-business-phone' ) ); ?>"><?php echo esc_html( leadengine_get_option( 'tek-business-phone' ) ); ?></a></h4>
              </div>
          <?php endif; ?>
          <?php if ( '' != leadengine_get_option( 'tek-business-email' ) ) : ?>
              <div class="key-icon-box icon-default icon-left cont-left">
                  <i class="iconsmind-Mail fa"></i>
                  <h4 class="service-heading"><a href="mailto:<?php echo esc_attr( leadengine_get_option( 'tek-business-email' ) ); ?>"><?php echo esc_html( leadengine_get_option( 'tek-business-email' ) ); ?></a></h4>
              </div>
          <?php endif; ?>
          </div>
          <div class="col-sm-6 modal-content-inner" style="background-image: url('<?php if ( isset( $modal_bg_image['url'] ) && $modal_bg_image['url'] != '' ) { echo esc_url( $modal_bg_image['url'] ); } ?>')">
            <?php if ( leadengine_get_option( 'tek-modal-form-select' ) ) : ?>
               <?php if ( leadengine_get_option( 'tek-modal-form-select' ) == '1' && leadengine_get_option( 'tek-modal-contactf7-formid' ) != '') : ?>
                    <?php echo do_shortcode('[contact-form-7 id="'. esc_attr( leadengine_get_option( 'tek-modal-contactf7-formid' ) ).'"]'); ?>
               <?php elseif ( leadengine_get_option( 'tek-modal-form-select' ) == '2' && leadengine_get_option( 'tek-modal-ninja-formid' ) != '') : ?>
                    <?php echo do_shortcode('[ninja_form id="'. esc_attr( leadengine_get_option( 'tek-modal-ninja-formid' ) ).'"]'); ?>
               <?php elseif ( leadengine_get_option( 'tek-modal-form-select' ) == '3' &&  leadengine_get_option( 'tek-modal-gravity-formid' ) != '') : ?>
                    <?php echo do_shortcode('[gravityform id="'. esc_attr( leadengine_get_option( 'tek-modal-gravity-formid' ) ).'"]'); ?>
               <?php elseif ( leadengine_get_option( 'tek-modal-form-select' ) == '4' &&  leadengine_get_option( 'tek-modal-wp-formid' ) != '') : ?>
                    <?php echo do_shortcode('[wpforms id="'. esc_attr( leadengine_get_option( 'tek-modal-wp-formid' ) ).'"]'); ?>
               <?php endif; ?>
            <?php endif; ?>
          </div>
        </div>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
</div>
