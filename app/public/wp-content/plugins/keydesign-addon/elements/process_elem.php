<?php
if (class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_tek_process extends WPBakeryShortCodesContainer {
    }
}
if (class_exists('WPBakeryShortCode')) {
    class WPBakeryShortCode_tek_process_single extends WPBakeryShortCode {
    }
}
if (!class_exists('tek_process')) {
    class tek_process extends KEYDESIGN_ADDON_CLASS
    {
        function __construct() {
            add_action('init', array($this, 'kd_process_init'));
            add_shortcode('tek_process', array($this, 'kd_process_container'));
            add_shortcode('tek_process_single', array($this, 'kd_process_single'));
        }
        // Element configuration in admin
        function kd_process_init() {
            // Container element configuration
            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Process steps", "keydesign"),
                    "description" => esc_html__("Process builder with 3 to 5 steps.", "keydesign"),
                    "base" => "tek_process",
                    "class" => "",
                    "show_settings_on_create" => true,
                    "content_element" => true,
                    "as_parent" => array('only' => 'tek_process_single'),
                    "icon" => plugins_url('assets/element_icons/process-steps.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "js_view" => 'VcColumnView',
                    "params" => array(
                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Template style","keydesign"),
                            "param_name"	=>	"ps_template_style",
                            "value"			=>	array(
                                esc_html__( 'Process flowchart', 'keydesign' ) => "process-checkbox-template",
                                esc_html__( 'Process boxes', 'keydesign' ) => "process-number-template",
                            ),
                            "save_always" => true,
                        ),
                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Number of elements","keydesign"),
                            "param_name"	=>	"ps_elements",
                            "value"			=>	array(
                                "Three elements" => "process_three_elem",
                                "Four elements" => "process_four_elem",
                                "Five elements" => "process_five_elem"
                            ),
                            "save_always" => true,
                            "description" => esc_html__("Select number of elements in this process.", "keydesign")
                        ),
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Extra class name", "keydesign"),
                            "param_name" => "ps_extra_class",
                            "value" => "",
                            "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign")
                        ),
                    )
                ));
                // Shortcode configuration
                vc_map(array(
                    "name" => esc_html__("Single process step", "keydesign"),
                    "base" => "tek_process_single",
                    "content_element" => true,
                    "as_child" => array('only' => 'tek_process'),
                    "icon" => plugins_url('assets/element_icons/child-tabs.png', dirname(__FILE__)),
                    "params" => array(
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Title", "keydesign"),
                            "param_name" => "pss_title",
                            "admin_label" => true,
                            "value" => "",
                            "description" => esc_html__("Enter step title.", "keydesign")
                        ),
                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Title color", "keydesign"),
                            "param_name" => "pss_title_color",
                            "value" => "",
                            "description" => esc_html__("Choose title color. If none selected, the default theme color will be used.", "keydesign"),
                        ),
                        array(
                            "type" => "textarea",
                            "class" => "",
                            "heading" => esc_html__("Description", "keydesign"),
                            "param_name" => "pss_description",
                            "value" => "",
                            "description" => esc_html__("Enter step description.", "keydesign")
                        ),
                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Description color", "keydesign"),
                            "param_name" => "pss_description_color",
                            "value" => "",
                            "description" => esc_html__("Choose description color. If none selected, the default theme color will be used.", "keydesign"),
                        ),
                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Display step number","keydesign"),
                            "param_name"	=>	"pss_display_number",
                            "value"			=>	array(
                                esc_html__( 'Yes', 'keydesign' ) => "process_number_on",
                                esc_html__( 'No', 'keydesign' ) => "process_number_off",
                            ),
                            "save_always" => true,
                        ),
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Step number", "keydesign"),
                            "param_name" => "pss_number",
                            "value" => "",
                            "dependency" =>	array(
                                "element" => "pss_display_number",
                                "value" => array("process_number_on")
                            ),
                            "description" => esc_html__("Enter the step number.", "keydesign")
                        ),
                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Step number color", "keydesign"),
                            "param_name" => "pss_number_color",
                            "value" => "",
                            "dependency" =>	array(
                                "element" => "pss_display_number",
                                "value" => array("process_number_on")
                            ),
                            "description" => esc_html__("Select step number color.", "keydesign"),
                        ),
                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Display icon","keydesign"),
                            "param_name"	=>	"pss_icon_type",
                            "value"			=>	array(
                                "No icon" => "no_icon",
                                "Icon browser" => "icon_browser",
                                "Custom image" => "custom_image",
                            ),
                            "save_always" => true,
                            "description" => esc_html__("Select icon source.", "keydesign")
                        ),
                        array(
              							"type" => "iconpicker",
              							"heading" => esc_html__( "Icon", "keydesign" ),
              							"param_name" => "icon_iconsmind",
                            "settings" => array(
                        				"type" => "iconsmind",
                        				"iconsPerPage" => 50,
                        		),
              							"dependency" => array(
              								"element" => "pss_icon_type",
              								"value" => "icon_browser",
              							),
              							"description" => esc_html__( "Select icon from library.", "keydesign" ),
            						),
                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Icon color", "keydesign"),
                            "param_name" => "pss_icon_color",
                            "value" => "",
                            "dependency" =>	array(
                                "element" => "pss_icon_type",
                                "value" => array("icon_browser")
                            ),
                            "description" => esc_html__("Choose icon color. If none selected, the default theme color will be used.", "keydesign"),
                        ),
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Icon size", "keydesign"),
                            "param_name" => "pss_icon_size",
                            "value" => "",
                            "dependency" =>	array(
                                "element" => "pss_icon_type",
                                "value" => array("icon_browser")
                            ),
                            "description" => esc_html__("Enter icon size. (eg. 10px, 1em, 1rem)", "keydesign"),
                        ),
                        array(
                            "type" => "attach_image",
                            "class" => "",
                            "heading" => esc_html__("Upload image", "keydesign"),
                            "param_name" => "pss_image",
                            "value" => "",
                            "description" => esc_html__("Upload your own custom image.", "keydesign"),
                            "dependency" => array(
                                "element" => "pss_icon_type",
                                "value" => array("custom_image"),
                            ),
                        ),
                        array(
              							"type" => "dropdown",
              							"class" => "",
              							"heading" => esc_html__("Box background type", "keydesign"),
              							"param_name" =>	"pss_background_type",
              							"value" =>	array(
              								esc_html__( 'Default', 'keydesign' ) => 'default_bg_color',
              								esc_html__( 'Custom color', 'keydesign' )	=> 'custom_bg_color',
              							),
              							"save_always" => true,
              							"description" => esc_html__("Select box background type.", "keydesign"),
            						),
                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Background color", "keydesign"),
                            "param_name" => "pss_background_color",
                            "value" => "",
                            "dependency" =>	array(
                								"element" => "pss_background_type",
                								"value" => array( "custom_bg_color" ),
      							        ),
                            "description" => esc_html__("Select box background color.", "keydesign"),
                        ),
                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Border color", "keydesign"),
                            "param_name" => "pss_border_color",
                            "value" => "",
                            "description" => esc_html__("Choose box border color.", "keydesign"),
                        ),
                        array(
                             "type"	=>	"dropdown",
                             "class" =>	"",
                             "heading" => esc_html__("Link type", "keydesign"),
                             "param_name" => "pss_custom_link",
                             "value" =>	array(
                                  esc_html__( 'No link', 'keydesign' ) => '#',
                                  esc_html__( 'Button link', 'keydesign' )	=> '1',
                              ),
                             "save_always" => true,
                             "description" => esc_html__("You can add/remove custom link", "keydesign"),
                        ),
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Button text", "keydesign"),
                            "param_name" => "pss_link_text",
                            "value" => "",
                            "description" => esc_html__("Enter button text here.", "keydesign"),
                            "dependency" => array(
                               "element" => "pss_custom_link",
                               "value"	=> array( "1" ),
                           ),
                        ),
                        array(
                             "type"	=>	"vc_link",
                             "class" =>	"",
                             "heading" => esc_html__("Link settings", "keydesign"),
                             "param_name" => "pss_link",
                             "value" =>	"",
                             "description" => esc_html__("You can add or remove the existing link from here.", "keydesign"),
                             "dependency" => array(
                                "element" => "pss_custom_link",
                                "value"	=> array( "1" ),
                            ),
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Button style", "keydesign"),
                            "param_name" => "pss_button_style",
                            "value" => array(
                                "Solid color" => "",
                                "Outline" => "tt_secondary_button",
                            ),
                            "dependency" => array(
                               "element" => "pss_custom_link",
                               "value"	=> array( "1" ),
                            ),
                            "description" => esc_html__("Select button style.", "keydesign")
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Button color scheme", "keydesign"),
                            "param_name" => "pss_button_color_scheme",
                            "value" => array(
                              "Primary color" => "btn_primary_color",
                              "Secondary color" => "btn_secondary_color",
                            ),
                            "dependency" => array(
                               "element" => "pss_custom_link",
                               "value"	=> array( "1" ),
                            ),
                            "description" => esc_html__("Select button predefined color scheme.", "keydesign")
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("CSS Animation", "keydesign"),
                            "param_name" => "css_animation",
                            "value" => array(
                                "No"              => "no_animation",
                                "Fade In"         => "kd-animated fadeIn",
                                "Fade In Down"    => "kd-animated fadeInDown",
                                "Fade In Left"    => "kd-animated fadeInLeft",
                                "Fade In Right"   => "kd-animated fadeInRight",
                                "Fade In Up"      => "kd-animated fadeInUp",
                                "Zoom In"         => "kd-animated zoomIn",
                            ),
                            "description" => esc_html__("Select type of animation for element to be animated when it enters the browsers viewport (Note: works only in modern browsers).", "keydesign"),
                         ),
                         array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Animation Delay:", "keydesign"),
                            "param_name" => "elem_animation_delay",
                            "value" => array(
                                "0 ms"              => "",
                                "200 ms"            => "200",
                                "400 ms"            => "400",
                                "600 ms"            => "600",
                                "800 ms"            => "800",
                                "1 s"               => "1000",
                            ),
                            "dependency" =>	array(
                                "element" => "css_animation",
                                "value" => array("kd-animated fadeIn", "kd-animated fadeInDown", "kd-animated fadeInLeft", "kd-animated fadeInRight", "kd-animated fadeInUp", "kd-animated zoomIn")
                            ),
                            "description" => esc_html__("Enter animation delay in ms", "keydesign")
                        ),
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Extra class name", "keydesign"),
                            "param_name" => "pss_extra_class",
                            "value" => "",
                            "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign")
                        ),
                    )
                ));
            }
        }

        public function kd_process_container($atts, $content = null) {
            extract(shortcode_atts(array(
              'ps_template_style' => '',
              'ps_elements' => '',
              'ps_extra_class' => ''
            ), $atts));

            $output = '
            <div class="kd-process-steps '.$ps_elements.' '.$ps_template_style.' '.$ps_extra_class.'">
                <ul>'.do_shortcode($content).'</ul>
            </div>';
            return $output;
        }

        public function kd_process_single($atts, $content = null) {
            extract(shortcode_atts(array(
                'pss_title' => '',
                'pss_title_color' => '',
                'pss_description' => '',
                'pss_description_color' => '',
                'pss_display_number' => '',
                'pss_number' => '',
                'pss_number_color' => '',
                'pss_icon_type' => '',
                'icon_iconsmind' => '',
                'pss_icon_color' => '',
                'pss_icon_size' => '',
                'pss_image' => '',
                'pss_background_type' => '',
                'pss_background_color' => '',
                'pss_border_color' => '',
                'pss_custom_link' => '',
                'pss_link_text' => '',
                'pss_link' => '',
                'pss_button_style' => '',
                'pss_button_color_scheme' => '',
                'css_animation' => '',
                'elem_animation_delay' => '',
                'pss_extra_class' => '',
            ), $atts));

            $content_icon = $icon_color_style = $icon_size_style = $link_title = $link_target = $pss_icon = $pss_custom_style = $animation_delay = '';

            if( $pss_icon_type == 'icon_browser' ) {
              wp_enqueue_style( 'kd_iconsmind' );
            }

            if (strlen($icon_iconsmind) > 0) {
                $pss_icon = $icon_iconsmind;
            }

            if ($pss_icon_color !== '') {
              $icon_color_style = 'color: '.$pss_icon_color.';';
            }

            if ($pss_icon_size !== '') {
              $icon_size_style = 'font-size: '.$pss_icon_size.';';
            }

            $href = vc_build_link($pss_link);
            if ($href['target'] == "") { $href['target'] = "_self"; }

      			if($href['url'] !== '') {
      				$link_target = (isset($href['target'])) ? ' target="'.$href['target'].'"' : 'target="_self"';
      				$link_title = (isset($href['title'])) ? ' title="'.$href['title'].'"' : '';
      			}

            if( $pss_icon_type == 'icon_browser' && !empty($pss_icon) ) {
      				$content_icon = '<div class="process-icon"><i class="'.$pss_icon .' fa" style="'.$icon_size_style.' '.$icon_color_style.'"></i></div>';
      			}
      			elseif($pss_icon_type == 'custom_image' && !empty($pss_image)){
      				$ps_img_array = wpb_getImageBySize ( $params = array( 'post_id' => NULL, 'attach_id' => $pss_image, 'thumb_size' => 'full', 'class' => "" ) );
      				$content_icon = '<div class="process-customimg">'.$ps_img_array['thumbnail'].'</div>';
      			}

            // Box custom styles
            if(($pss_background_type != 'default_bg_color') && ($pss_background_color != '')) {
              $pss_custom_style .= 'background-color: ' . $pss_background_color . ';';
            }

            if($pss_border_color != '') {
              $pss_custom_style .= 'border-color: ' . $pss_border_color . ';';
            }

            //CSS Animation
            if ($css_animation == "no_animation") {
                $css_animation = "";
            }

            // Animation delay
            if ($elem_animation_delay) {
                $animation_delay = 'data-animation-delay='.$elem_animation_delay;
            }

            $output = '
                <li class="pss-item" '.(!empty($pss_custom_style) ? 'style="' . $pss_custom_style . '"' : '').'>
                    <div class="pss-container '.$css_animation.' '.$pss_extra_class.'" '.$animation_delay.'>';
                    if($pss_display_number == "process_number_on") {
                      $output .= '<div class="pss-step-number"><span '.(!empty($pss_number_color) ? 'style="color: '.$pss_number_color.';"' : '').'>'.$pss_number.'</span></div>';
                    }
                    if($pss_icon_type != 'no_icon') {
                        $output .= '<div class="pss-img-area">'.$content_icon.'</div>';
                    }
                        $output .= '<div class="pss-text-area">
                            <h4 '.(!empty($pss_title_color) ? 'style="color: '.$pss_title_color.';"' : '').'>'.$pss_title.'</h4>
                            <p '.(!empty($pss_description_color) ? 'style="color: '.$pss_description_color.';"' : '').'>'.$pss_description.'</p>';
                            if($pss_custom_link == "1") {
                              $output .= '<a class="tt_button '.$pss_button_style.' '.$pss_button_color_scheme.'" href="'.$href['url'].'"'.$link_target.''.$link_title.'>'.$pss_link_text.'</a>';
                            }
                        $output .= '</div>
                    </div>
                </li>';
            return $output;
        }
    }
}
if (class_exists('tek_process')) {
    $tek_process = new tek_process;
}
?>
