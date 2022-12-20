<?php

if (!class_exists('KD_ELEM_PRICE_SWITCHER')) {

    class KD_ELEM_PRICE_SWITCHER extends KEYDESIGN_ADDON_CLASS {

        function __construct() {
            add_action('init', array($this, 'kd_priceswitcher_init'));
            add_shortcode('tek_priceswitcher', array($this, 'kd_priceswitcher_shrt'));
        }

        // Element configuration in admin
        function kd_priceswitcher_init() {
            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Price switcher", "keydesign"),
                    "description" => esc_html__("Display monthly and yearly options with the Pricing Table module.", "keydesign"),
                    "base" => "tek_priceswitcher",
                    "class" => "",
                    "icon" => plugins_url('assets/element_icons/price-switch.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "params" => array(
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Default variant name", "keydesign"),
                            "param_name" => "ps_default_variant",
                            "value" => "",
                            "description" => esc_html__("Enter the default switch variant name.", "keydesign"),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Secondary variant name", "keydesign"),
                            "param_name" => "ps_secondary_variant",
                            "value" => "",
                            "description" => esc_html__("Enter the secondary switch variant name.", "keydesign"),
                        ),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Variant text color", "keydesign"),
                            "param_name" => "ps_variant_color",
                            "value" => "",
                            "description" => esc_html__("Select variant text color. If none selected, the default theme color will be used.", "keydesign"),
                        ),

                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("CSS animation", "keydesign"),
                            "param_name" => "css_animation",
                            "value" => array(
                                "None" => "",
                                "Fade In" => "kd-animated fadeIn",
                                "Fade In Down" => "kd-animated fadeInDown",
                                "Fade In Left" => "kd-animated fadeInLeft",
                                "Fade In Right" => "kd-animated fadeInRight",
                                "Fade In Up" => "kd-animated fadeInUp",
                                "Zoom In" => "kd-animated zoomIn",
                            ),
                            "save_always" => true,
                            "admin_label" => true,
                            "description" => esc_html__("Select type of animation for element to be animated when it enters the browsers viewport (Note: works only in modern browsers).", "keydesign"),
                            "group" => esc_html__( "Extras", "keydesign" ),
                        ),

                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Animation delay", "keydesign"),
                            "param_name" => "ps_animation_delay",
                            "value" => array(
                                "0 ms" => "",
                                "200 ms" => "200",
                                "400 ms" => "400",
                                "600 ms" => "600",
                                "800 ms" => "800",
                                "1000 ms" => "1000",
                            ),
                            "save_always" => true,
                            "admin_label" => true,
                            "dependency" =>	array(
                                "element" => "css_animation",
                                "value" => array("kd-animated fadeIn", "kd-animated fadeInDown", "kd-animated fadeInLeft", "kd-animated fadeInRight", "kd-animated fadeInUp", "kd-animated zoomIn")
                            ),
                            "description" => esc_html__("Enter animation delay in ms.", "keydesign"),
                            "group" => esc_html__( "Extras", "keydesign" ),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Extra class name", "keydesign"),
                            "param_name" => "ps_extra_class",
                            "value" => "",
                            "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign"),
                            "group" => esc_html__( "Extras", "keydesign" ),
                        ),
                    )
                ));
            }
        }

	      // Render the element on front-end
        public function kd_priceswitcher_shrt($atts, $content = null) {
            extract(shortcode_atts(array(
                'ps_default_variant' => '',
                'ps_secondary_variant' => '',
                'ps_variant_color' => '',
                'css_animation' => '',
                'ps_animation_delay' => '',
                'ps_extra_class' => '',
            ), $atts));

            $output = $wrapper_class = $animation_delay = '';

            // Animation delay
            if ($ps_animation_delay) {
                $animation_delay = 'data-animation-delay='.$ps_animation_delay;
            }

            $wrapper_class = implode(' ', array('kd-ps-wrapper', $ps_extra_class, $css_animation));

            $output = '<div class="'.trim($wrapper_class).'" '.$animation_delay.'>
              <label class="kd-price-switch">
                <input type="checkbox">
                <span class="price-slider"></span>
              </label>
              <span class="ps-default-variant" '.(!empty($ps_variant_color) ? 'style="color: '.$ps_variant_color.';"' : '').'>'.esc_html( $ps_default_variant ).'</span>
              <span class="ps-secondary-variant" '.(!empty($ps_variant_color) ? 'style="color: '.$ps_variant_color.';"' : '').'>'.esc_html( $ps_secondary_variant ).'</span>
            </div>';

            return $output;

        }
    }
}

if (class_exists('KD_ELEM_PRICE_SWITCHER')) {
    $KD_ELEM_PRICE_SWITCHER = new KD_ELEM_PRICE_SWITCHER;
}
