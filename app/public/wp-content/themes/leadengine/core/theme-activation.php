<?php

// Register the required plugins for this theme.
add_action('tgmpa_register', 'leadengine_register_plugins');

// Register the required plugins for this theme.

if ( ! function_exists( 'leadengine_register_plugins' ) ) {
	function leadengine_register_plugins() {
		$plugins = array(
			array(
				'name' => esc_html__('Redux Framework', 'leadengine'),
				'slug' => 'redux-framework',
				'required' => true,
			),
			array(
				'name' => esc_html__('WPBakery Page Builder', 'leadengine'),
				'slug' => 'js_composer',
				'source' => LEADENGINE_THEME_DIR . 'core/plugins/js_composer.zip',
				'required' => true,
				'version' => '6.9',
				'force_activation' => false,
				'force_deactivation' => false,
			),
			array(
				'name' => esc_html__('KeyDesign Addon', 'leadengine'),
				'slug' => 'keydesign-addon',
				'source' => 'http://www.leadengine-wp.com/external/keydesign-addon.zip',
				'required' => true,
				'version' => '4.8',
				'force_activation' => false,
				'force_deactivation' => false,
				'external_url' => 'http://www.leadengine-wp.com/external/keydesign-addon.zip',
			),
			array(
				'name' => esc_html__('Slider Revolution', 'leadengine'),
				'slug' => 'revslider',
				'source' => LEADENGINE_THEME_DIR . 'core/plugins/revslider.zip',
				'required' => true,
				'version' => '6.5.31',
				'force_activation' => false,
				'force_deactivation' => false,
			),
			array(
				'name' => esc_html__('WooCommerce', 'leadengine'),
				'slug' => 'woocommerce',
				'required' => false,
			),
			array(
				'name' => esc_html__('Contact Form 7', 'leadengine'),
				'slug' => 'contact-form-7',
				'required' => true,
			),
			array(
				'name' => esc_html__('Breadcrumb NavXT', 'leadengine'),
				'slug' => 'breadcrumb-navxt',
				'required' => false,
			),
		);

		$config = array(
			'id' => 'tgmpa',
			'domain' => 'leadengine',
			'default_path' => '',
			'parent_slug' => 'themes.php',
			'capability' => 'edit_theme_options',
			'menu' => 'install-required-plugins',
			'has_notices' => true,
			'is_automatic' => false,
			'message' => '',
			'strings' => array(
				'page_title' => esc_html__('Install Required Plugins', 'leadengine'),
				'menu_title' => esc_html__('Install Plugins', 'leadengine'),
				'installing' => esc_html__('Installing Plugin: %s', 'leadengine'),
				'oops' => esc_html__('Something went wrong with the plugin API.', 'leadengine') ,
				'notice_can_install_required' => _n_noop('This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'leadengine'),
				'notice_can_install_recommended' => _n_noop('This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'leadengine'),
				'notice_cannot_install' => _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'leadengine'),
				'notice_can_activate_required' => _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'leadengine'),
				'notice_can_activate_recommended' => _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'leadengine'),
				'notice_cannot_activate' => _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'leadengine'),
				'notice_ask_to_update' => _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'leadengine'),
				'notice_cannot_update' => _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'leadengine'),
				'install_link' => _n_noop('Begin installing plugin', 'Begin installing plugins', 'leadengine'),
				'activate_link' => _n_noop('Activate installed plugin', 'Activate installed plugins', 'leadengine'),
				'return' => esc_html__('Return to Required Plugins Installer', 'leadengine') ,
				'plugin_activated' => esc_html__('Plugin activated successfully.', 'leadengine') ,
				'complete' => esc_html__('All plugins installed and activated successfully. %s', 'leadengine'),
				'nag_type' => 'updated'
			)
		);
		tgmpa($plugins, $config);
		}
	}
