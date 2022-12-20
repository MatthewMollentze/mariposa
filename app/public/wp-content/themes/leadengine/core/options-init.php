<?php
  /*
  * ReduxFramework Options Config
  */

  if ( ! class_exists( 'Redux' ) ) {
    return;
  }

  $opt_name = 'redux_ThemeTek';

  $theme = wp_get_theme();

  $args = array(
    'opt_name' => $opt_name,
    'display_name' => $theme->get( 'Name' ),
    'display_version' => $theme->get( 'Version' ),
    'menu_type' => 'submenu',
    'allow_sub_menu' => true,
    'menu_title' => esc_html__( 'Theme Options', 'leadengine' ),
    'page_title' => esc_html__( 'Theme Options', 'leadengine' ),
    'async_typography' => true,
    'admin_bar' => true,
    'dev_mode' => true,
    'update_notice' => false,
    'show_options_object' => false,
    'customizer' => false,
    'page_parent' => 'leadengine-dashboard',
    'page_slug' => 'theme-options',
    'page_permissions' => 'manage_options',
    'save_defaults' => true,
    'show_import_export' => true,
    'network_sites' => '1',
    'transient_time' => 60 * MINUTE_IN_SECONDS,
  );

  Redux::set_args( $opt_name, $args );

  Redux::set_section( $opt_name, array(
      'icon' => 'el-icon-bookmark',
      'title' => esc_html__('Business Info', 'leadengine'),
      'fields' => array(
          array(
              'id' => 'tek-business-phone',
              'type' => 'text',
              'title' => esc_html__('Business Phone', 'leadengine'),
              'default' => '(222) 400-630'
          ),
          array(
              'id' => 'tek-business-email',
              'type' => 'text',
              'title' => esc_html__('Business Email', 'leadengine'),
              'default' => 'contact@leadengine-theme.com'
          ),
          array(
              'id'            => 'tek-social-profiles',
              'type'          => 'social_profiles',
              'title'         => 'Social Icons',
              'subtitle'      => 'Click an icon to activate it, drag and drop to change the icon order.',
          ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'el-icon-globe',
      'title' => esc_html__('Global Options', 'leadengine'),
      'fields' => array(
          array(
              'id' => 'tek-preloader',
              'type' => 'switch',
              'title' => esc_html__('Enable Preloader', 'leadengine'),
              'subtitle' => esc_html__('If enabled, a loader screen will appear before loading the page.', 'leadengine'),
              'default' => true
          ),
          array(
              'id' => 'tek-smooth-scroll',
              'type' => 'switch',
              'title' => esc_html__('Smooth Scroll', 'leadengine'),
              'subtitle' => esc_html__('Turn on to replace basic website scrolling effect with nice smooth scroll.', 'leadengine'),
              'default' => false
          ),
          array(
              'id' => 'tek-backtotop',
              'type' => 'switch',
              'title' => esc_html__('Go to Top Button', 'leadengine'),
              'subtitle' => esc_html__('If enabled, a go to top button will appear in the right bottom corner the page.', 'leadengine'),
              'default' => true
          ),
          array(
              'id' => 'tek-google-api',
              'type' => 'text',
              'title' => __('Google Map API Key', 'leadengine'),
              'default' => '',
              'subtitle' => esc_html__('Generate, copy and paste here Google Maps API Key', 'leadengine'),
          ),
          array(
              'id' => 'tek-disable-animations',
              'type' => 'switch',
              'title' => esc_html__('Disable Animations on Mobile', 'leadengine'),
              'subtitle' => esc_html__('Globally turn on/off element animations on mobile', 'leadengine'),
              'default' => false
          ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'title' => esc_html__('Color Schemes', 'leadengine'),
      'subsection' => true,
      'fields' => array(
        array(
          'id' => 'tek-main-color',
          'type' => 'color',
          'transparent' => false,
          'title' => esc_html__('Primary Accent Color', 'leadengine'),
          'default' => '#4F6DF5',
          'validate' => 'color'
        ),

        array(
          'id' => 'tek-secondary-color',
          'type' => 'color',
          'transparent' => false,
          'title' => esc_html__('Secondary Accent Color', 'leadengine'),
          'default' => '',
          'validate' => 'color'
        ),

        array(
          'id' => 'tek-titlebar-color',
          'type' => 'color',
          'transparent' => false,
          'title' => esc_html__('Title Bar Background Color', 'leadengine'),
          'default' => '',
          'subtitle' => esc_html__('Use this colorpicker to override the title bar default background color.', 'leadengine'),
          'validate' => 'color'
        ),

        array(
            'id' => 'tek-titlebar-text-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Title Bar Text Color', 'leadengine'),
            'default' => '',
            'subtitle' => esc_html__('Use this colorpicker to override the title bar default text color.', 'leadengine'),
            'validate' => 'color'
        ),

        array(
            'id' => 'tek-global-border-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Border Color', 'leadengine'),
            'default' => '',
            'subtitle' => esc_html__('Use this colorpicker to override the default theme border color. ', 'leadengine'),
            'validate' => 'color'
        ),
    )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'el-icon-star',
      'title' => esc_html__('Logo', 'leadengine'),
      'fields' => array(
        array(
            'id' => 'tek-logo-style',
            'type' => 'select',
            'title' => esc_html__('Logo Style', 'leadengine'),
            'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
            'options'  => array(
                '1' => 'Image logo',
                '2' => 'Text logo'
            ),
            'default' => '2'
        ),
        array(
            'id' => 'tek-logo',
            'type' => 'media',
            'readonly' => false,
            'url' => true,
            'title' => esc_html__('Primary Image Logo', 'leadengine'),
            'subtitle' => esc_html__('Upload primary logo image. Recommended image size: 120x60px', 'leadengine'),
            'required' => array('tek-logo-style','equals','1'),
        ),
        array(
            'id' => 'tek-logo2',
            'type' => 'media',
            'readonly' => false,
            'url' => true,
            'title' => esc_html__('Secondary Image Logo', 'leadengine'),
            'subtitle' => esc_html__('Upload secondary image logo. Recommended image size: 120x60px', 'leadengine'),
            'required' => array('tek-logo-style','equals','1'),
        ),
        array(
            'id' => 'tek-logo-size',
            'type' => 'dimensions',
            'height' => false,
            'units'    => false,
            'url' => true,
            'title' => esc_html__('Logo Size', 'leadengine'),
            'subtitle' => esc_html__('Choose logo width. Pixel value.', 'leadengine'),
            'required' => array('tek-logo-style','equals','1'),
        ),
        array(
            'id' => 'tek-mobile-logo-size',
            'type' => 'dimensions',
            'height' => false,
            'units'    => false,
            'url' => true,
            'title' => esc_html__('Mobile Logo Size', 'leadengine'),
            'subtitle' => esc_html__('Choose logo width on mobile. Pixels value.', 'leadengine'),
            'required' => array('tek-logo-style','equals','1'),
        ),
        array(
            'id' => 'tek-text-logo',
            'type' => 'text',
            'title' => esc_html__('Text Logo', 'leadengine'),
            'required' => array('tek-logo-style','equals','2'),
            'default' => 'LeadEngine'
        ),
        array(
            'id' => 'tek-text-logo-typo',
            'type' => 'typography',
            'title' => esc_html__('Text Logo Font Settings', 'leadengine'),
            'required' => array('tek-logo-style','equals', '2'),
            'google' => true,
            'font-family' => true,
            'font-style' => true,
            'font-size' => true,
            'line-height' => false,
            'color' => false,
            'text-align' => false,
            'all_styles' => false,
            'units' => 'px',
        ),
        array(
            'id' => 'tek-main-logo-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Primary Logo Text Color', 'leadengine'),
            'required' => array('tek-logo-style','equals','2'),
            'default' => '',
            'validate' => 'color'
        ),
        array(
            'id' => 'tek-secondary-logo-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Secondary Logo Text Color', 'leadengine'),
            'subtitle' => esc_html__('Logo text color for sticky navigation', 'leadengine'),
            'required' => array('tek-logo-style','equals','2'),
            'default' => '',
            'validate' => 'color'
        ),
        array(
            'id' => 'tek-favicon',
            'type' => 'media',
            'readonly' => false,
            'preview' => false,
            'url' => true,
            'title' => esc_html__('Favicon', 'leadengine'),
            'subtitle' => esc_html__('Upload favicon image', 'leadengine'),
            'default' => array(
                'url' => get_template_directory_uri() . '/core/assets/images/favicon.png'
            )
        ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'el-icon-lines',
      'title' => esc_html__('Header', 'leadengine'),
      'fields' => array(
          array(
              'id'=>'tek-header-bar-section-start',
              'type' => 'section',
              'title' => esc_html__('Header Bar Settings', 'leadengine'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-menu-style',
              'type' => 'button_set',
              'title' => esc_html__('Header Bar Width', 'leadengine'),
              'subtitle' => esc_html__('You can choose between full width and contained.', 'leadengine'),
              'options' => array(
                  '1' => 'Contained',
                  '2' => 'Full-Width'
               ),
              'default' => '1'
          ),
          array(
              'id' => 'tek-menu-behaviour',
              'type' => 'button_set',
              'title' => esc_html__('Header Bar Behaviour', 'leadengine'),
              'subtitle' => esc_html__('You can choose between a sticky or a fixed top menu.', 'leadengine'),
              'options' => array(
                  '1' => 'Sticky',
                  '2' => 'Fixed'
               ),
              'default' => '1'
          ),
          array(
              'id' => 'tek-header-menu-bg',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Header Bar Background Color', 'leadengine'),
              'default' => '',
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-header-menu-bg-sticky',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Sticky Header Bar Background Color', 'leadengine'),
              'default' => '',
              'required' => array('tek-menu-behaviour','equals', '1'),
              'validate' => 'color'
          ),
          array(
              'id'=>'tek-header-bar-section-end',
              'type' => 'section',
              'indent' => false,
          ),
          array(
              'id'=>'tek-menu-settings-section-start',
              'type' => 'section',
              'title' => esc_html__('Main Menu Settings', 'leadengine'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-menu-typo',
              'type' => 'typography',
              'title' => esc_html__('Menu Font Settings', 'leadengine'),
              'google' => true,
              'font-style' => true,
              'font-size' => true,
              'line-height' => false,
              'text-transform' => true,
              'color' => false,
              'text-align' => false,
              'all_styles' => false,
              'default' => array(
                  'font-weight' => '',
                  'font-family' => '',
                  'font-size' => '',
                  'text-transform' => '',
              ),
              'units' => 'px',
          ),

          array(
              'id' => 'tek-header-menu-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Menu Link Color', 'leadengine'),
              'default' => '',
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-header-menu-color-hover',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Menu Link Hover Color', 'leadengine'),
              'default' => '',
              'validate' => 'color'
          ),

          array(
              'id' => 'tek-header-menu-color-sticky',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Sticky Menu Link Color', 'leadengine'),
              'default' => '',
              'required' => array('tek-menu-behaviour','equals', '1'),
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-header-menu-color-sticky-hover',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Sticky Menu Link Hover Color', 'leadengine'),
              'default' => '',
              'required' => array('tek-menu-behaviour','equals', '1'),
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-sticky-nav-logo',
              'type' => 'select',
              'title' => esc_html__('Sticky Navigation Logo Image', 'leadengine'),
              'subtitle' => esc_html__('Select which logo image to be used with the sticky navigation bar.', 'leadengine'),
              'options'  => array(
                  'nav-primary-logo' => 'Primary logo image',
                  'nav-secondary-logo' => 'Secondary logo image',
              ),
              'default' => 'nav-primary-logo',
              'required' => array('tek-logo-style','equals','1'),
          ),
          array(
              'id'=>'tek-menu-settings-section-end',
              'type' => 'section',
              'indent' => false,
          ),
          array(
              'id'=>'tek-home-transparent-section-start',
              'type' => 'section',
              'title' => esc_html__('Transparent Navigation Options', 'leadengine'),
              'indent' => true,
          ),
          array(
             'id' => 'tek-transparent-nav-logo',
             'type' => 'select',
             'title' => esc_html__('Transparent Navigation Logo Image', 'leadengine'),
             'subtitle' => esc_html__('Select which logo image to be used with the homepage transparent navigation bar.', 'leadengine'),
             'options'  => array(
                 'nav-primary-logo' => 'Primary logo image',
                 'nav-secondary-logo' => 'Secondary logo image',
             ),
             'default' => 'nav-secondary-logo',
             'required' => array('tek-logo-style','equals','1'),
             'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
          ),
          array(
             'id' => 'tek-transparent-homepage-menu-colors',
             'type' => 'color',
             'transparent' => false,
             'title' => esc_html__('Navigation Text Color', 'leadengine'),
             'subtitle' => esc_html__('Homepage navigation color when transparent background', 'leadengine'),
             'default' => '',
             'validate' => 'color',
          ),
          array(
              'id'=>'tek-home-transparent-section-end',
              'type' => 'section',
              'indent' => false,
          ),
      )
    ) );

    Redux::set_section( $opt_name, array(
        'title' => esc_html__('Topbar', 'leadengine'),
        'subsection' => true,
        'fields' => array(
          array(
              'id' => 'tek-topbar',
              'type' => 'switch',
              'title' => esc_html__('Enable Topbar', 'leadengine'),
              'subtitle' => esc_html__('Activate to display topbar.', 'leadengine'),
              'default' => true
          ),
          array(
              'id' => 'tek-topbar-sticky',
              'type' => 'switch',
              'title' => esc_html__('Sticky Topbar', 'leadengine'),
              'required' => array('tek-topbar','equals', true),
              'subtitle' => esc_html__('Display topbar with sticky navigation.', 'leadengine'),
              'default' => false
          ),
          array(
              'id' => 'tek-topbar-template',
              'type' => 'select',
              'title' => esc_html__('Topbar Template', 'leadengine'),
              'required' => array('tek-topbar','equals', true),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  '1' => 'Business info (left) + Social icons (right)',
                  '2' => 'Social icons (left) + Business info (right)',
                  '3' => 'Business info (left) + Topbar menu (right)',
                  '4' => 'Social icons (left) + Topbar menu (right)',
              ),
              'default' => '3'
          ),
          array(
              'id' => 'tek-topbar-search',
              'type' => 'switch',
              'title' => esc_html__('Search Bar', 'leadengine'),
              'subtitle' => esc_html__('Turn on to display search bar.', 'leadengine'),
              'required' => array('tek-topbar','equals', true),
              'default' => true
          ),
          array(
              'id' => 'tek-topbar-lang-switch',
              'type' => 'switch',
              'title' => esc_html__('Language Switcher', 'leadengine'),
              'subtitle' => esc_html__('Turn on to display the language switcher.', 'leadengine'),
              'required' => array('tek-topbar','equals', true),
              'default' => true
          ),
          array(
              'id' => 'tek-topbar-typo',
              'type' => 'typography',
              'title' => esc_html__('Topbar Font Settings', 'leadengine'),
              'required' => array('tek-topbar','equals', true),
              'google' => false,
              'font-family' => false,
              'font-style' => true,
              'font-size' => true,
              'line-height' => false,
              'color' => false,
              'text-align' => false,
              'all_styles' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-topbar-bg-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Topbar Background Color', 'leadengine'),
              'default' => '',
              'validate' => 'color',
              'required' => array('tek-topbar','equals', true),
          ),
          array(
              'id' => 'tek-topbar-text-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Topbar Text Color', 'leadengine'),
              'default' => '',
              'validate' => 'color',
              'required' => array('tek-topbar','equals', true),
          ),
          array(
              'id' => 'tek-topbar-hover-text-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Topbar Text Hover Color', 'leadengine'),
              'default' => '',
              'validate' => 'color',
              'required' => array('tek-topbar','equals', true),
          ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'title' => esc_html__('Popup Modal', 'leadengine'),
      'desc' => esc_html__('Control the settings of the Modal Popup used to display additional content on all pages and posts, without sacrificing space. The Modal Box is hidden by default and can only be triggered using the Header Button displayed near the Main Menu. This button can also be used to open a new page or smooth scroll to a page section ID.', 'leadengine'),
      'subsection' => true,
      'fields' => array(
          array(
              'id'=>'tek-btn-settings-section-start',
              'type' => 'section',
              'title' => esc_html__('Header Button Settings', 'leadengine'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-header-button',
              'type' => 'switch',
              'title' => esc_html__('Enable Header Button', 'leadengine'),
              'default' => false
          ),
          array(
              'id' => 'tek-header-button-text',
              'type' => 'text',
              'title' => esc_html__('Button Text', 'leadengine'),
              'required' => array('tek-header-button','equals', true),
              'default' => 'Get a quote'
          ),
          array(
              'id' => 'tek-header-button-style',
              'type' => 'select',
              'title' => esc_html__('Button Style', 'leadengine'),
              'required' => array('tek-header-button','equals', true),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'solid-button' => 'Solid',
                  'outline-button' => 'Outline',
              ),
              'default' => 'outline-button'
          ),
          array(
              'id' => 'tek-header-button-color',
              'type' => 'select',
              'title' => esc_html__('Button Color Scheme', 'leadengine'),
              'required' => array('tek-header-button','equals', true),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'primary-color' => 'Primary color',
                  'secondary-color' => 'Secondary color',
              ),
              'default' => 'primary-color'
          ),
          array(
              'id' => 'tek-header-button-hover-style',
              'type' => 'select',
              'title' => esc_html__('Button Hover State', 'leadengine'),
              'required' => array('tek-header-button','equals', true),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'default_header_btn' => 'Default',
                  'hover_solid_primary' => 'Solid - Primary color',
                  'hover_solid_secondary' => 'Solid - Secondary color',
                  'hover_outline_primary' => 'Outline - Primary color',
                  'hover_outline_secondary' => 'Outline - Secondary color',
              ),
              'default' => 'default_header_btn'
          ),
          array(
              'id' => 'tek-header-button-action',
              'type' => 'select',
              'title' => esc_html__('Button Action', 'leadengine'),
              'required' => array('tek-header-button','equals', true),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  '1' => 'Open modal window with contact form',
                  '2' => 'Scroll to section',
                  '3' => 'Open a new page'
              ),
              'default' => '3'
          ),
          array(
              'id' => 'tek-header-button-css-class',
              'type' => 'text',
              'title' => esc_html__('Extra CSS Class', 'leadengine'),
              'subtitle' => esc_html__('Add a class to the wrapping HTML element for further CSS customization.', 'leadengine'),
              'required' => array('tek-header-button','equals', true),
              'default' => ''
          ),
          array(
              'id'=>'tek-btn-settings-section-end',
              'type' => 'section',
              'indent' => false,
          ),
          array(
              'id'=>'tek-modal-section-start',
              'type' => 'section',
              'title' => esc_html__('Modal Box Settings', 'leadengine'),
              'indent' => true,
              'required' => array('tek-header-button-action','equals','1'),
          ),
          array(
              'id' => 'tek-modal-title',
              'type' => 'text',
              'title' => esc_html__('Modal Title', 'leadengine'),
              'required' => array('tek-header-button-action','equals','1'),
              'default' => 'Lets get in touch'
          ),
          array(
              'id' => 'tek-modal-subtitle',
              'type' => 'editor',
              'title' => esc_html__('Modal Subtitle', 'leadengine'),
              'required' => array('tek-header-button-action','equals','1'),
              'default' => '',
              'args'   => array(
                'teeny'  => true,
                'textarea_rows'    => 10,
                'media_buttons'	   => false,
              ),
          ),
          array(
              'id' => 'tek-modal-bg-image',
              'type' => 'media',
              'readonly' => false,
              'url' => true,
              'title' => esc_html__('Modal Background Image', 'leadengine'),
              'subtitle' => esc_html__('Upload modal background image.', 'leadengine'),
              'required' => array('tek-header-button-action','equals','1'),
              'default' => '',
          ),
          array(
              'id' => 'tek-modal-form-select',
              'type' => 'select',
              'title' => esc_html__('Contact Form Plugin', 'leadengine'),
              'required' => array('tek-header-button-action','equals','1'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  '1' => 'Contact Form 7',
                  '2' => 'Ninja Forms',
                  '3' => 'Gravity Forms',
                  '4' => 'WP Forms',
              ),
              'default' => '1'
          ),
          array(
              'id' => 'tek-modal-contactf7-formid',
              'type' => 'select',
              'data' => 'posts',
              'args' => array( 'post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1, ),
              'title' => esc_html__('Contact Form 7 Title', 'leadengine'),
              'required' => array('tek-modal-form-select','equals','1'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'default' => ''
          ),
          array(
              'id' => 'tek-modal-ninja-formid',
              'type' => 'text',
              'title' => esc_html__('Ninja Form ID', 'leadengine'),
              'required' => array('tek-modal-form-select','equals','2'),
              'default' => ''
          ),
          array(
              'id' => 'tek-modal-gravity-formid',
              'type' => 'text',
              'title' => esc_html__('Gravity Form ID', 'leadengine'),
              'required' => array('tek-modal-form-select','equals','3'),
              'default' => ''
          ),
          array(
              'id' => 'tek-modal-wp-formid',
              'type' => 'text',
              'title' => esc_html__('WP Form ID', 'leadengine'),
              'required' => array('tek-modal-form-select','equals','4'),
              'default' => ''
          ),
          array(
              'id' => 'tek-modal-css-class',
              'type' => 'text',
              'title' => esc_html__('CSS Class', 'leadengine'),
              'subtitle' => esc_html__('Add a class to the wrapping HTML element for further CSS customization.', 'leadengine'),
              'required' => array('tek-header-button-action','equals','1'),
              'default' => ''
          ),
          array(
              'id'=>'tek-modal-section-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-header-button-action','equals','1'),
          ),
          array(
              'id'=>'tek-scroll-section-start',
              'type' => 'section',
              'title' => esc_html__('Scroll Section Settings', 'leadengine'),
              'indent' => true,
              'required' => array('tek-header-button-action','equals','2'),
          ),
          array(
              'id' => 'tek-scroll-id',
              'type' => 'text',
              'title' => esc_html__('Scroll to Section ID', 'leadengine'),
              'required' => array('tek-header-button-action','equals','2'),
              'default' => '#download-leadengine'
          ),
          array(
              'id'=>'tek-scroll-section-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-header-button-action','equals','2'),
          ),
          array(
              'id'=>'tek-new-page-settings-start',
              'type' => 'section',
              'title' => esc_html__('New Page Link Settings', 'leadengine'),
              'indent' => true,
              'required' => array('tek-header-button-action','equals','3'),
          ),
          array(
              'id' => 'tek-button-new-page',
              'type' => 'text',
              'title' => esc_html__('Button Link', 'leadengine'),
              'required' => array('tek-header-button-action','equals','3'),
              'default' => '#'
          ),
          array(
              'id' => 'tek-button-target',
              'type' => 'select',
              'title' => esc_html__('Link Target', 'leadengine'),
              'required' => array('tek-header-button-action','equals','3'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'new-page' => 'Open in a new page',
                  'same-page' => 'Open in same page'
              ),
              'default' => 'new-page'
          ),
          array(
              'id'=>'tek-new-page-settings-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-header-button-action','equals','3'),
          ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'el-icon-website',
      'title' => esc_html__('Layout', 'leadengine'),
      'fields' => array(
          array(
              'id' => 'tek-layout-style',
              'type' => 'button_set',
              'title' => esc_html__('Layout Style', 'leadengine'),
              'subtitle' => esc_html__('Select the layout appearance.', 'leadengine'),
              'options' => array(
                  'full-width' => 'Full-Width',
                  'boxed' => 'Boxed'
               ),
              'default' => 'full-width'
          ),
          array(
              'id' => 'tek-layout-boxed-body-bg',
              'type' => 'background',
              'transparent' => false,
              'title' => esc_html__('Body Background Settings', 'leadengine'),
              'required' => array('tek-layout-style','equals','boxed'),
          ),
          array(
              'id' => 'tek-layout-fw-content-bg',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Content Background Color', 'leadengine'),
              'default' => '',
              'validate' => 'color'
          ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'el-icon-photo',
      'title' => esc_html__('Footer', 'leadengine'),
      'fields' => array(

          array(
              'id' => 'tek-footer-fixed',
              'type' => 'switch',
              'title' => esc_html__('Fixed Footer', 'leadengine'),
              'subtitle' => esc_html__('Enable to activate this feature.', 'leadengine'),
              'default' => false
          ),
          array(
              'id' => 'tek-upper-footer-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Upper Footer Background', 'leadengine'),
              'default' => '',
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-lower-footer-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Lower Footer Background', 'leadengine'),
              'default' => '',
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-footer-typo',
              'type' => 'typography',
              'title' => esc_html__('Footer Typography', 'leadengine'),
              'google' => true,
              'font-style' => true,
              'font-size' => true,
              'line-height' => false,
              'text-transform' => true,
              'color' => false,
              'text-align' => false,
              'letter-spacing' => true,
              'all_styles' => false,
              'default' => array(
                  'font-weight' => '',
                  'font-family' => '',
                  'font-size' => '',
                  'text-transform' => '',
              ),
              'units' => 'px',
          ),
          array(
              'id' => 'tek-footer-heading-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Footer Headings Color', 'leadengine'),
              'default' => '',
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-footer-text-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Footer Text Color', 'leadengine'),
              'default' => '',
              'validate' => 'color'
          ),
          array(
                'id' => 'tek-footer-link-color',
                'type' => 'link_color',
                'title' => esc_html__( 'Footer Link Color', 'leadengine' ),
                'active' => false,
                'visited' => false,
            ),
          array(
              'id' => 'tek-footer-text',
              'type' => 'editor',
              'title' => esc_html__('Copyright Text', 'leadengine'),
              'subtitle' => esc_html__('Enter footer bottom copyright text', 'leadengine'),
              'default' => 'LeadEngine by KeyDesign. All rights reserved.',
              'args' => array(
                  'teeny' => true,
                  'textarea_rows' => 3,
                  'media_buttons' => false,
              ),
          ),

      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'el-icon-fontsize',
      'title' => esc_html__('Typography', 'leadengine'),
      'fields' => array(
          array(
              'id' => 'tek-default-typo',
              'type' => 'typography',
              'title' => esc_html__('Body Typography', 'leadengine'),
              'line-height' => true,
              'text-align' => false,
              'units' => 'px',
              'default' => array(
                  'color' => '',
                  'font-weight' => '',
                  'font-family' => '',
                  'font-size' => '',
                  'line-height' => ''
              ),
          ),
          array(
              'id' => 'tek-h1-heading',
              'type' => 'typography',
              'title' => esc_html__('H1 Heading', 'leadengine'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h2-heading',
              'type' => 'typography',
              'title' => esc_html__('H2 Heading', 'leadengine'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h3-heading',
              'type' => 'typography',
              'title' => esc_html__('H3 Heading', 'leadengine'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h4-heading',
              'type' => 'typography',
              'title' => esc_html__('H4 Heading', 'leadengine'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h5-heading',
              'type' => 'typography',
              'title' => esc_html__('H5 Heading', 'leadengine'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h6-heading',
              'type' => 'typography',
              'title' => esc_html__('H6 Heading', 'leadengine'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
          ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'title' => esc_html__('Typekit Fonts', 'leadengine'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-typekit-switch',
            'type' => 'switch',
            'title' => esc_html__('Enable Typekit', 'leadengine'),
            'subtitle' => esc_html__('Select to enable Typekit fonts and display options below.', 'leadengine'),
            'default' => true
        ),
        array(
            'id' => 'tek-typekit',
            'type' => 'text',
            'title' => __('Typekit ID', 'leadengine'),
            'subtitle' => esc_html__('Enter in the ID for your kit here. Only published data is accessible, so make sure that any changes you make to your kit are updated.', 'leadengine'),
            'mode' => 'text',
            'default' => '',
            'theme' => 'chrome',
            'required' => array('tek-typekit-switch','equals', true),
        ),
        array(
            'id' => 'tek-body-typekit-selector',
            'type' => 'text',
            'title' => __('Body Typography', 'leadengine'),
            'subtitle' => esc_html__('Add the Typekit font family name.', 'leadengine'),
            'default' => '',
            'required' => array('tek-typekit-switch','equals', true),
        ),
        array(
            'id' => 'tek-heading-typekit-selector',
            'type' => 'text',
            'title' => __('Headings Typography', 'leadengine'),
            'subtitle' => esc_html__('Add the Typekit font family name.', 'leadengine'),
            'default' => '',
            'required' => array('tek-typekit-switch','equals', true),
        ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'title' => esc_html__('Responsive Typography', 'leadengine'),
      'subsection' => true,
      'fields' => array(
      array(
              'id' => 'tek-default-typo-mobile',
              'type' => 'typography',
              'title' => esc_html__('Body Typography', 'leadengine'),
              'subtitle' => esc_html__('Overwrite body typography on mobile & tablet ', 'leadengine'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'font-family' => false,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h1-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('H1 Heading', 'leadengine'),
              'subtitle' => esc_html__('Overwrite H1 typography on mobile & tablet ', 'leadengine'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'font-family' => false,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h2-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('H2 Heading', 'leadengine'),
              'subtitle' => esc_html__('Overwrite H2 typography on mobile & tablet ', 'leadengine'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'font-family' => false,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h3-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('H3 Heading', 'leadengine'),
              'subtitle' => esc_html__('Overwrite H3 typography on mobile & tablet ', 'leadengine'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'font-family' => false,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h4-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('H4 Heading', 'leadengine'),
              'subtitle' => esc_html__('Overwrite H4 typography on mobile & tablet ', 'leadengine'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'font-family' => false,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h5-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('H5 Heading', 'leadengine'),
              'subtitle' => esc_html__('Overwrite H5 typography on mobile & tablet ', 'leadengine'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'font-family' => false,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h6-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('H6 Heading', 'leadengine'),
              'subtitle' => esc_html__('Overwrite H6 typography on mobile & tablet ', 'leadengine'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'font-family' => false,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
          ),
      )
  ) );


  Redux::set_section( $opt_name, array(
      'title' => esc_html__('Button Fonts', 'leadengine'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-button-typo',
            'type' => 'typography',
            'title' => esc_html__('Button Typography', 'leadengine'),
            'line-height' => true,
            'text-align' => false,
            'color' => true,
            'text-transform' => true,
            'letter-spacing' => false,
            'units' => 'px',
        ),
      )
  ) );

  if (class_exists('WooCommerce')) {
    Redux::set_section( $opt_name, array(
        'icon' => 'el-icon-shopping-cart',
        'title' => esc_html__('WooCommerce', 'leadengine'),
        'fields' => array(
            array(
                'id' => 'tek-woo-catalog-style',
                'type' => 'select',
                'title' => esc_html__('Catalog Style', 'leadengine'),
                'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
                'options'  => array(
                    'woo-minimal-style' => 'Minimal',
                    'woo-detailed-style' => 'Detailed',
                ),
                'default' => 'woo-detailed-style'
            ),
            array(
                'id' => 'tek-woo-products-number',
                'type' => 'text',
                'title' => __('Products Per Page', 'leadengine'),
                'subtitle' => esc_html__('Change the products number listed per page.', 'leadengine'),
                'default' => '9',
            ),
            array(
                'id' => 'tek-woo-shop-columns',
                'type' => 'select',
                'title' => esc_html__('Shop Columns', 'leadengine'),
                'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
                'subtitle' => esc_html__('Note: Shop sidebar can be displayed only with 2 columns layout', 'leadengine'),
                'options'  => array(
                    'woo-2-columns' => '2',
                    'woo-3-columns' => '3',
                    'woo-4-columns' => '4',
                ),
                'default' => 'woo-2-columns'
            ),
            array(
                'id' => 'tek-woo-sidebar-position',
                'type' => 'select',
                'title' => esc_html__('Sidebar Position', 'leadengine'),
                'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
                'options'  => array(
                    'woo-sidebar-left' => 'Left',
                    'woo-sidebar-right' => 'Right',
                ),
                'required' => array('tek-woo-shop-columns','equals','woo-2-columns'),
                'default' => 'woo-sidebar-right'
            ),
            array(
              'id' => 'tek-woo-hide-cart-icon',
              'type' => 'switch',
              'title' => esc_html__('Hide Cart Icon', 'leadengine'),
              'subtitle' => esc_html__('Hide/Show cart icon from topbar.', 'leadengine'),
              'default' => '0',
              '1' => 'Hide',
              '0' => 'Show',
          ),
        )
    ) );

    Redux::set_section( $opt_name, array(
        'title' => esc_html__('Single Product', 'leadengine'),
        'subsection' => true,
        'fields' => array(
          array(
              'id' => 'tek-woo-single-header',
              'type' => 'switch',
              'title' => esc_html__('Product Title Area', 'leadengine'),
              'subtitle' => esc_html__('Enable/Disable title & breadcrumbs area on the single product page.', 'leadengine'),
              'default' => '1',
              '1' => 'Yes',
              '0' => 'No',
          ),
          array(
              'id' => 'tek-woo-single-sidebar',
              'type' => 'switch',
              'title' => esc_html__('Product Sidebar', 'leadengine'),
              'subtitle' => esc_html__('Enable/Disable Shop sidebar on the single product page.', 'leadengine'),
              'default' => '1',
              '1' => 'Yes',
              '0' => 'No',
          ),
          array(
              'id' => 'tek-woo-single-sidebar-position',
              'type' => 'select',
              'title' => esc_html__('Sidebar Position', 'leadengine'),
              'options'  => array(
                  'woo-single-sidebar-left' => 'Left',
                  'woo-single-sidebar-right' => 'Right',
              ),
              'required' => array('tek-woo-single-sidebar','equals','1'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'default' => 'woo-single-sidebar-right'
          ),
          array(
              'id' => 'tek-woo-single-image-position',
              'type' => 'select',
              'title' => esc_html__('Featured Image Position', 'leadengine'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options' => array(
                  'woo-image-left' => 'Left',
                  'woo-image-right' => 'Right',
              ),
              'default' => 'woo-image-left'
          ),
          array(
              'id' => 'tek-woo-single-gallery',
              'type' => 'select',
              'title' => esc_html__('Gallery Template', 'leadengine'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options' => array(
                  'woo-gallery-thumbnails' => 'Thumbnails',
                  'woo-gallery-list' => 'List',
              ),
              'default' => 'woo-gallery-thumbnails'
          ),
          array(
              'id' => 'tek-woo-related-products-number',
              'type' => 'slider',
              'title' => esc_html__( 'Number of Related Products', 'leadengine' ),
              'subtitle' => esc_html__( 'Controls the number of items that display under related products section.', 'leadengine' ),
              'default' => 3,
              'max' => 8,
          ),
        )
    ) );
  }

  Redux::set_section( $opt_name, array(
      'icon' => 'el-icon-th-list',
      'title' => esc_html__('Portfolio', 'leadengine'),
      'fields' => array(
        array(
            'id'=>'tek-portfolio-settings-section-start',
            'type' => 'section',
            'title' => esc_html__('General Settings', 'leadengine'),
            'indent' => true,
        ),
        array(
            'id' => 'tek-portfolio-cpt',
            'type' => 'switch',
            'title' => esc_html__('Enable Portfolio', 'leadengine'),
            'subtitle' => esc_html__('Enable/Disable the portfolio custom post type. Refresh the page for changes to take effect.', 'leadengine'),
            'default' => true
        ),
        array(
            'id' => 'tek-portfolio-slug',
            'type' => 'text',
            'title' => esc_html__('Portfolio Slug', 'leadengine'),
            'subtitle' => __('Overwrite the portfolio base slug: domain.com/<strong>portfolio</strong>/portfolio-item-slug', 'leadengine'),
            'desc' => __('<strong>Note:</strong> When you change this setting you need to <a href="https://www.leadengine-wp.com/documentation/knowledge-base/flush-rewrite-rules/" target="_blank">flush rewrite rules</a>.', 'leadengine'),
            'default' => '',
            'required' => array( 'tek-portfolio-cpt', 'equals', true ),
        ),
        array(
            'id'=>'tek-portfolio-settings-section-end',
            'type' => 'section',
            'indent' => false,
        ),
        array(
            'id'=>'tek-portfolio-single-page-settings-section-start',
            'type' => 'section',
            'title' => esc_html__('Portfolio Single Page Settings', 'leadengine'),
            'required' => array( 'tek-portfolio-cpt', 'equals', true ),
            'indent' => true,
        ),
        array(
            'id' => 'tek-portfolio-single-nav',
            'type' => 'switch',
            'title' => esc_html__('Previous/Next Pagination', 'leadengine'),
            'subtitle' => esc_html__('Enable to display the previous/next portfolio pagination. Pagination section will be displayed below the content.', 'leadengine'),
            'default' => true
        ),
        array(
            'id' => 'tek-portfolio-related-posts',
            'type' => 'switch',
            'title' => esc_html__('Related Projects', 'leadengine'),
            'subtitle' => esc_html__('Enable to display related projects on single portfolio pages.', 'leadengine'),
            'default' => true
        ),
        array(
            'id' => 'tek-portfolio-related-posts-title',
            'type' => 'text',
            'title' => esc_html__('Related Projects Title', 'leadengine'),
            'default' => 'Related projects',
            'required' => array(
              'tek-portfolio-related-posts',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-portfolio-related-posts-number',
            'type' => 'slider',
            'title' => esc_html__( 'Number of Related Projects', 'leadengine' ),
            'subtitle' => esc_html__( 'Controls the number of items that display under related projects section.', 'leadengine' ),
            'default' => 3,
            'max' => 20,
            'required' => array(
              'tek-portfolio-related-posts',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-portfolio-comments',
            'type' => 'switch',
            'title' => esc_html__('Comments Section', 'leadengine'),
            'subtitle' => esc_html__('Enable to display the comments section below the content.', 'leadengine'),
            'default' => false
        ),
        array(
            'id'=>'tek-portfolio-single-page-settings-section-end',
            'type' => 'section',
            'required' => array( 'tek-portfolio-cpt', 'equals', true ),
            'indent' => false,
        ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'el-icon-pencil-alt',
      'title' => esc_html__('Blog', 'leadengine'),
      'fields' => array(
          array(
              'id'=>'tek-blog-settings-section-start',
              'type' => 'section',
              'title' => esc_html__('General Settings', 'leadengine'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-blog-transparent-nav',
              'type' => 'switch',
              'title' => esc_html__('Transparent Navbar', 'leadengine'),
              'subtitle' => esc_html__('If enabled, the navbar section will take a transparent color. This option is linked with the homepage transparent settings.', 'leadengine'),
              'default' => false
          ),
          array(
              'id' => 'tek-blog-template',
              'type' => 'select',
              'title' => esc_html__('Blog Page Template', 'leadengine'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'subtitle' => esc_html__('Select the blog page template style.', 'leadengine'),
              'options'  => array(
                  'img-top-list' => 'List - Top image',
                  'img-left-list' => 'List - Left image',
                  'minimal-list' => 'List minimal',
                  'minimal-grid' => 'Grid minimal',
                  'detailed-grid' => 'Grid detailed',
              ),
              'default' => 'img-top-list'
          ),
          array(
              'id' => 'tek-blog-sidebar',
              'type' => 'switch',
              'title' => esc_html__('Display Sidebar', 'leadengine'),
              'subtitle' => esc_html__('Turn on to display the blog sidebar.', 'leadengine'),
              'default' => true
          ),
          array(
              'id' => 'tek-blog-excerpt',
              'type' => 'text',
              'title' => esc_html__('Blog Post Excerpt', 'leadengine'),
              'default' => '27'
          ),
          array(
            	'id'=>'tek-blog-settings-section-end',
            	'type' => 'section',
            	'indent' => false,
          ),
          array(
              'id'=>'tek-blog-title-section-start',
              'type' => 'section',
              'title' => esc_html__('Blog Title Bar', 'leadengine'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-blog-title-switch',
              'type' => 'switch',
              'title' => esc_html__('Blog Page Title', 'leadengine'),
              'subtitle' => esc_html__('Turn on to show the page title of the assigned blog page.', 'leadengine'),
              'default' => true
          ),
          array(
              'id' => 'tek-blog-home-breadcrumbs',
              'type' => 'switch',
              'title' => esc_html__('Blog Breadcrumbs', 'leadengine'),
              'subtitle' => esc_html__('Turn on to show the breadcrumbs for the assigned blog page.', 'leadengine'),
              'default' => true
          ),
          array(
              'id' => 'tek-blog-particles',
              'type' => 'switch',
              'title' => esc_html__('Enable Particles', 'leadengine'),
              'subtitle' => esc_html__('Turn on to load a particles effect in the title bar area.', 'leadengine'),
              'default' => false
          ),
          array(
              'id' => 'tek-blog-subtitle',
              'type' => 'text',
              'title' => esc_html__('Blog Page Subtitle', 'leadengine'),
              'subtitle' => esc_html__('Add the subtitle text that displays in the page title bar of the assigned blog page.', 'leadengine'),
              'default' => ''
          ),
          array(
              'id' => 'tek-blog-header-text-align',
              'type' => 'select',
              'title' => esc_html__('Title Bar Text Alignment', 'leadengine'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'blog-title-left' => 'Left',
                  'blog-title-center' => 'Center',
              ),
              'required' => array('tek-blog-title-switch','equals', true),
              'subtitle' => esc_html__('Select text alignment in the title bar area.', 'leadengine'),
              'default' => 'blog-title-left'
          ),
          array(
              'id' => 'tek-blog-titlebar-background',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Title Bar Background Color', 'leadengine'),
              'default' => '',
              'subtitle' => esc_html__('Use this colorpicker to override the title bar default background color.', 'leadengine'),
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-blog-text-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Title Bar Text Color', 'leadengine'),
              'default' => '',
              'subtitle' => esc_html__('Use this colorpicker to override the title bar default text color.', 'leadengine'),
              'validate' => 'color'
          ),
          array(
            	'id'=>'tek-blog-title-section-end',
            	'type' => 'section',
            	'indent' => false,
          ),
          array(
              'id'=>'tek-blog-newsletter-section-start',
              'type' => 'section',
              'title' => esc_html__('Blog Newsletter Form', 'leadengine'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-blog-header-form',
              'type' => 'switch',
              'title' => esc_html__('Show Newsletter Form', 'leadengine'),
              'subtitle' => esc_html__('Turn on to display a form in the header area.', 'leadengine'),
              'default' => false
          ),
          array(
              'id' => 'tek-blog-header-form-id',
              'type' => 'select',
              'data' => 'posts',
              'args' => array( 'post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1, ),
              'title' => esc_html__('Newsletter Form Title', 'leadengine'),
              'subtitle' => esc_html__('Select the Contact Form 7 to be used as a newsletter in the title bar area.', 'leadengine'),
              'required' => array('tek-blog-header-form','equals', true),
          ),
          array(
            	'id'=>'tek-blog-newsletter-section-end',
            	'type' => 'section',
            	'indent' => false,
          ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'title' => esc_html__('Single Post', 'leadengine'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-blog-single-sidebar',
            'type' => 'switch',
            'title' => esc_html__('Display Sidebar', 'leadengine'),
            'subtitle' => esc_html__('Turn on/off single post sidebar', 'leadengine'),
            'default' => true
        ),
        array(
          'id'       => 'tek-blog-social-sharing-buttons',
          'type'     => 'checkbox',
          'title'    => __('Social Sharing Buttons', 'leadengine'),
          'subtitle' => __('Select social sharing buttons visible on single post', 'leadengine'),
          'options'  => array(
              '1' => 'Facebook',
              '2' => 'Twitter',
              '3' => 'LinkedIn'
          ),
          'default' => array(
              '1' => '1',
              '2' => '1',
              '3' => '1'
          ),
        ),
        array(
            'id' => 'tek-author-box',
            'type' => 'switch',
            'title' => esc_html__('Author Box', 'leadengine'),
            'subtitle' => esc_html__('Enable to display author box below post content.', 'leadengine'),
            'default' => true
        ),
        array(
            'id' => 'tek-blog-single-nav',
            'type' => 'switch',
            'title' => esc_html__('Previous/Next Pagination', 'leadengine'),
            'subtitle' => esc_html__('Enable to display the previous/next post pagination for single posts.', 'leadengine'),
            'default' => false
        ),
        array(
            'id' => 'tek-related-posts',
            'type' => 'switch',
            'title' => esc_html__('Related Posts', 'leadengine'),
            'subtitle' => esc_html__('Enable to display related posts on single post pages.', 'leadengine'),
            'default' => true
        ),
        array(
            'id' => 'tek-related-posts-title',
            'type' => 'text',
            'title' => esc_html__('Related Posts Title', 'leadengine'),
            'default' => 'You may also like',
            'required' => array(
                      'tek-related-posts',
                      'equals',
                      true
                  ),
        ),
        array(
                  'id'       => 'tek-related-posts-number',
            'type'     => 'slider',
                  'title'    => esc_html__( 'Number of Related Posts', 'leadengine' ),
                  'subtitle' => esc_html__( 'Controls the number of posts that display under related posts section.', 'leadengine' ),
                  'default'  => 3,
                  'max'      => 20,
                  'required' => array(
                      'tek-related-posts',
                      'equals',
                      true
                  ),
          )
      )
  ) );

  Redux::set_section( $opt_name, array(
      'title' => esc_html__('Blog Meta', 'leadengine'),
      'desc' => esc_html__('The settings available with this page control the main blog page, single blog post page and blog archive pages. These settings do not overwrite the Post Grid or the Masonry Grid element settings.', 'leadengine'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-post-meta',
            'type' => 'switch',
            'title' => esc_html__('Post Meta', 'leadengine'),
            'subtitle' => esc_html__('Enable/Disable the post meta on blog posts. You can also control individual meta settings below.', 'leadengine'),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-date',
            'type' => 'switch',
            'title' => esc_html__('Post Meta Date', 'leadengine'),
            'subtitle' => esc_html__('Enable/Disable the post meta date.', 'leadengine'),
            'required' => array(
                'tek-post-meta',
                'equals',
                true
            ),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-author',
            'type' => 'switch',
            'title' => esc_html__('Post Meta Author', 'leadengine'),
            'subtitle' => esc_html__('Enable/Disable the post meta author.', 'leadengine'),
            'required' => array(
                'tek-post-meta',
                'equals',
                true
            ),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-categories',
            'type' => 'switch',
            'title' => esc_html__('Post Meta Categories', 'leadengine'),
            'subtitle' => esc_html__('Enable/Disable the post meta categories.', 'leadengine'),
            'required' => array(
                'tek-post-meta',
                'equals',
                true
            ),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-comments',
            'type' => 'switch',
            'title' => esc_html__('Post Meta Comments', 'leadengine'),
            'subtitle' => esc_html__('Enable/Disable the post meta comments.', 'leadengine'),
            'required' => array(
                'tek-post-meta',
                'equals',
                true
            ),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-tags',
            'type' => 'switch',
            'title' => esc_html__('Post Meta Tags', 'leadengine'),
            'subtitle' => esc_html__('Enable/Disable the post meta tags.', 'leadengine'),
            'default' => true
        ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'el-icon-wrench-alt',
      'title' => esc_html__('Utility Pages', 'leadengine'),
  ) );

  Redux::set_section( $opt_name, array(
      'title' => esc_html__('Search Page', 'leadengine'),
      'desc' => esc_html__('Seach page general settings', 'leadengine'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-search-form-content',
            'type' => 'button_set',
            'title' => esc_html__('Search results content', 'leadengine'),
            'subtitle' => esc_html__('Select the type of content to be displayed in search results.', 'leadengine'),
            'description' => esc_html__('Settings used for the form displayed in Topbar or Main Menu header area.', 'leadengine'),
            'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
            'options'  => array(
                'search-all' => 'All post types',
                'post' => 'Posts',
                'portfolio' => 'Portfolio',
                'product' => 'Products',
            ),
            'default' => 'search-all',
        ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'title' => esc_html__('404 Page', 'leadengine'),
      'desc' => esc_html__('404 page general settings', 'leadengine'),
      'subsection' => true,
      'fields' => array(
          array(
              'id' => 'tek-404-title',
              'type' => 'text',
              'title' => esc_html__('Page Title', 'leadengine'),
              'default' => 'Error 404'
          ),
          array(
              'id' => 'tek-404-subtitle',
              'type' => 'text',
              'title' => esc_html__('Page Subtitle', 'leadengine'),
              'default' => 'This page could not be found!'
          ),
          array(
              'id' => 'tek-404-back',
              'type' => 'text',
              'title' => esc_html__('Back to Homepage Button Text', 'leadengine'),
              'default' => 'Back to homepage'
          )
      )
  ) );

  Redux::set_section( $opt_name, array(
      'title' => esc_html__('Maintenance Mode', 'leadengine'),
      'desc' => esc_html__('Maintenance mode will be activated only for users that are not logged in.', 'leadengine'),
      'subsection' => true,
      'fields' => array(
          array(
              'id' => 'tek-maintenance-mode',
              'type' => 'switch',
              'title' => __('Enable Maintenance Mode', 'leadengine'),
              'subtitle' => esc_html__('Activate to enable maintenance mode.', 'leadengine'),
              'default' => false
          ),
          array(
              'id' => 'tek-maintenance-title',
              'type' => 'text',
              'title' => esc_html__('Page Title', 'leadengine'),
              'required' => array('tek-maintenance-mode','equals', true),
              'default' => 'LeadEngine is in the works!'
          ),
          array(
              'id' => 'tek-maintenance-content',
              'type' => 'editor',
              'title' => esc_html__('Page Content', 'leadengine'),
              'required' => array('tek-maintenance-mode','equals', true),
              'default' => '',
              'args'   => array(
                'teeny'  => true,
                'textarea_rows' => 10,
                'media_buttons' => false,
              )
          ),
          array(
              'id' => 'tek-maintenance-countdown',
              'type' => 'switch',
              'title' => __('Enable Countdown', 'leadengine'),
              'subtitle' => esc_html__('Activate to enable the countdown timer.', 'leadengine'),
              'required' => array('tek-maintenance-mode','equals', true),
              'default' => false
          ),
          array(
              'id' => 'tek-maintenance-count-day',
              'type' => 'text',
              'title' => esc_html__('End Day', 'leadengine'),
              'subtitle' => esc_html__('Enter day value. Eg. 05', 'leadengine'),
              'required' => array('tek-maintenance-countdown','equals', true),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-count-month',
              'type' => 'text',
              'title' => esc_html__('End Month', 'leadengine'),
              'subtitle' => esc_html__('Enter month value. Eg. 09', 'leadengine'),
              'required' => array('tek-maintenance-countdown','equals', true),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-count-year',
              'type' => 'text',
              'title' => esc_html__('End Year', 'leadengine'),
              'subtitle' => esc_html__('Enter year value. Eg. 2020', 'leadengine'),
              'required' => array('tek-maintenance-countdown','equals', true),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-days-text',
              'type' => 'text',
              'title' => esc_html__('Days Label', 'leadengine'),
              'subtitle' => esc_html__('Enter days text label.', 'leadengine'),
              'required' => array('tek-maintenance-countdown','equals', true),
              'default' => 'Days'
          ),
          array(
              'id' => 'tek-maintenance-hours-text',
              'type' => 'text',
              'title' => esc_html__('Hours Label', 'leadengine'),
              'subtitle' => esc_html__('Enter hours text label.', 'leadengine'),
              'required' => array('tek-maintenance-countdown','equals', true),
              'default' => 'Hours'
          ),
          array(
              'id' => 'tek-maintenance-minutes-text',
              'type' => 'text',
              'title' => esc_html__('Minutes Label', 'leadengine'),
              'subtitle' => esc_html__('Enter minutes text label.', 'leadengine'),
              'required' => array('tek-maintenance-countdown','equals', true),
              'default' => 'Minutes'
          ),
          array(
              'id' => 'tek-maintenance-seconds-text',
              'type' => 'text',
              'title' => esc_html__('Seconds Label', 'leadengine'),
              'subtitle' => esc_html__('Enter seconds text label.', 'leadengine'),
              'required' => array('tek-maintenance-countdown','equals', true),
              'default' => 'Seconds'
          ),
          array(
              'id' => 'tek-maintenance-subscribe',
              'type' => 'switch',
              'title' => __('Enable Contact Form', 'leadengine'),
              'subtitle' => esc_html__('Activate to enable contact form on page.', 'leadengine'),
              'required' => array('tek-maintenance-mode','equals', true),
              'default' => false
          ),
          array(
              'id' => 'tek-maintenance-form-select',
              'type' => 'select',
              'title' => esc_html__('Contact Form Plugin', 'leadengine'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'required' => array('tek-maintenance-subscribe','equals',true),
              'options'  => array(
                  '1' => 'Contact Form 7',
                  '2' => 'Ninja Forms',
                  '3' => 'Gravity Forms',
                  '4' => 'WP Forms',
              ),
              'default' => '1'
          ),
          array(
              'id' => 'tek-maintenance-contactf7-formid',
              'type' => 'select',
              'data' => 'posts',
              'args' => array( 'post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1, ),
              'title' => esc_html__('Contact Form 7 Title', 'leadengine'),
              'required' => array('tek-maintenance-form-select','equals','1'),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-ninja-formid',
              'type' => 'text',
              'title' => esc_html__('Ninja Form ID', 'leadengine'),
              'required' => array('tek-maintenance-form-select','equals','2'),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-gravity-formid',
              'type' => 'text',
              'title' => esc_html__('Gravity Form ID', 'leadengine'),
              'required' => array('tek-maintenance-form-select','equals','3'),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-wp-formid',
              'type' => 'text',
              'title' => esc_html__('WP Form ID', 'leadengine'),
              'required' => array('tek-maintenance-form-select','equals','4'),
              'default' => ''
          ),

      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'el-icon-css',
      'title' => esc_html__('Custom CSS/JS', 'leadengine'),
      'fields' => array(
          array(
              'id' => 'tek-css',
              'type' => 'ace_editor',
              'title' => esc_html__('CSS', 'leadengine'),
              'subtitle' => esc_html__('Enter your CSS code in the side field. Do not include any tags or HTML in the field. Custom CSS entered here will override the theme CSS.', 'leadengine'),
              'mode' => 'css',
              'theme' => 'chrome',
          ),
          array(
        			'id' => 'tek-javascript',
        			'type' => 'ace_editor',
        			'title' => esc_html__( 'Javascript', 'leadengine' ),
        			'subtitle' => esc_html__( 'Only accepts Javascript code.', 'leadengine' ),
        			'mode' => 'html',
        			'theme' => 'chrome',
      		),
      )
  ) );
