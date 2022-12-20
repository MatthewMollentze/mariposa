<?php

if (!class_exists('KD_ELEM_PARTICLES')) {

    class KD_ELEM_PARTICLES extends KEYDESIGN_ADDON_CLASS {

        function __construct() {
            add_action('init', array($this, 'kd_particles_init'));
            add_shortcode('tek_particles', array($this, 'kd_particles_shrt'));
        }

        // Element configuration in admin

        function kd_particles_init() {
            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Particles", "keydesign"),
                    "description" => esc_html__("Place a particles background anywhere in a row.", "keydesign"),
                    "base" => "tek_particles",
                    "class" => "",
                    "icon" => plugins_url('assets/element_icons/particles.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "params" => array(
                      array(
                        "type" => "kd_param_notice",
                        "text" => "<span style='display: block;'>This element doesn't need extra configuration. Use as it is.</span>",
                        "param_name" => "notification",
                        'edit_field_class' => 'vc_column vc_col-sm-12',
                      ),
                      array(
                          "type" => "textfield",
                          "class" => "",
                          "heading" => esc_html__("Extra class name", "keydesign"),
                          "param_name" => "part_extra_class",
                          "value" => "",
                          "description" => esc_html__("If you wish to style a particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign")
                      ),
                    )
                ));
            }
        }



		// Render the element on front-end

        public function kd_particles_shrt($atts, $content = null)
        {
            // Include required JS files
            wp_enqueue_script('particles');

            extract(shortcode_atts(array(
                'part_extra_class' => '',
            ), $atts));

            $particles_id = '';
            $particles_id .= 'particles-js-'.uniqid();
            $output = '<div class="particles-wrapper"><div id="'.$particles_id.'"></div></div>';

            return $output;

        }
    }
}

if (class_exists('KD_ELEM_PARTICLES')) {
    $KD_ELEM_PARTICLES = new KD_ELEM_PARTICLES;
}

?>
