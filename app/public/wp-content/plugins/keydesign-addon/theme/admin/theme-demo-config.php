<?php

if ( ! function_exists( 'keydesign_demo_import_files' ) ) {
  function keydesign_demo_import_files() {
    return array(
      array(
        'import_file_name'             => 'Main demo',
        'categories'                   => array( 'Landing pages' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/main-demo/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/main-demo/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/main-demo.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/main-demo/',
      ),
      array(
        'import_file_name'             => 'Agency landing',
        'categories'                   => array( 'Landing pages' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/agency-landing/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/agency-landing/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/agency-landing.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/agency/',
      ),
      array(
        'import_file_name'             => 'Company landing',
        'categories'                   => array( 'Landing pages' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/company-landing/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/company-landing/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/company-landing.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/company/',
      ),
      array(
        'import_file_name'             => 'Crowdfunding landing',
        'categories'                   => array( 'Landing pages' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/crowdfunding/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/crowdfunding/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/crowdfunding.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/crowdfunding/',
      ),
      array(
        'import_file_name'             => 'Crypto landing',
        'categories'                   => array( 'Landing pages' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/ico-landing/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/ico-landing/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/ico-landing.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/ico-landing/',
      ),
      array(
        'import_file_name'             => 'Deal landing',
        'categories'                   => array( 'Landing pages' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/deal-landing/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/deal-landing/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/deal-landing.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/deal-landing/',
      ),
      array(
        'import_file_name'             => 'Digital landing',
        'categories'                   => array( 'Landing pages' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/digital-landing/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/digital-landing/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/digital-landing.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/digital-landing/',
      ),
      array(
        'import_file_name'             => 'Event landing',
        'categories'                   => array( 'Landing pages' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/event-landing/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/event-landing/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/event-landing.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/event-landing/',
      ),
      array(
        'import_file_name'             => 'Marketing landing',
        'categories'                   => array( 'Landing pages' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/marketing-landing/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/marketing-landing/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/marketing-landing.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/marketing/',
      ),
      array(
        'import_file_name'             => 'Mobile app landing',
        'categories'                   => array( 'Landing pages' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/mobileapp-landing/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/mobileapp-landing/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/mobileapp-landing.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/mobileapp-landing/',
      ),
      array(
        'import_file_name'             => 'Payments landing',
        'categories'                   => array( 'Landing pages' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/payments-landing/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/payments-landing/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/payments-landing.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/payments/',
      ),
      array(
        'import_file_name'             => 'Personal landing',
        'categories'                   => array( 'Landing pages' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/personal-landing/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/personal-landing/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/personal-landing.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/personal/',
      ),
      array(
        'import_file_name'             => 'Product landing',
        'categories'                   => array( 'Landing pages' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/product-landing/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/product-landing/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/product-landing.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/product-landing/',
      ),
      array(
        'import_file_name'             => 'SaaS landing',
        'categories'                   => array( 'Landing pages' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/saas-landing/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/saas-landing/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/saas-landing.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/saas-landing/',
      ),
      array(
        'import_file_name'             => 'SEO landing',
        'categories'                   => array( 'Landing pages' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/seo-landing/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/seo-landing/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/seo-landing.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/seo-landing/',
      ),
      array(
        'import_file_name'             => 'Shop landing',
        'categories'                   => array( 'Landing pages' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/shop-landing/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/shop-landing/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/shop-landing.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/shop-landing/',
      ),
      array(
        'import_file_name'             => 'Startup landing',
        'categories'                   => array( 'Landing pages' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/startup-landing/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/startup-landing/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/startup-landing.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/startup/',
      ),
      array(
        'import_file_name'             => 'Architecture',
        'categories'                   => array( 'Niche demos' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/architecture/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/architecture/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/architecture.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/architecture/',
      ),
      array(
        'import_file_name'             => 'Barber',
        'categories'                   => array( 'Niche demos' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/barber/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/barber/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/barber.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/barber/',
      ),
      array(
        'import_file_name'             => 'Beauty salon',
        'categories'                   => array( 'Niche demos' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/beauty-salon/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/beauty-salon/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/beauty-salon.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/beauty-salon/',
      ),
      array(
        'import_file_name'             => 'Car rental',
        'categories'                   => array( 'Niche demos' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/car-rental/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/car-rental/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/car-rental.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/car-rental/',
      ),
      array(
        'import_file_name'             => 'Coaching',
        'categories'                   => array( 'Niche demos' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/coaching/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/coaching/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/coaching.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/coaching/',
      ),
      array(
        'import_file_name'             => 'Construction',
        'categories'                   => array( 'Niche demos' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/construction/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/construction/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/construction.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/construction/',
      ),
      array(
        'import_file_name'             => 'Education',
        'categories'                   => array( 'Niche demos' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/education/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/education/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/education.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/education/',
      ),
      array(
        'import_file_name'             => 'Fitness',
        'categories'                   => array( 'Niche demos' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/fitness/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/fitness/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/fitness.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/fitness/',
      ),
      array(
        'import_file_name'             => 'Finance',
        'categories'                   => array( 'Niche demos' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/finance/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/finance/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/finance.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/finance/',
      ),
      array(
        'import_file_name'             => 'Hotel',
        'categories'                   => array( 'Niche demos' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/hotel/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/hotel/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/hotel.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/hotel/',
      ),
      array(
        'import_file_name'             => 'Industrial',
        'categories'                   => array( 'Niche demos' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/industrial/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/industrial/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/industrial.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/industrial/',
      ),
      array(
        'import_file_name'             => 'IT service',
        'categories'                   => array( 'Niche demos' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/it-service/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/it-service/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/it-service.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/it-service/',
      ),
      array(
        'import_file_name'             => 'Medical',
        'categories'                   => array( 'Niche demos' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/medical/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/medical/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/medical.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/medical/',
      ),
      array(
        'import_file_name'             => 'Real estate',
        'categories'                   => array( 'Niche demos' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/real-estate/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/real-estate/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/real-estate.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/real-estate/',
      ),
      array(
        'import_file_name'             => 'Restaurant',
        'categories'                   => array( 'Niche demos' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/restaurant/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/restaurant/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/restaurant.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/restaurant/',
      ),
      array(
        'import_file_name'             => 'Transport',
        'categories'                   => array( 'Niche demos' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/transport/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/transport/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/transport.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/transport/',
      ),
      array(
        'import_file_name'             => 'Travel agency',
        'categories'                   => array( 'Niche demos' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/travel-agency/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/travel-agency/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/travel-agency.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/travel-agency/',
      ),
      array(
        'import_file_name'             => 'Workspace',
        'categories'                   => array( 'Niche demos' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demos/workspace/demo-content.xml',
        'local_import_widget_file'     => plugin_dir_path( __FILE__ ) . 'demos/general/widgets.wie',
        'local_import_redux'           => array(
          array(
            'file_path'   => plugin_dir_path( __FILE__ ) . 'demos/workspace/theme-options.json',
            'option_name' => 'redux_ThemeTek',
          ),
        ),
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'screenshots/workspace.jpg',
        'preview_url'                  => 'https://www.leadengine-wp.com/workspace/',
      ),

    );
  }
}
add_filter( 'pt-ocdi/import_files', 'keydesign_demo_import_files' );

// Automatically assign "Front page", "Posts page" and menu locations after the importer is done
// Import Revolution Slider if plugin is active
if ( ! function_exists( 'keydesign_demo_after_import' ) ) {
  function keydesign_demo_after_import($selected_import) {
  	// Assign menus to their locations.
  	$main_menu = get_term_by( 'name', 'Main menu', 'nav_menu' );
    $footer_menu = get_term_by( 'name', 'Footer menu', 'nav_menu' );
    $topbar_menu = get_term_by( 'name', 'Topbar menu', 'nav_menu' );

  	set_theme_mod( 'nav_menu_locations', array(
  			'header-menu' => $main_menu->term_id,
        'footer-menu' => $footer_menu->term_id,
        'topbar-menu' => $topbar_menu->term_id,
  		)
  	);

  	// Assign front page and posts page (blog page).
  	$front_page_id = get_page_by_title( 'Home' );
  	$blog_page_id  = get_page_by_title( 'Blog' );

  	update_option( 'show_on_front', 'page' );
  	update_option( 'page_on_front', $front_page_id->ID );
  	update_option( 'page_for_posts', $blog_page_id->ID );

    // Configure permalinks
    global $wp_rewrite;
  	$wp_rewrite->set_permalink_structure( '/%postname%/' );

    // Import Slider Revolution

    if ( class_exists( 'RevSlider' ) ) {
      if ( 'Architecture' === $selected_import['import_file_name'] ) {
        $slider_array = array( plugin_dir_path( __FILE__ ) . 'demos/revslider/architecture-slider.zip' );
      } elseif ( 'Barber' === $selected_import['import_file_name'] ) {
        $slider_array = array( plugin_dir_path( __FILE__ ) . 'demos/revslider/barber-slider.zip' );
      } elseif ( 'Company landing' === $selected_import['import_file_name'] ) {
        $slider_array = array( plugin_dir_path( __FILE__ ) . 'demos/revslider/company-slider.zip' );
      } elseif ( 'Digital landing' === $selected_import['import_file_name'] ) {
        $slider_array = array( plugin_dir_path( __FILE__ ) . 'demos/revslider/digital-slider.zip' );
      } elseif ( 'Construction' === $selected_import['import_file_name'] ) {
        $slider_array = array( plugin_dir_path( __FILE__ ) . 'demos/revslider/construction-slider.zip' );
      } elseif ( 'Fitness' === $selected_import['import_file_name'] ) {
        $slider_array = array( plugin_dir_path( __FILE__ ) . 'demos/revslider/fitness-slider.zip' );
      } elseif ( 'Finance' === $selected_import['import_file_name'] ) {
        $slider_array = array( plugin_dir_path( __FILE__ ) . 'demos/revslider/finance-slider.zip' );
      } elseif ( 'IT service' === $selected_import['import_file_name'] ) {
        $slider_array = array( plugin_dir_path( __FILE__ ) . 'demos/revslider/it-service-slider.zip' );
      } elseif ( 'Restaurant' === $selected_import['import_file_name'] ) {
        $slider_array = array( plugin_dir_path( __FILE__ ) . 'demos/revslider/restaurant-slider.zip' );
      } elseif ( 'Transport' === $selected_import['import_file_name'] ) {
        $slider_array = array( plugin_dir_path( __FILE__ ) . 'demos/revslider/transport-slider.zip' );
      } elseif ( 'Travel agency' === $selected_import['import_file_name'] ) {
        $slider_array = array( plugin_dir_path( __FILE__ ) . 'demos/revslider/travel-slider.zip' );
      }

       $slider = new RevSlider();

       foreach($slider_array as $filepath){
         $slider->importSliderFromPost(true,true,$filepath);
       }

       echo ' Slider processed';
    }
  }
}
add_action( 'pt-ocdi/after_import', 'keydesign_demo_after_import' );

// Remove default widgets on demo import
if ( ! function_exists( 'keydesign_before_widgets_import' ) ) {
  function keydesign_before_widgets_import( $selected_import ) {
    update_option( 'sidebars_widgets', array( 'wp_inactive_widgets' => array() ) );
  }
}
add_action( 'pt-ocdi/before_widgets_import', 'keydesign_before_widgets_import' );

// Disable generation of smaller images (thumbnails) during the content import
add_filter( 'pt-ocdi/regenerate_thumbnails_in_content_import', '__return_false' );

// Disable the branding notice
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );
?>
