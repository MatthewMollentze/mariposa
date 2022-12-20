<?php


// ------------------------------------------------------------------------
// Define Constants
// ------------------------------------------------------------------------

	define( 'LEADENGINE_THEME_VERSION', '3.8' );
	define( 'LEADENGINE_THEME_DIR', trailingslashit( get_template_directory() ) );
	define( 'LEADENGINE_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

// ------------------------------------------------------------------------
// Theme includes
// ------------------------------------------------------------------------

	require_once LEADENGINE_THEME_DIR . 'core/assets/extra/class-tgm-plugin-activation.php';
	require_once LEADENGINE_THEME_DIR . 'core/theme-activation.php';
	require_once LEADENGINE_THEME_DIR . 'core/options-init.php';
	require_once LEADENGINE_THEME_DIR . 'core/helper-functions.php';

	require_once LEADENGINE_THEME_DIR . 'core/theme-sidebars.php';
	require_once LEADENGINE_THEME_DIR . 'core/assets/extra/wp_bootstrap_navwalker.php';

	require_once LEADENGINE_THEME_DIR . 'core/theme-woocommerce.php';

// ------------------------------------------------------------------------
// Enqueue scripts and styles front and admin
// ------------------------------------------------------------------------

	if ( ! function_exists( 'leadengine_enqueue_scripts' ) ) {
		function leadengine_enqueue_scripts() {
			$redux_ThemeTek = get_option( 'redux_ThemeTek' );
			// Bootstrap CSS
			wp_register_style( 'bootstrap', LEADENGINE_THEME_URI . 'core/assets/css/bootstrap.min.css', '', LEADENGINE_THEME_VERSION, 'all' );
			wp_enqueue_style( 'bootstrap' );

			// Theme main style CSS
			wp_register_style( 'keydesign-style', get_stylesheet_uri(), array('bootstrap'), LEADENGINE_THEME_VERSION, 'all' );
			wp_enqueue_style( 'keydesign-style' );

			// Font Awesome
			wp_register_style( 'font-awesome', LEADENGINE_THEME_URI . 'core/assets/css/font-awesome.min.css', '', LEADENGINE_THEME_VERSION, 'all' );
			wp_enqueue_style( 'font-awesome' );

			// Bootstrap JS
			wp_register_script( 'bootstrapjs', LEADENGINE_THEME_URI . 'core/assets/js/bootstrap.min.js', array('jquery'), LEADENGINE_THEME_VERSION, true );
			wp_enqueue_script( 'bootstrapjs' );

			// Theme default fonts
			wp_enqueue_style( 'leadengine-default-font', leadengine_default_font(), LEADENGINE_THEME_VERSION, 'all' );

			// PhotoSwipe
			wp_register_style( 'photoswipe', LEADENGINE_THEME_URI . 'core/assets/css/photoswipe.css', '', LEADENGINE_THEME_VERSION, 'all' );
			wp_register_style( 'photoswipe-skin', LEADENGINE_THEME_URI . 'core/assets/css/photoswipe-default-skin.css', '', LEADENGINE_THEME_VERSION, 'all' );
			wp_register_script( 'photoswipejs', LEADENGINE_THEME_URI . 'core/assets/js/photoswipe.min.js', array('jquery'), LEADENGINE_THEME_VERSION, true );
			wp_register_script( 'photoswipejs-ui', LEADENGINE_THEME_URI . 'core/assets/js/photoswipe-ui-default.min.js', array('jquery'), LEADENGINE_THEME_VERSION, true );

			if ( function_exists( 'is_product' ) ) {
				if ( is_product() ) {
					wp_enqueue_style( 'photoswipe' );
					wp_enqueue_style( 'photoswipe-skin' );
					wp_enqueue_script( 'photoswipejs' );
					wp_enqueue_script( 'photoswipejs-ui' );
				}
			}

			// Smooth scroll
			wp_register_script( 'leadengine-smooth-scroll', LEADENGINE_THEME_URI . 'core/assets/js/SmoothScroll.js', array('jquery'), LEADENGINE_THEME_VERSION, true );
			if ( leadengine_get_option( 'tek-smooth-scroll' ) != false ) {
				wp_enqueue_script( 'leadengine-smooth-scroll' );
			}

			// Theme main scripts
			wp_register_script( 'leadengine-scripts', LEADENGINE_THEME_URI . 'core/assets/js/scripts.js', array('jquery'), LEADENGINE_THEME_VERSION, true );
			wp_enqueue_script( 'leadengine-scripts' );

			// Particles
			wp_register_script( 'particles', LEADENGINE_THEME_URI . '/core/assets/js/particles.min.js', array(), '', true );
			$page_particles = get_post_meta( get_the_ID(), '_themetek_page_particles', true );
			$blog_particles = leadengine_get_option( 'tek-blog-particles' );
			if( ! class_exists( 'ReduxFramework' )) {
				$blog_particles == false;
			}

			if ( is_home() && $blog_particles != false || !empty( $page_particles ) ) {
				wp_enqueue_script( 'particles' );
			}

			// Comment reply script
			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
				wp_enqueue_script( 'comment-reply' );
			}

			// Inline styles
			add_filter( 'leadengine-inline-style', 'leadengine_dynamic_style' );
			$theme_dynamic_css = apply_filters( 'leadengine-inline-style', '' );

			if ( class_exists( 'KEYDESIGN_ADDON_CLASS' ) ) {
				wp_add_inline_style('kd_addon_style', $theme_dynamic_css);
			} else {
		    wp_add_inline_style('keydesign-style', $theme_dynamic_css);
			}

			// Inline scripts
			if ( '' != leadengine_get_option( 'tek-javascript') ) {
				wp_add_inline_script( 'leadengine-scripts', leadengine_get_option( 'tek-javascript') );
			}

			// Load Adobe Typekit fonts
			if ( leadengine_get_option( 'tek-typekit-switch' ) && leadengine_get_option( 'tek-typekit' ) != '' ) {
				wp_register_script( 'leadengine-typekit', '//use.typekit.net/'.esc_js( leadengine_get_option( 'tek-typekit' ) ).'.js', array(), LEADENGINE_THEME_VERSION, true );
				wp_enqueue_script( 'leadengine-typekit' );
	 			wp_add_inline_script( 'leadengine-typekit', 'try{Typekit.load({ async: true });}catch(e){}' );
			}

		}
	}
	add_action( 'wp_enqueue_scripts', 'leadengine_enqueue_scripts' );

	if ( ! function_exists( 'leadengine_enqueue_admin' ) ) {
		function leadengine_enqueue_admin() {
			wp_enqueue_style( 'leadengine-admin-css', LEADENGINE_THEME_URI . 'core/assets/css/admin-styles.css', '', '' );
		}
	}
	add_action( 'admin_enqueue_scripts', 'leadengine_enqueue_admin' );

	if ( ! function_exists( 'leadengine_default_font' ) ) {
		function leadengine_default_font() {
        $font_url = add_query_arg( 'family', urlencode( 'Open Sans:300,400,600,700&subset=latin-ext' ), "//fonts.googleapis.com/css" );
	    	return $font_url;
		}
	}

// ------------------------------------------------------------------------
// bbPress
// ------------------------------------------------------------------------

	if ( ! function_exists( 'leadengine_bbpress_css_enqueue' ) ) {
		function leadengine_bbpress_css_enqueue(){
			if( function_exists( 'is_bbpress' ) ) {
				// Deregister default bbPress CSS
				wp_deregister_style( 'bbp-default' );

				$file = 'core/assets/css/bbpress.css';

				// Check child theme
				if ( file_exists( trailingslashit( get_stylesheet_directory() ) . $file ) ) {
					$location = trailingslashit( get_stylesheet_directory_uri() );
					$handle   = 'bbp-child-bbpress';

				// Check parent theme
				} elseif ( file_exists( trailingslashit( get_template_directory() ) . $file ) ) {
					$location = trailingslashit( get_template_directory_uri() );
					$handle   = 'bbp-parent-bbpress';
				}

				// Enqueue the bbPress styling
				wp_enqueue_style( $handle, $location . $file, 'screen' );
			}
		}
	}
	add_action( 'wp_enqueue_scripts', 'leadengine_bbpress_css_enqueue' );

// ------------------------------------------------------------------------
// Theme Setup
// ------------------------------------------------------------------------
	if ( ! function_exists( 'leadengine_setup' ) ) {
		function leadengine_setup() {
			// Add multilanguage support
			load_theme_textdomain( 'leadengine', LEADENGINE_THEME_DIR . '/languages' );
			// Add theme support for feed links
			add_theme_support( 'automatic-feed-links' );
			// Manage the document title tag
			add_theme_support( 'title-tag' );

			// Set up theme navigation locations
			if ( function_exists( 'register_nav_menus' ) ) {
				register_nav_menus(
					array(
						'header-menu' => __( 'Header Menu', 'leadengine' ),
						'topbar-menu' => __( 'Topbar Menu', 'leadengine' ),
						'footer-menu' => __( 'Footer Menu', 'leadengine' ),
					)
				);
			}

			// Enable support for theme image thumbnails
			add_theme_support( 'post-thumbnails' );
			add_image_size( 'keydesign-grid-image', 400, 250, true );
			add_image_size( 'keydesign-left-image', 320, 280, true );

			// Selective Refresh Support for Widgets
			add_theme_support( 'customize-selective-refresh-widgets' );

			// Enable support for page excerpts
			add_post_type_support( 'page', 'excerpt' );

			// Enable support for Post Formats
			add_theme_support( 'post-formats', array(
				'gallery',
				'video',
				'audio',
				'quote',
			) );

			// Switch default core markup for search form, comment form, and comments to output valid HTML5.
			add_theme_support( 'html5', array(
					'search-form',
					'comment-form',
					'comment-list',
					'gallery',
					'caption',
					'style',
					'script',
			) );

			// Enable support for WooCommerce
			add_theme_support( 'woocommerce', array(
				'thumbnail_image_width' => 400,
				'gallery_thumbnail_image_width' => 400,
				'single_image_width' => 800,
			) );
			add_theme_support( 'wc-product-gallery-lightbox' );

			// Remove block-based widget support
			remove_theme_support( 'widgets-block-editor' );
		}
	}
	add_action( 'after_setup_theme', 'leadengine_setup' );

// ------------------------------------------------------------------------
// Content Width
// ------------------------------------------------------------------------

	if ( ! function_exists( 'leadengine_set_content_width' ) ) {
		function leadengine_set_content_width() {
			global $content_width;
			if ( ! isset( $content_width ) ) {
				$content_width = apply_filters( 'leadengine_content_width', 1240 );
			}
		}
	}
	add_action( 'wp', 'leadengine_set_content_width' );

// ------------------------------------------------------------------------
// Blog functionality
// ------------------------------------------------------------------------

	// Custom blog navigation
	if ( ! function_exists( 'leadengine_blog_prev_link' ) ) {
		function leadengine_blog_prev_link( $output ) {
				return str_replace( '<a href=', '<a class="prev" href=', $output );
		}
	}
	add_filter( 'previous_post_link', 'leadengine_blog_prev_link' );

	if ( ! function_exists( 'leadengine_blog_next_link' ) ) {
		function leadengine_blog_next_link( $output ) {
				return str_replace( '<a href=', '<a class="next" href=', $output );
		}
	}
	add_filter('next_post_link', 'leadengine_blog_next_link');

	// Excerpt length
	if ( ! function_exists( 'leadengine_excerpt_length' ) ) {
		function leadengine_excerpt_length( $length ) {
			if( class_exists( 'ReduxFramework' )) {
				return leadengine_get_option( 'tek-blog-excerpt' );
			} else {
				return 20;
			}
		}
	}
	add_filter( 'excerpt_length', 'leadengine_excerpt_length', 999 );

// ------------------------------------------------------------------------
// Portfolio functionality
// ------------------------------------------------------------------------

	// Portfolio slug
	if ( ! function_exists( 'leadengine_overwrite_portfolio_slug' ) ) {
		function leadengine_overwrite_portfolio_slug( $args ) {
			if ( '' != leadengine_get_option( 'tek-portfolio-slug' ) ) {
		    $args['rewrite']['slug'] = leadengine_get_option( 'tek-portfolio-slug' );
		    return $args;
			}
			return $args;
		}
	}
	add_filter( 'keydesign_portfolio_item_args', 'leadengine_overwrite_portfolio_slug' );

// ------------------------------------------------------------------------
// Output Theme Options custom code
// ------------------------------------------------------------------------

	if ( ! function_exists( 'leadengine_dynamic_style' ) ) {
		function leadengine_dynamic_style() {
			ob_start();
			include_once( LEADENGINE_THEME_DIR . 'core/dynamic-styles.php' );
			$dynamic_css = ob_get_clean();

			// Get theme custom CSS
			$custom_css = leadengine_get_option( 'tek-css' );
			if ( '' != $custom_css ) {
				$dynamic_css .= $custom_css;
			}

			$dynamic_css = leadengine_compress_css( $dynamic_css );
			return $dynamic_css;
		}
	}

// ------------------------------------------------------------------------
// Load maintenance page template
// ------------------------------------------------------------------------

	if ( ! function_exists( 'leadengine_maintenance_mode' ) ) {
		function leadengine_maintenance_mode( $template ) {
			if ( ! class_exists( 'ReduxFramework' ) ) {
				return $template;
			}

			$new_template = locate_template( array( '/core/templates/maintenance-page-template.php' ) );

			if ( leadengine_get_option( 'tek-maintenance-mode' ) && !is_user_logged_in() ) {
				if ( function_exists( 'status_header' ) ) {
					status_header( 503 );
				}
				return $new_template;
			}

			return $template;
		}
	}
	add_action( 'template_include', 'leadengine_maintenance_mode', 1 );

	// Show maintenance mode notice on WP login form
	if ( ! function_exists( 'leadengine_maintenance_login_message' ) ) {
	    function leadengine_maintenance_login_message( $message ) {
		    if ( leadengine_get_option( 'tek-maintenance-mode' ) ) {
		    	$message .= '<div class="message">' . __('Maintenance Mode is <strong>enabled</strong>.', 'leadengine') . '</div>';
		    }

	      return $message;
	    }
	}
	add_filter( 'login_message', 'leadengine_maintenance_login_message' );

	// Show maintenance mode notice in dashboard area
	if ( ! function_exists( 'leadengine_maintenance_admin_notice' ) ) {
	  	function leadengine_maintenance_admin_notice() {
	    	if ( leadengine_get_option( 'tek-maintenance-mode' ) ) {
				echo '<div class="error">
					<p>'.__( 'The Maintenance Mode is <strong>enabled</strong>. Don\'t forget to deactivate as soon as you are done.', 'leadengine' ).'</p>
				</div>';
	    	}
	  	}
	}
	add_action( 'admin_notices', 'leadengine_maintenance_admin_notice' );

// ------------------------------------------------------------------------
// Add boxed body class
// ------------------------------------------------------------------------

	if ( ! function_exists( 'leadengine_body_class' ) ) {
		function leadengine_body_class( $classes ) {
			if ( leadengine_get_option( 'tek-layout-style' ) == 'boxed') {
			 	$classes[] = 'boxed';
			 	return $classes;
			} else {
				return $classes;
			}
		}
	}
	add_filter( 'body_class','leadengine_body_class' );

// ------------------------------------------------------------------------
// Page transparent navigation
// ------------------------------------------------------------------------

	if ( ! function_exists( 'leadengine_transparent_nav' ) ) {
		function leadengine_transparent_nav($classes) {
				if( class_exists( 'WooCommerce' ) && is_shop() ) {
					$post_id = wc_get_page_id( 'shop' );
				} else {
					$post_id = get_the_ID();
				}

				$page_transparent_navigation = get_post_meta( $post_id, '_themetek_page_transparent_navbar', true );
				if ( ! empty( $page_transparent_navigation ) && !is_search() ) {
					$classes[] = 'transparent-navigation';
				}
				return $classes;
		}
	}
	add_filter('body_class', 'leadengine_transparent_nav');

	if ( leadengine_get_option( 'tek-blog-transparent-nav' ) == true) {
		function leadengine_blog_transparent_nav( $classes ) {
			$classes[] = '';
			if (is_home() || is_category() || is_tag() || is_author()) {
				$classes[] = 'transparent-navigation';
			}
			return $classes;
		}
		add_filter( 'body_class','leadengine_blog_transparent_nav' );
	}

// ------------------------------------------------------------------------
// Deactivate OCDI on theme activation
// ------------------------------------------------------------------------
	if ( ! function_exists( 'leadengine_deactivate_ocdi' ) ) {
		function leadengine_deactivate_ocdi() {
			if( class_exists('OCDI_Plugin') ) {
				deactivate_plugins('one-click-demo-import/one-click-demo-import.php');
			}
		}
	}
	add_action( 'admin_init','leadengine_deactivate_ocdi' );
