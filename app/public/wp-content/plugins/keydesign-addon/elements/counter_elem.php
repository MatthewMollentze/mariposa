<?php

if (!class_exists('KD_ELEM_COUNTER')) {

    class KD_ELEM_COUNTER extends KEYDESIGN_ADDON_CLASS {

        function __construct() {
            add_action('init', array($this, 'kd_counter_init'));
            add_shortcode('tek_counter', array($this, 'kd_counter_shrt'));
        }

        // Element configuration in admin

        function kd_counter_init() {

            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Counter", "keydesign"),
                    "description" => esc_html__("Animated counter.", "keydesign"),
                    "base" => "tek_counter",
                    "class" => "",
                    "icon" => plugins_url('assets/element_icons/counter.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "params" => array(

                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Display icon","keydesign"),
                            "param_name"	=>	"count_icon_type",
                            "value"			=>	array(
                                    "No" => "no_icon",
                                    "Icon Browser" => "icon_browser",
                                    "Custom Icon" => "custom_icon",
                                ),
                            "save_always" => true,
                            "description"	=>	esc_html__("Select icon source.", "keydesign")
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
              								"element" => "count_icon_type",
              								"value" => "icon_browser",
              							),
              							"description" => esc_html__( "Select icon from library.", "keydesign" ),
            						),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Icon color", "keydesign"),
                            "param_name" => "count_icon_color",
                            "value" => "",
                            "dependency" =>	array(
                                "element" => "count_icon_type",
                                "value" => array("icon_browser")
                            ),
                            "description" => esc_html__("Choose icon color. If none selected, the default theme color will be used.", "keydesign"),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Icon size", "keydesign"),
                            "param_name" => "count_icon_size",
                            "value" => "",
                            "dependency" =>	array(
                              "element" => "count_icon_type",
                              "value" => array("icon_browser")
                            ),
                            "description" => esc_html__("Enter icon size. (eg. 10px, 1em, 1rem)", "keydesign"),
                        ),

                        array(
                            "type" => "attach_image",
                            "class" => "",
                            "heading" => esc_html__("Upload image icon", "keydesign"),
                            "param_name" => "count_image",
                            "value" => "",
                            "description" => esc_html__("Upload your own custom image.", "keydesign"),
                            "dependency" => array(
                                "element" => "count_icon_type",
                                "value" => array("custom_icon"),
                            ),
                        ),

                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Icon position","keydesign"),
                            "param_name"	=>	"count_icon_position",
                            "value"			=>	array(
                                    "Top" => "icon_top",
                                    "Left" => "icon_left",
                                ),
                            "save_always" => true,
                            "dependency" => array(
                                "element" => "count_icon_type",
                                "value" => array("icon_browser", "custom_icon"),
                            ),
                            "description"	=>	esc_html__("Select icon position relative to the content.", "keydesign"),
                        ),

                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Counter Size", "keydesign"),
                            "param_name"	=>	"count_size",
                            "value"			=>	array(
                                    "Normal" => "normal-counter",
                                    "Large" => "large-counter",
                                ),
                            "description"	=>	esc_html__("Select counter size","keydesign"),
                            "save_always" 	=>	true,
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Counter number", "keydesign"),
                            "param_name" => "count_number",
                            "value" => "",
                            "admin_label" => true,
                            "description" => esc_html__("Only numerical values allowed.", "keydesign")
                        ),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Counter number color", "keydesign"),
                            "param_name" => "count_number_color",
                            "value" => "",
                            "description" => esc_html__("Choose counter number color. If none selected, the default theme color will be used.", "keydesign"),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Counter units", "keydesign"),
                            "param_name" => "count_units",
                            "value" => "",
                            "admin_label" => true,
                            "description" => esc_html__("Ex: coffee drinks, projects, clients.", "keydesign")
                        ),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Counter units color", "keydesign"),
                            "param_name" => "count_units_color",
                            "value" => "",
                            "description" => esc_html__("Choose counter units color. If none selected, the default theme color will be used.", "keydesign"),
                        ),

                        array(
                            "type" => "textarea",
                            "class" => "",
                            "heading" => esc_html__("Counter description", "keydesign"),
                            "param_name" => "count_description",
                            "value" => "",
                            "description" => esc_html__("This additional text will be displayed below the counter.", "keydesign")
                        ),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Counter description color", "keydesign"),
                            "param_name" => "count_description_color",
                            "value" => "",
                            "description" => esc_html__("Choose counter description color. If none selected, the default theme color will be used.", "keydesign"),
                        ),

                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Text alignment", "keydesign"),
                            "param_name" => "count_alignment",
                            "value" => array(
                                "Center" => "count_center",
                                "Left" => "count_left",
                            ),
                            "save_always" => true,
                            "description" => esc_html__("Select element alignment in container.", "keydesign"),
                         ),

                         array(
                             "type" => "dropdown",
                             "class" => "",
                             "heading" => esc_html__("Decimal formatting", "keydesign"),
                             "param_name" => "count_decimal_formatting",
                             "value" => array(
                                 "Enable" => "enable-format",
                                 "Disable" => "disable-format",
                             ),
                             "save_always" => true,
                             "description" => esc_html__("Enable to display numbers formatted with comma.", "keydesign"),
                          ),

                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("CSS Animation", "keydesign"),
                            "param_name" => "css_animation",
                            "value" => array(
                                "None"              => "no_animation",
                                "Fade In"         => "kd-animated fadeIn",
                                "Fade In Down"    => "kd-animated fadeInDown",
                                "Fade In Left"    => "kd-animated fadeInLeft",
                                "Fade In Right"   => "kd-animated fadeInRight",
                                "Fade In Up"      => "kd-animated fadeInUp",
                                "Zoom In"         => "kd-animated zoomIn",
                            ),
                            "save_always" => true,
                            "description" => esc_html__("Select type of animation for element to be animated when it enters the browsers viewport (Note: works only in modern browsers).", "keydesign"),
                            "group" => esc_html__( "Extras", "keydesign" ),
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
                            "save_always" => true,
                            "description" => esc_html__("Enter animation delay in ms", "keydesign"),
                            "group" => esc_html__( "Extras", "keydesign" ),
                        ),

                       array(
                           "type" => "textfield",
                           "class" => "",
                           "heading" => esc_html__("Extra class name", "keydesign"),
                           "param_name" => "count_extra_class",
                           "value" => "",
                           "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign"),
                           "group" => esc_html__( "Extras", "keydesign" ),
                       ),

                    )
                ));
            }
        }

	      // Render the element on front-end
        public function kd_counter_shrt($atts, $content = null) {

            // Declare empty vars
            $output = $content_icon = $counter_id = $kd_counter_img_array = $js = $icon_color_style = $icon_size_style = $icon_position_class = $data_format = $animation_delay = '';

            extract(shortcode_atts(array(
                'count_icon_type'                   => '',
                'icon_iconsmind' 			              => '',
                'count_icon_color'                  => '',
                'count_icon_size'                   => '',
                'count_image'                       => '',
                'count_icon_position'               => '',
                'count_size'          			        => '',
                'count_number'                      => '',
                'count_number_color'                => '',
                'count_units'                       => '',
                'count_units_color'                 => '',
                'count_description'                 => '',
                'count_description_color'           => '',
                'count_alignment'                   => '',
                'count_decimal_formatting'          => '',
                'css_animation'                     => '',
                'elem_animation_delay'              => '',
                'count_extra_class'                 => '',
            ), $atts));

            // Include required JS files
		        wp_enqueue_script('kd_countto');

            if( $count_icon_type == 'icon_browser' ) {
              // Enqueue needed icon font.
              // vc_icon_element_fonts_enqueue( $icon_library );
              wp_enqueue_style( 'kd_iconsmind' );
            }

            if (strlen($icon_iconsmind) > 0) {
                $count_icon = $icon_iconsmind;
            }

            if ($count_icon_color !== '') {
              $icon_color_style = 'color: '.$count_icon_color.';';
            }

            if ($count_icon_size !== '') {
              $icon_size_style = 'font-size: '.$count_icon_size.';';
            }

            // Icon position class
            if ( $count_icon_position == 'icon_top' ) {
                $icon_position_class = 'icon-top';
            } elseif ( $count_icon_position == 'icon_left' ) {
                $icon_position_class = 'icon-left';
            }

            if( $count_icon_type == 'icon_browser' && !empty($count_icon) ) {
      				$content_icon = '<div class="kd-counter-icon"><i class="'.$count_icon.'" style=" '.$icon_color_style.' '.$icon_size_style.'"></i></div>';
      			}	elseif($count_icon_type == 'custom_icon' && !empty($count_image)){
      				$kd_counter_img_array = wpb_getImageBySize ( $params = array( 'post_id' => NULL, 'attach_id' => $count_image, 'thumb_size' => 'full', 'class' => "" ) );
      				$content_icon = '<div class="kd-counter-customimg">'.$kd_counter_img_array['thumbnail'].'</div>';
    			  }

            // Decimal format
            if ( $count_decimal_formatting == "disable-format" ) {
              $data_format = 'data-format="disable"';
            }

            // CSS Animation
            if ($css_animation == "no_animation") {
                $css_animation = "";
            }

            // Animation delay
            if ($elem_animation_delay) {
                $animation_delay = 'data-animation-delay='.$elem_animation_delay;
            }

            switch($count_size){

      				case 'large-counter':
      					$output .= '<div class="kd_counter '.$icon_position_class.' '. $count_size . (!empty($count_extra_class) ? $count_extra_class : '').' '.$count_alignment.' '.$css_animation.'" '.$animation_delay.'>';
                  if(!empty($content_icon)) {
                    $output .= '<div class="kd_counter_icon">';
                    $output .= $content_icon;
                    $output .= '</div>';
                  }
      						$output .= '<div class="kd_counter_content">';
      							$output .= '<h4 class="kd_counter_number">';
      							$output .= '<span class="kd_number_string" '.(!empty($count_number_color) ? 'style="color: '.$count_number_color.';"' : '').' data-from="0" data-to="'.$count_number.'" data-refresh-interval="50" '.$data_format.'>0</span>
                                  <span class="kd_counter_units" '.(!empty($count_units_color) ? 'style="color: '.$count_units_color.';"' : '').'>'.$count_units.'</span>';
      							$output .= '</h4>';
      							$output .= '<div class="kd_counter_text" '.(!empty($count_description_color) ? 'style="color: '.$count_description_color.';"' : '').'>'.$count_description.'</div>';
      						$output .= '</div>';
      					$output .= '</div>';
      				break;

      				case 'normal-counter':
      					$output .= '<div class="kd_counter '.$icon_position_class.' '.(!empty($count_extra_class) ? $count_extra_class : '').' '.$count_alignment.' '.$css_animation.'" '.$animation_delay.'>';
      						$output .= '<div class="kd_counter_content">';
      								if(!empty($content_icon)) {
      								$output .= '<div class="kd_counter_icon">';
      								$output .= $content_icon;
      								$output .= '</div>';
      								}
      							$output .= '<h4 class="kd_counter_number">';
      							$output .= '<span class="kd_number_string" '.(!empty($count_number_color) ? 'style="color: '.$count_number_color.';"' : '').' data-from="0" data-to="'.$count_number.'" data-refresh-interval="50" '.$data_format.'>0</span>
                                  <span class="kd_counter_units" '.(!empty($count_units_color) ? 'style="color: '.$count_units_color.';"' : '').'>'.$count_units.'</span>';
      							$output .= '</h4>';
      							$output .= '<div class="kd_counter_text" '.(!empty($count_description_color) ? 'style="color: '.$count_description_color.';"' : '').'>'.$count_description.'</div>';
      						$output .= '</div>';
      					$output .= '</div>';
      				break;
	         }

            return $output;

        }
    }
}

if (class_exists('KD_ELEM_COUNTER')) {
    $KD_ELEM_COUNTER = new KD_ELEM_COUNTER;
}

?>
