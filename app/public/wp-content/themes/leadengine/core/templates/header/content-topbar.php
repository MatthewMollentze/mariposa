<?php
$social_profiles = leadengine_get_option( 'tek-social-profiles' );

if ( leadengine_get_option( 'tek-topbar-template' ) == '1' || leadengine_get_option( 'tek-topbar-template' ) == '3' ) : ?>
  <div class="topbar first-template">
<?php elseif ( leadengine_get_option( 'tek-topbar-template' ) == '2' ||  leadengine_get_option( 'tek-topbar-template' ) == '4' ) : ?>
  <div class="topbar second-template">
<?php endif; ?>
    <div class="container">
       <div class="topbar-menu-search">
          <?php if ( in_array( leadengine_get_option( 'tek-topbar-template' ), array('3', '4') ) ) : ?>
            <div class="topbar-menu">
               <?php if ( has_nav_menu( 'topbar-menu' ) ) {
                   wp_nav_menu( array( 'theme_location' => 'topbar-menu', 'depth' => 1, 'container' => false, 'menu_class' => 'navbar-topbar', 'fallback_cb' => 'false' ) );
                }
               ?>
            </div>
          <?php endif; ?>

          <?php if( leadengine_get_option( 'tek-topbar-search' ) == 1 ) : ?>
            <div class="topbar-search">
               <?php leadengine_get_search_form(); ?>
               <span class="toggle-search fa-search fa"></span>
            </div>
          <?php endif; ?>

          <?php if( leadengine_get_option( 'tek-topbar-lang-switch' ) == 1 ) : ?>
            <?php if ( defined( 'ICL_SITEPRESS_VERSION' ) ) : ?>
              <div class="topbar-lang-switcher">
                <div class="lang-switcher-wpml">
                  <?php do_action( 'wpml_add_language_selector' ); ?>
                </div>
              </div>
            <?php elseif ( class_exists('Polylang') && function_exists('pll_the_languages')) : ?>
              <div class="topbar-lang-switcher">
                <ul class="lang-switcher-polylang">
                  <?php pll_the_languages( array( 'show_flags' => 1,'show_names' => 1) ); ?>
                </ul>
              </div>
            <?php endif; ?>
          <?php endif; ?>
          <?php
            if( class_exists( 'WooCommerce' ) ) {
              if ( leadengine_get_option( 'tek-woo-hide-cart-icon' ) == '0' ) {
                $keydesign_minicart = '';
                $keydesign_minicart = leadengine_add_cart_in_menu();
                echo do_shortcode( shortcode_unautop( $keydesign_minicart ) );
              }
            }
          ?>
       </div>
        <?php if ( in_array( leadengine_get_option( 'tek-topbar-template' ), array('1', '2', '4') ) ) : ?>
            <div class="topbar-socials">
                <?php if ( class_exists( 'ReduxFramework' ) && isset( $social_profiles ) && '' != $social_profiles ) {
                    leadengine_social_icons();
                } ?>
            </div>
        <?php endif; ?>
       <?php if ( in_array( leadengine_get_option( 'tek-topbar-template' ), array('1', '2', '3') ) ) : ?>
          <div class="topbar-contact">
              <?php if ( leadengine_get_option( 'tek-business-phone' ) != '' ) : ?>
                  <span class="topbar-phone"><a href="tel:<?php echo esc_attr( leadengine_get_option( 'tek-business-phone' ) ); ?>"><?php echo esc_html( leadengine_get_option( 'tek-business-phone' ) ); ?></a></span>
              <?php endif; ?>
              <?php if ( leadengine_get_option( 'tek-business-email' ) != '' ) : ?>
                  <span class="topbar-email"><a href="mailto:<?php echo esc_attr( leadengine_get_option( 'tek-business-email' ) ); ?>"><?php echo esc_html( leadengine_get_option( 'tek-business-email' ) ); ?></a></span>
              <?php endif; ?>
          </div>
        <?php endif; ?>
    </div>
</div>
