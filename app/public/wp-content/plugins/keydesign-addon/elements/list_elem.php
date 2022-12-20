<?php
if (class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_tek_list extends WPBakeryShortCodesContainer {
    }
}
if (class_exists('WPBakeryShortCode')) {
    class WPBakeryShortCode_tek_list_single extends WPBakeryShortCode {
    }
}
if (!class_exists('tek_list')) {
    class tek_list extends KEYDESIGN_ADDON_CLASS
    {
        function __construct() {
            add_action('init', array($this, 'kd_list_init'));
            add_shortcode('tek_list', array($this, 'kd_list_container'));
            add_shortcode('tek_list_single', array($this, 'kd_list_single'));
        }
        // Element configuration in admin
        function kd_list_init() {
            // Container element configuration
            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("List", "keydesign"),
                    "description" => esc_html__("Display a list with custom icons.", "keydesign"),
                    "base" => "tek_list",
                    "class" => "",
                    "show_settings_on_create" => true,
                    "content_element" => true,
                    "as_parent" => array('only' => 'tek_list_single'),
                    "icon" => plugins_url('assets/element_icons/list-parent.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "js_view" => 'VcColumnView',
                    "params" => array(
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
                        ),

                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Animation delay", "keydesign"),
                            "param_name" => "list_animation_delay",
                            "value" => array(
                                "0 ms" => "",
                                "200 ms" => "200",
                                "400 ms" => "400",
                                "600 ms" => "600",
                                "800 ms" => "800",
                                "1 s" => "1000",
                            ),
                            "save_always" => true,
                            "admin_label" => true,
                            "dependency" =>	array(
                                "element" => "css_animation",
                                "value" => array("kd-animated fadeIn", "kd-animated fadeInDown", "kd-animated fadeInLeft", "kd-animated fadeInRight", "kd-animated fadeInUp", "kd-animated zoomIn")
                            ),
                            "description" => esc_html__("Enter animation delay in ms.", "keydesign"),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Extra class name", "keydesign"),
                            "param_name" => "list_extra_class",
                            "value" => "",
                            "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign"),
                        ),
                    )
                ));
                // Shortcode configuration
                vc_map(array(
                    "name" => __("List item", "keydesign"),
                    "base" => "tek_list_single",
                    "content_element" => true,
                    "as_child" => array('only' => 'tek_list'),
                    "icon" => plugins_url('assets/element_icons/list-child.png', dirname(__FILE__)),
                    "params" => array(
                      array(
                          "type" => "textarea_html",
                          "class" => "",
                          "heading" => esc_html__("List item content", "keydesign"),
                          "param_name" => "content",
                          "value" => "",
                          "description" => esc_html__("Enter list item text here.", "keydesign"),
                      ),
                      array(
                          "type" => "colorpicker",
                          "class" => "",
                          "heading" => esc_html__("Text color", "keydesign"),
                          "param_name" => "list_text_color",
                          "value" => "",
                          "description" => esc_html__("Select list text color. If none selected, the default theme color will be used.", "keydesign"),
                      ),
                      array(
                          "type"			=>	"dropdown",
                          "class"			=>	"",
                          "heading"		=>	esc_html__("Display icon","keydesign"),
                          "param_name"	=>	"list_icon_settings",
                          "value"			=>	array(
                                  "Icon browser" => "icon_browser",
                                  "No icon" => "no_icon",
                              ),
                          "save_always" => true,
                          "description"	=>	esc_html__("Select icon source.", "keydesign"),
                      ),

                      array(
                          "type" => "iconpicker",
                          "heading" => esc_html__( "Icon", "keydesign" ),
                          "param_name" => "list_icon",
                          "dependency" => array(
                            "element" => "list_icon_settings",
                            "value" => "icon_browser",
                          ),
                          "description" => esc_html__( "Select icon from library.", "keydesign" ),
                      ),

                      array(
                          "type" => "colorpicker",
                          "class" => "",
                          "heading" => esc_html__("Icon color", "keydesign"),
                          "param_name" => "list_icon_color",
                          "value" => "",
                          "dependency" =>	array(
                              "element" => "list_icon_settings",
                              "value" => array("icon_browser")
                          ),
                          "description" => esc_html__("Select icon color. If none selected, the default theme color will be used.", "keydesign"),
                      ),

                      array(
                          "type" => "dropdown",
                          "class" => "",
                          "heading" => esc_html__("Icon style", "keydesign"),
                          "param_name" => "list_icon_style",
                          "value" => array(
                              "Simple" => "icon-simple",
                              "Circle background" => "icon-circle",
                              "Square background" => "icon-square",
                          ),
                          "dependency" => array(
                              "element" => "list_icon_settings",
                              "value" => array("icon_browser"),
                          ),
                          "description" => esc_html__("Select image style.", "keydesign"),
                          "save_always" => true,
                      ),

                      array(
                          "type" => "colorpicker",
                          "class" => "",
                          "heading" => esc_html__("Icon background color", "keydesign"),
                          "param_name" => "list_icon_bg_color",
                          "value" => "",
                          "dependency" =>	array(
                              "element" => "list_icon_style",
                              "value" => array("icon-circle","icon-square")
                          ),
                          "description" => esc_html__("Select icon background color. If none selected, the default theme color will be used.", "keydesign"),
                      ),

                      array(
                          "type" => "textfield",
                          "class" => "",
                          "heading" => esc_html__("Extra class name", "keydesign"),
                          "param_name" => "list_child_extra_class",
                          "value" => "",
                          "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign"),
                      ),

                    )
                ));
            }
        }

        public function kd_list_container($atts, $content = null) {
            extract(shortcode_atts(array(
                'css_animation' => '',
                'list_animation_delay' => '',
                'list_extra_class' => '',
            ), $atts));

            $output = $wrapper_class = $animation_delay = '';

            // Animation delay
            if ('' != $list_animation_delay) {
                $animation_delay = 'data-animation-delay='.$list_animation_delay;
            }

            $wrapper_class = implode(' ', array('kd-icon-list', $css_animation, $list_extra_class));

            $output = '<ul class="'.trim($wrapper_class).'" '.$animation_delay.'>'.do_shortcode($content).'</ul>';

            return $output;
        }

        public function kd_list_single($atts, $content = null) {
            extract(shortcode_atts(array(
                'list_text_color' => '',
                'list_icon_settings' => '',
                'list_icon' => '',
                'list_icon_color' => '',
                'list_icon_style' => '',
                'list_icon_bg_color' => '',
                'list_child_extra_class' => '',
            ), $atts));

            $output = $main_icon = $wrapper_class = '';

            $wrapper_class = implode(' ', array('kd-icon-list-item', $list_child_extra_class));

	          $output = '<li class="'.trim($wrapper_class).'">';
            $main_icon .= '<i class="'.$list_icon.'" '.(!empty($list_icon_color) ? 'style="color: '.$list_icon_color.';"' : '').'></i>';
            if ( $list_icon_settings == 'icon_browser' ) {
              $output .= '<div class="kd-icon-wrapper '.$list_icon_style.'" '.(!empty($list_icon_bg_color) ? 'style="background-color: '.$list_icon_bg_color.';"' : '').'>'.$main_icon.'</div>';
            }
            $output .= '<span class="kd-list-text" '.(!empty($list_text_color) ? 'style="color: '.$list_text_color.';"' : '').'>'.do_shortcode($content).'</li>';

            return $output;
        }
    }
}
if (class_exists('tek_list')) {
    $tek_list = new tek_list;
}
?>
