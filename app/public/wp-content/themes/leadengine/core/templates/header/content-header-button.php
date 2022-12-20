<?php

  /* Button style and color scheme */
  $button_style_class = $button_extra_class = '';

  if ( leadengine_get_option( 'tek-header-button-style' ) == 'solid-button') {
    $button_style_class .= 'tt_primary_button';
  } elseif ( leadengine_get_option( 'tek-header-button-style' ) == 'outline-button') {
    $button_style_class .= 'tt_secondary_button';
  } else {
    $button_style_class .= 'tt_primary_button';
  }

  if ( leadengine_get_option( 'tek-header-button-color' ) == 'primary-color') {
    $button_style_class .= ' btn_primary_color ';
  } elseif ( leadengine_get_option( 'tek-header-button-color' ) == 'secondary-color') {
    $button_style_class .= ' btn_secondary_color ';
  } else {
    $button_style_class .= ' btn_primary_color ';
  }

  if ( leadengine_get_option( 'tek-header-button-hover-style' ) ) {
      $button_style_class .= leadengine_get_option( 'tek-header-button-hover-style' );
  }

  if ( leadengine_get_option( 'tek-header-button-css-class' ) ) {
      $button_extra_class = leadengine_get_option( 'tek-header-button-css-class' );
  }

  $btn_wrapper_class = implode( ' ', array( 'modal-menu-item', 'tt_button', $button_style_class, $button_extra_class ) );

  if ( leadengine_get_option( 'tek-header-button-action' ) == '1' ) : ?>
   <a class="<?php echo esc_attr( $btn_wrapper_class ); ?>" data-toggle="modal" data-target="#popup-modal"><?php echo esc_html( leadengine_get_option( 'tek-header-button-text' ) );?></a>
  <?php elseif ( leadengine_get_option( 'tek-header-button-action' ) == '2' ) : ?>
    <?php if ( leadengine_get_option( 'tek-scroll-id' ) != '' ) : ?>
      <a class="<?php echo esc_attr( $btn_wrapper_class ); ?>" href="<?php if( is_front_page()) { echo esc_html( leadengine_get_option( 'tek-scroll-id' ) ); } else { echo esc_url(site_url()) . esc_html( leadengine_get_option( 'tek-scroll-id' ) );} ?>"><?php echo esc_html( leadengine_get_option( 'tek-header-button-text' ) );?></a>
    <?php endif; ?>
  <?php elseif ( leadengine_get_option( 'tek-header-button-action' ) == '3' ) : ?>
    <?php if ( leadengine_get_option( 'tek-button-new-page' ) != '' ) : ?>
      <a class="<?php echo esc_attr( $btn_wrapper_class ); ?>" <?php echo ( leadengine_get_option( 'tek-button-target' ) == 'new-page') ? 'target="_blank"' : 'target="_self"'; ?> href="<?php echo esc_url( leadengine_get_option( 'tek-button-new-page' ) ); ?>"><?php echo esc_html( leadengine_get_option( 'tek-header-button-text' ) );?></a>
    <?php endif; ?>
  <?php endif; ?>
