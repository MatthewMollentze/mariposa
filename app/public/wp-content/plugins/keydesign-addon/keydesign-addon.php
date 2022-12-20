<?php
/*
	Plugin Name: KeyDesign Addon
	Plugin URI: http://keydesign-themes.com/
	Author: KeyDesign
	Author URI: http://keydesign-themes.com/
	Version: 4.9
	Description: KeyDesign Core Plugin for LeadEngine Theme
	Text Domain: keydesign
*/

/*
	If accesed directly, exit.
*/
if (!defined('ABSPATH')) die('-1');
if (!defined('KEYDESIGN_PLUGIN_PATH')){
	define('KEYDESIGN_PLUGIN_PATH', dirname(__FILE__));
}

if (!class_exists('KEYDESIGN_ADDON_CLASS')) {

	/* Load admin area */
	require_once ( trailingslashit( KEYDESIGN_PLUGIN_PATH ) . 'theme/admin/admin-init.php' );

	/* Import OCDI files */
	require_once ( trailingslashit( KEYDESIGN_PLUGIN_PATH ) . 'theme/vendors/ocdi/one-click-demo-import.php' );

	/* Theme demo import config */
	require_once ( trailingslashit( KEYDESIGN_PLUGIN_PATH ) . 'theme/admin/theme-demo-config.php' );

	/* Widgets  */
	require_once ( trailingslashit( KEYDESIGN_PLUGIN_PATH ) . 'theme/widgets/widgets-init.php' );

	/* Theme page meta boxes  */
	if ( ! file_exists( get_stylesheet_directory() . '/core/theme-pagemeta.php' ) ) {
		require_once ( trailingslashit( KEYDESIGN_PLUGIN_PATH ) . 'theme/admin/theme-pagemeta.php' );
	}

	/* Include template files */
	if( class_exists('WPBakeryShortCode') ){
		require_once ( trailingslashit( KEYDESIGN_PLUGIN_PATH ) . 'templates/templates-init.php' );
		require_once ( trailingslashit( KEYDESIGN_PLUGIN_PATH ) . 'templates-panel.php' );
	}

	add_action('admin_init','initiate_keydesign_addon');
	function initiate_keydesign_addon() {
		if( defined('WPB_VC_VERSION') ){
			if( version_compare( 6.7, WPB_VC_VERSION, '>' )){
				add_action( 'admin_notices', 'keydesign_version_notice' );
				add_action( 'network_admin_notices','keydesign_version_notice' );
			}
		} else {
			add_action( 'admin_notices', 'keydesign_activation_notice' );
			add_action( 'network_admin_notices','keydesign_activation_notice' );
		}
	}

	function keydesign_version_notice() {
		$is_multisite = is_multisite();
		$is_network_admin = is_network_admin();
		if( ( $is_multisite && $is_network_admin ) || !$is_multisite ) {
			echo '<div class="updated">
				<p>'.__('The','keydesign').' <strong>Keydesign Addon</strong> '.__('plugin requires','keydesign').' <strong>WPBakery Page Builder</strong> '.__('version 6.7 or greater.','keydesign').'</p>
			</div>';
		}
	}

	function keydesign_activation_notice() {
		$is_multisite = is_multisite();
		$is_network_admin = is_network_admin();
		if( ( $is_multisite && $is_network_admin) || !$is_multisite ) {
			echo '<div class="updated">
				<p>'.__('The','keydesign').' <strong>KeyDesign Addon</strong> '.__('plugin requires','keydesign').' <strong>WPBakery Page Builder</strong> '.__('Plugin installed and activated.','keydesign').'</p>
			</div>';
		}
	}

	/*	Load plugin textdomain. */
	add_action( 'plugins_loaded', 'keydesign_addon_load_textdomain' );
	function keydesign_addon_load_textdomain() {
		load_plugin_textdomain( 'keydesign', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}

	/* Activation hook */
	register_activation_hook( __FILE__, 'keydesign_addon_activate' );
	function keydesign_addon_activate() {
		update_option('keydesign_addon_version', '4.9' );
	}

	/* Allow SVG icon upload */
	add_filter( 'upload_mimes', 'keydesign_svg_upload' );
	function keydesign_svg_upload( $mimes ){
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}

	/* Contact form 7 shortcode init */
	add_action( 'plugins_loaded', 'kd_init_vendor_cf7' );
	function kd_init_vendor_cf7() {
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); // Require plugin.php to use is_plugin_active() below
		if ( is_plugin_active( 'contact-form-7/wp-contact-form-7.php' ) || defined( 'WPCF7_PLUGIN' ) ) {
			require_once ( plugin_dir_path( __FILE__ ).'elements/vendors/vendor-contact-form-7.php' );
		} // if contact form7 plugin active
	}

	/* Before VC init */
	add_action( 'vc_before_init', 'kd_vc_before_init_actions' );
	function kd_vc_before_init_actions() {
		// Force WPBakery Page Builder to initialize as "built into the theme"
		if( function_exists('vc_set_as_theme') ){
			vc_set_as_theme();
		}

		// Link VC elements's folder
    if( function_exists('vc_set_shortcodes_templates_dir') ){
      vc_set_shortcodes_templates_dir( plugin_dir_path( __FILE__ ).'templates/vc-elements' );
		}
	}


	add_action( 'vc_after_init', 'keydesign_vc_after_init_actions' );
	function keydesign_vc_after_init_actions() {
		/* Remove params from grid element */
    if( function_exists('vc_remove_param') ){
      vc_remove_param( 'vc_masonry_grid', 'initial_loading_animation' );
			vc_remove_param( 'vc_masonry_grid', 'filter_color' );
			vc_remove_param( 'vc_masonry_grid', 'filter_size' );
    }

		// Enable VC by default on a list of Post Types
		if ( get_option( 'kd-default-post-types' ) != 'yes' ) {
			if( function_exists('vc_set_default_editor_post_types') ) {
	      $list = array(
	          'page',
	          'post',
	          'portfolio',
	      );
	      vc_set_default_editor_post_types( $list );
				vc_editor_set_post_types($list);
	    }
		 	update_option( 'kd-default-post-types', 'yes' );
    }

		//Add parameters to vc_row
		if ( function_exists('vc_add_param') ) {
			$base = 'vc_row';

      $attributes = array(
					array(
						'type' => 'checkbox',
						'heading' => esc_html__( 'Fixed background', 'keydesign' ),
						'param_name' => 'kd_fixed_background',
						'description' => esc_html__( 'If checked the background image stays fixed.', 'keydesign' ),
						'group' => esc_html__( 'Background', 'keydesign' ),
					),
					array(
						'type' => 'checkbox',
						'heading' => esc_html__( 'Image overlay', 'keydesign' ),
						'param_name' => 'kd_image_overlay',
						'description' => esc_html__( 'If checked a layer will be applied over the row background image.', 'keydesign' ),
						'group' => esc_html__( 'Background', 'keydesign' ),
					),
					array(
						'type' => 'colorpicker',
						'class' => '',
						'heading' => esc_html__('Overlay color', 'keydesign'),
						'param_name' => 'kd_image_overlay_color',
						'value' => '',
						'dependency' => array(
							 'element' => 'kd_image_overlay',
							 'value'	=> 'true',
				 		),
					 	'group' => esc_html__( 'Background', 'keydesign' ),
					),
				);

				foreach ($attributes as $attribute) {
					vc_add_param( $base, $attribute );
				}

    	}

	}

	class KEYDESIGN_ADDON_CLASS {
		function __construct() {
			$this->elements_folder	=	plugin_dir_path( __FILE__ ).'elements/';
			$this->templates_folder	=	plugin_dir_path( __FILE__ ).'templates/';
			$this->params_dir = plugin_dir_path( __FILE__ ).'params/';
			add_action( 'after_setup_theme', array( $this, 'integrate_with_vc' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'keydesign_load_front_scripts' ) );
			add_action( 'vc_load_iframe_jscss', array( $this, 'keydesign_load_front_editor_scripts' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'keydesign_load_admin_scripts') );
			add_action( 'init', array( $this, 'keydesign_init_portfolio_cpt' ), 1 );
			add_action( 'wp_footer', array( $this, 'photoswipe_structure') );
			$this->keydesign_templates();
		}

		public function keydesign_templates() {
			if( class_exists('WPBakeryShortCode') ){
				$KeyDesignTemplates = new KeyDesign_Vc_Templates_Panel_Editor();
				return $KeyDesignTemplates->init();
			}
		}

		public function keydesign_init_portfolio_cpt() {
			if ( function_exists( 'leadengine_get_option' ) ) {
				if ( leadengine_get_option( 'tek-portfolio-cpt' ) ) {
					require_once ( trailingslashit( KEYDESIGN_PLUGIN_PATH ) . 'custom-post-type.php' );
				}
			}
		}

		public function integrate_with_vc() {
			if( class_exists( 'WPBakeryShortCode' ) ) {
				foreach(glob($this->elements_folder."/*.php") as $elem) {
					require_once($elem);
				}
				foreach(glob($this->params_dir."/*.php") as $param)
				{
					require_once($param);
				}
			}
		}

		static function photoswipe_structure() {
	     echo '<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
	         <div class="pswp__bg"></div>
	         <div class="pswp__scroll-wrap">
	             <div class="pswp__container">
	                 <div class="pswp__item"></div>
	                 <div class="pswp__item"></div>
	                 <div class="pswp__item"></div>
	             </div>
	             <div class="pswp__ui pswp__ui--hidden">
	                 <div class="pswp__top-bar">
	                     <div class="pswp__counter"></div>
	                     <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
	                     <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
	                     <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
	                     <div class="pswp__preloader">
	                         <div class="pswp__preloader__icn">
	                           <div class="pswp__preloader__cut">
	                             <div class="pswp__preloader__donut"></div>
	                           </div>
	                         </div>
	                     </div>
	                 </div>
	                 <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
	                 </button>
	                 <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
	                 </button>
	                 <div class="pswp__caption">
	                     <div class="pswp__caption__center"></div>
	                 </div>
	             </div>
	         </div>
	     </div>';
	 	}

		public function keydesign_load_front_editor_scripts() {
			wp_enqueue_script( 'masonry' );
			wp_enqueue_script( 'kd_easypiechart_script', plugins_url('assets/js/jquery.easypiechart.min.js', __FILE__), array('jquery') );
			wp_enqueue_script( 'kd_easytabs_script', plugins_url('assets/js/jquery.easytabs.min.js', __FILE__), array('jquery') );
			wp_enqueue_script( 'kd_countdown_script', plugins_url('assets/js/jquery.countdown.js', __FILE__), array('jquery') );
			wp_enqueue_script( 'kd_countto', plugins_url('assets/js/kd_countto.js', __FILE__), array('jquery') );
			wp_enqueue_script( 'kd_front_editor', plugins_url('assets/js/kd_addon_front.js', __FILE__), array('jquery') );
		}

		public function keydesign_load_front_scripts() {
			// Register & Load plug-in main style sheet
			wp_register_style( 'kd_addon_style', plugins_url('assets/css/kd_vc_front.css', __FILE__), array('keydesign-style'));
			wp_enqueue_style( 'kd_addon_style' );

			// Easing Script
			wp_register_script( 'kd_easing_script', plugins_url('assets/js/jquery.easing.min.js', __FILE__), array('jquery') );
			wp_enqueue_script ( 'kd_easing_script' );

			// Owl Carousel
			wp_register_script( 'kd_carousel_script', plugins_url('assets/js/owl.carousel.min.js', __FILE__), array('jquery') );
			wp_enqueue_script ( 'kd_carousel_script' );

			// Easy Tabs
			wp_register_script( 'kd_easytabs_script', plugins_url('assets/js/jquery.easytabs.min.js', __FILE__), array('jquery') );

	    // Countdown Element
			wp_register_script( 'kd_countdown_script', plugins_url('assets/js/jquery.countdown.js', __FILE__), array('jquery') );

			// Pie Chart Element
			wp_register_script( 'kd_easypiechart_script', plugins_url('assets/js/jquery.easypiechart.min.js', __FILE__), array('jquery') );

			// Event session Element
			wp_register_script( 'kd_jquery_appear', plugins_url('assets/js/jquery.appear.js', __FILE__), array('jquery') );
			wp_enqueue_script ( 'kd_jquery_appear' );

			// Register & Load Photoswipe
			wp_register_style( 'photoswipe', plugins_url('assets/css/photoswipe.css', __FILE__));
			wp_register_style( 'photoswipe-skin', plugins_url('assets/css/photoswipe-default-skin.css', __FILE__));
			wp_register_script( 'photoswipejs', plugins_url('assets/js/photoswipe.min.js', __FILE__), array('jquery') );
			wp_register_script( 'photoswipejs-ui', plugins_url('assets/js/photoswipe-ui-default.min.js', __FILE__), array('jquery') );

			wp_enqueue_style('photoswipe');
			wp_enqueue_style('photoswipe-skin');
			wp_enqueue_script('photoswipejs', array('jquery'), '', true );
			wp_enqueue_script('photoswipejs-ui', array('jquery'), '', true );

			// Progressbar element
			wp_register_script( 'kd_progressbar', plugins_url('assets/js/kd_progressbar.js', __FILE__), array('jquery') );

			// Scroll position
			wp_register_script( 'scrollpos-styler', plugins_url('assets/js/scrollPosStyler.js', __FILE__), array('jquery') );

			// Counter element
			wp_register_script( 'kd_countto', plugins_url('assets/js/kd_countto.js', __FILE__), array('jquery') );

			// Image comparison
			wp_register_script( 'jquery_mobile_vmouse', plugins_url( 'assets/js/jquery.mobile.vmouse.min.js', __FILE__ ), array( 'jquery' ) );
			wp_register_script( 'kd_image_comparison', plugins_url( 'assets/js/image-comparison-slider.js', __FILE__ ), array( 'jquery_mobile_vmouse' ) );

			// Iconsmind font pack resources
			wp_register_style( 'kd_iconsmind', plugins_url('assets/css/iconsmind.min.css', __FILE__));
			wp_enqueue_style( 'kd_iconsmind' );

			// Plugin Front End Script
			wp_register_script( 'kd_addon_script', plugins_url('assets/js/kd_addon_script.js', __FILE__), array('jquery') );
			wp_enqueue_script ( 'kd_addon_script' );
		}

		public function keydesign_load_admin_scripts() {
			wp_enqueue_style( 'kd_iconsmind', plugins_url('assets/css/iconsmind.min.css', __FILE__));
			wp_enqueue_style( 'kd_addon_backend_style', plugins_url('assets/admin/css/kd_vc_backend.css', __FILE__));
			wp_enqueue_script( 'kd_addon_backend_script', plugins_url('assets/admin/js/kd_addon_backend.js', __FILE__));
		}

	}
}
// Finally initialize code
new KEYDESIGN_ADDON_CLASS();
