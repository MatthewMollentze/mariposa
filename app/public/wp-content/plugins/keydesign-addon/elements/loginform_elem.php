<?php

if (!class_exists('KD_ELEM_LOGIN_FORM')) {

    class KD_ELEM_LOGIN_FORM extends KEYDESIGN_ADDON_CLASS {

        function __construct() {
            add_action('init', array($this, 'kd_loginform_init'));
            add_shortcode('tek_loginform', array($this, 'kd_loginform_shrt'));
        }

        // Element configuration in admin

        function kd_loginform_init() {
            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Login form", "keydesign"),
                    "description" => esc_html__("Simple login form for use anywhere within WordPress.", "keydesign"),
                    "base" => "tek_loginform",
                    "class" => "",
                    "icon" => plugins_url('assets/element_icons/login-form.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "show_settings_on_create" => true,
                    "params" => array(
                      array(
                          "type" => "href",
                          "class" => "",
                          "heading" => esc_html__("Redirect", "keydesign"),
                          "param_name" => "redirect",
                          "value" => "",
                          "description" => esc_html__("Redirect to another page after successful login.", "keydesign"),
                      ),
                      array(
                          "type" =>  "dropdown",
                          "class" =>  "",
                          "heading" =>  esc_html__("Remember me","keydesign"),
                          "param_name" =>  "remember",
                          "value" =>  array(
                              "Enable" => "enable-remember",
                              "Disable" => "disable-remember",
                          ),
                          "save_always" => true,
                          "description" =>  esc_html__("Enable to display \"Remember\" me checkbox.", "keydesign")
                      ),
                    )
                ));
            }
        }

		// Render the element on front-end

    public function kd_loginform_shrt($atts, $content = null) {
      extract(shortcode_atts(array(
          'redirect' => '',
          'remember' => '',
      ), $atts));

      $args = $login_form = '';

      $args = array();
      $args['echo'] = "0";

      if(isset($redirect) && $redirect != '') {
        $args['redirect'] = esc_url($redirect);
      }

      if(isset($remember) && $remember != 'disable-remember') {
        $args['remember'] = "1";
      } else {
        $args['remember'] = "0";
      }

      if(is_user_logged_in()) {
        $login_form .= wp_loginout(esc_url($_SERVER['REQUEST_URI']), false);
      } else {
        $login_form .= wp_login_form($args);
      }

      return $login_form;
    }
  }
}

if (class_exists('KD_ELEM_LOGIN_FORM')) {
    $KD_ELEM_LOGIN_FORM = new KD_ELEM_LOGIN_FORM;
}

?>
