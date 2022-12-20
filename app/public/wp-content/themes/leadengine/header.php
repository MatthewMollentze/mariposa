<?php
/**
 * Theme header
 * @package leadEngine
 * by KeyDesign
 */

  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
  }

  $wrapper_class = $navbar_class = $hide_title_section_class = $disable_animations_class = $nav_full_class = $fixed_menu_class = $enable_topbar_class = $sticky_topbar_class = $secondary_logo_class = $trans_sec_logo_class = '';
  $page_showhide_title_section = get_post_meta( get_the_ID(), '_themetek_page_showhide_title_section', true );

  if ($page_showhide_title_section && !is_search()) {
    $hide_title_section_class = 'hide-title-section';
  }

  if ( leadengine_get_option( 'tek-disable-animations' ) == true ) {
    $disable_animations_class = 'no-mobile-animation';
  }

  if ( leadengine_get_option( 'tek-menu-style' ) == '2') {
    $nav_full_class = 'full-width';
  }

  if ( leadengine_get_option( 'tek-menu-behaviour' ) == '2') {
    $fixed_menu_class = 'fixed-menu';
  }

  if ( leadengine_get_option( 'tek-topbar' ) == '1') {
    $enable_topbar_class = 'with-topbar';
  } else {
    $enable_topbar_class = 'no-topbar';
  }

  if ( leadengine_get_option( 'tek-topbar-sticky' ) == '1') {
    $sticky_topbar_class = 'with-topbar-sticky';
  }

  if ( leadengine_get_option( 'tek-sticky-nav-logo' ) == 'nav-secondary-logo') {
    $secondary_logo_class = 'nav-secondary-logo';
  }

  if ( leadengine_get_option( 'tek-transparent-nav-logo' ) == 'nav-secondary-logo' ) {
    $trans_sec_logo_class = 'nav-transparent-secondary-logo';
  }

  $wrapper_class = implode(' ', array($hide_title_section_class, $disable_animations_class));
  $navbar_class = implode(' ', array('navbar', 'navbar-default', 'navbar-fixed-top', $nav_full_class, $fixed_menu_class, $enable_topbar_class, $sticky_topbar_class, $secondary_logo_class, $trans_sec_logo_class));

  $favicon = leadengine_get_option( 'tek-favicon' );
?><!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>
   <head>
      <meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="profile" href="https://gmpg.org/xfn/11">
      <link rel="pingback" href="<?php esc_url(bloginfo( 'pingback_url' )); ?>" />

      <?php if ( isset( $favicon['url'] ) && '' != $favicon['url'] ) : ?>
        <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
          <link href="<?php echo esc_url( $favicon['url'] ); ?>" rel="icon">
        <?php endif; ?>
      <?php endif; ?>

      <?php wp_head(); ?>
   </head>
   <body <?php body_class();?>>
      <?php wp_body_open(); ?>
      <?php if( leadengine_get_option( 'tek-preloader' ) == 1 ) : ?>
        <div id="kd-preloader">
           <div class="kd-spinner"></div>
        </div>
      <?php endif; ?>

      <nav class="<?php echo esc_attr( trim( $navbar_class ) ); ?>">
        <?php if( leadengine_get_option( 'tek-topbar' ) == 1 ) : ?>
          <?php get_template_part( 'core/templates/header/content', 'topbar' ); ?>
        <?php endif; ?>

        <?php
          $primary_logo = leadengine_get_option( 'tek-logo' );
          $secondary_logo = leadengine_get_option( 'tek-logo2' );
          $logo_size = leadengine_get_option( 'tek-logo-size' );
          $text_logo = leadengine_get_option( 'tek-text-logo' );
        ?>

        <div class="menubar">
          <div class="container">
           <div id="logo">
             <?php if ( '' != leadengine_get_option( 'tek-logo-style' ) ) : ?>
               <?php if ( leadengine_get_option( 'tek-logo-style' ) == '1') : ?>
                 <?php /* Image logo */ ?>
                 <a class="logo" href="<?php echo esc_url(home_url()); ?>">
                   <?php if ( isset( $primary_logo['url'] ) && '' != $primary_logo['url'] ) { ?>
                     <img class="fixed-logo" src="<?php echo esc_url( apply_filters( 'leadengine_fixed_logo_img', $primary_logo['url'] ) ); ?>" <?php if ( isset( $logo_size['width'] ) && '' != $logo_size['width']) { echo 'width="' . esc_attr( $logo_size['width'] ) .'"'; }?> alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />

                     <?php if ( isset( $secondary_logo['url'] ) && '' != $secondary_logo['url'] ) { ?>
                     <img class="nav-logo" src="<?php echo esc_url( apply_filters( 'leadengine_nav_logo_img', $secondary_logo['url'] ) ); ?>" <?php if ( isset( $logo_size['width'] ) && '' != $logo_size['width']) { echo 'width="' . esc_attr( $logo_size['width'] ) .'"'; }?> alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
                     <?php } ?>

                   <?php } else { ?>
                     <img class="fixed-logo" src="<?php echo esc_url(get_template_directory_uri() . '/core/assets/images/logo.png'); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
                     <img class="nav-logo" src="<?php echo esc_url(get_template_directory_uri() . '/core/assets/images/logo-2.png'); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
                   <?php } ?>
                 </a>
               <?php elseif ( leadengine_get_option( 'tek-logo-style' ) == '2') : ?>
                 <?php /* Text logo */ ?>
                 <a class="logo" href="<?php echo esc_url(home_url()); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php echo esc_html( leadengine_get_option( 'tek-text-logo' ) );?></a>
               <?php endif; ?>
             <?php endif; ?>
             <?php if ( ! class_exists( 'ReduxFramework' ) ) : ?>
                <a class="logo blog-info-name" href="<?php echo esc_url(site_url()); ?>"><?php bloginfo( 'name' ); ?></a>
             <?php endif; ?>
           </div>
           <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="mobile-cart">
                <?php if ( class_exists( 'WooCommerce' ) ) {
                  if ( leadengine_get_option( 'tek-woo-hide-cart-icon' ) == '0' && leadengine_get_option( 'tek-topbar' ) == '1' ) {
                      $keydesign_minicart = '';
                      $keydesign_minicart = leadengine_add_cart_in_menu();
                      echo do_shortcode( shortcode_unautop( $keydesign_minicart ) );
                  }
                } ?>
              </div>
            </div>
            <div id="main-menu" class="collapse navbar-collapse  navbar-right">
               <?php
                  wp_nav_menu( array( 'theme_location' => 'header-menu', 'depth' => 3, 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()) );
               ?>
               <?php if ( class_exists( 'WooCommerce' ) && !class_exists( 'ReduxFramework' ) ) {
		              $keydesign_minicart = '';
                  $keydesign_minicart = leadengine_add_cart_in_menu();
                  echo do_shortcode( shortcode_unautop( $keydesign_minicart ) );
               } ?>
               <?php if ( leadengine_get_option( 'tek-header-button' ) ){
                 get_template_part( 'core/templates/header/content', 'header-button' );
               } ?>
            </div>
            </div>
         </div>
      </nav>

      <div id="wrapper" class="<?php echo esc_attr( trim( $wrapper_class ) ); ?>">
        <?php get_template_part( 'core/templates/header/content', 'title-bar' ); ?>
