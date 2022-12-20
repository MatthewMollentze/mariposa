<?php
/**
* KeyDesign Theme Admin Panel
* Initiate the theme admin pages
*/

if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class KeyDesign_Admin {
  public function __construct() {
		add_action( 'init', __CLASS__ . '::init_admin_settings', 7 );
    add_action( 'admin_bar_menu',  __CLASS__ . '::keydesign_admin_bar', 99 );
		add_action( 'redux/loaded', __CLASS__ . '::keydesign_remove_redux_demo' );
    add_action( 'do_meta_boxes', __CLASS__ . '::keydesign_remove_revslider_metabox' );

    $types = get_post_types( [], 'objects' );
		foreach ( $types as $type => $values ) {
      if ( isset( $type ) ) {
        $type_name = 'theme_' . $type . '_templates';
        add_filter( $type_name, __CLASS__ . '::keydesign_remove_templates', 11 );
      }
    }
	}

  public static function keydesign_remove_revslider_metabox() {
    $post_types = array('post','page');
    remove_meta_box( 'slider_revolution_metabox', $post_types, 'side' );
  }

  public static function keydesign_remove_templates( $page_templates ) {
    if ( class_exists( 'Redux' ) ) {
			unset( $page_templates['redux-templates_contained'] );
			unset( $page_templates['redux-templates_full_width'] );
			unset( $page_templates['redux-templates_canvas'] );
		}
    if ( class_exists( 'RevSlider' ) ) {
      unset( $page_templates['../public/views/revslider-page-template.php'] );
    }
  	return $page_templates;
  }

  public static function init_admin_settings() {
    if ( !current_user_can( 'edit_theme_options' ) ) {
		    return;
		}
    add_action( 'admin_menu', __CLASS__ . '::keydesign_add_admin_menu', 9 );

    if ( class_exists( 'Redux' ) ) {
      add_action( 'admin_menu', __CLASS__ . '::keydesign_remove_redux_menu', 11 );
    }
  }

  public static function keydesign_add_admin_menu() {
    $page_menu_func = __CLASS__ . '::menu_callback';
    add_menu_page( esc_html__('LeadEngine Dashboard', 'keydesign'), esc_html__('LeadEngine', 'keydesign'), 'manage_options', 'leadengine-dashboard', '', 'dashicons-welcome-widgets-menus', 2 );
    add_submenu_page( 'leadengine-dashboard', 'LeadEngine Dashboard', 'Dashboard', 'manage_options', 'leadengine-dashboard', $page_menu_func, 0 );
	}

  public static function keydesign_remove_redux_menu() {
    remove_submenu_page( 'tools.php', 'redux-framework' );
  }

  public static function menu_callback() {
		include_once( plugin_dir_path( __FILE__ ).'views/keydesign-dashboard.php' );
	}

  public static function keydesign_admin_bar( $wp_admin_bar ) {

		if ( !current_user_can( 'edit_theme_options' ) ) {
		    return;
		}

		//Add parent shortcut link
		$args = array(
			'id'    => 'leadengine-dashboard',
			'title' => 'LeadEngine',
			'href'  => admin_url( 'admin.php?page=leadengine-dashboard' ),
			'meta'  => array(
				'class' => 'leadengine-toolbar-page',
				'title' => 'LeadEngine Options',
			)
		);
		$wp_admin_bar->add_node( $args );

		//Add dashboard shortcut link
		$args = array(
			'id' => 'leadengine-admin',
			'title' => 'Dashboard',
			'href' => admin_url( 'admin.php?page=leadengine-dashboard' ),
			'parent' => 'leadengine-dashboard',
			'meta'  => array(
				'class' => 'leadengine-dashboard',
				'title' => 'LeadEngine Dashboard',
			),
		);
		$wp_admin_bar->add_node( $args );

    //Add import-demos shortcut link
    $args = array(
			'id' => 'import-demos',
			'title' => 'Import Demos',
			'href' => admin_url( 'admin.php?page=import-demos' ),
			'parent' => 'leadengine-dashboard',
			'meta'  => array(
				'class' => 'import-demos',
				'title' => 'Import Demos',
			),
		);
		$wp_admin_bar->add_node( $args );

		//Add theme-options shortcut link
		if ( class_exists( 'Redux' ) ) {
			$args = array(
				'id' => 'leadengine-theme-options',
				'title' => 'Theme Options',
				'href' => admin_url( 'admin.php?page=theme-options' ),
				'parent' => 'leadengine-dashboard',
				'meta'  => array(
					'class' => 'leadengine-theme-options',
					'title' => 'Theme Options',
				),
			);
			$wp_admin_bar->add_node( $args );
		}

    //Add install-required-plugins shortcut link
    $args = array(
			'id' => 'install-required-plugins',
			'title' => 'Install Plugins',
			'href' => admin_url( 'themes.php?page=install-required-plugins' ),
			'parent' => 'leadengine-dashboard',
			'meta'  => array(
				'class' => 'install-required-plugins',
				'title' => 'Install Plugins',
			),
		);
		$wp_admin_bar->add_node( $args );
	}

  public static function keydesign_remove_redux_demo() {
		if ( class_exists( 'Redux' ) ) {
			remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::instance(), 'plugin_metalinks' ), null, 2);
			remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            update_option( 'use_extendify_templates', '0' );
		}
	}
}
new KeyDesign_Admin;
