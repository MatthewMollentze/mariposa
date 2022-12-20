<?php

if (!class_exists('KD_ELEM_PROGRESSBAR')) {

    class KD_ELEM_PROGRESSBAR extends KEYDESIGN_ADDON_CLASS {

        function __construct() {
            add_action('init', array($this, 'kd_progressbar_init'));
            add_shortcode('tek_progress_bar', array($this, 'kd_progressbar_shrt'));
        }

        // Element configuration in admin

        function kd_progressbar_init() {

            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Progress bar", "keydesign"),
                    "description" => esc_html__("Animated progress bar with counter.", "keydesign"),
                    "base" => "tek_progress_bar",
                    "class" => "",
                    "icon" => plugins_url('assets/element_icons/progress-bar.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "params" => array(
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Bar heading","keydesign"),
                            "param_name" => "pb_heading",
                            "value" => array(
                                    "Static text"   => "static_text",
                                    "Counter"       => "counter"
                                ),
                            "save_always" => true,
                            "description" => esc_html__("Select your progress bar heading.", "keydesign")
                        ),

                        array(
                           "type" => "textfield",
                           "class" => "",
                           "heading" => esc_html__("Title", 'keydesign'),
                           "param_name" => "pb_title",
                           "value" => "",
                           "admin_label" => true,
                           "description" => esc_html__("Enter progress bar title.", "keydesign"),
                           "dependency" => array(
                               "element" => "pb_heading",
                               "value" => array("static_text"),
                           ),
                       ),

                       array(
                           "type"			=>	"dropdown",
                           "class"			=>	"",
                           "heading"		=>	esc_html__("Display icon","keydesign"),
                           "param_name"	=>	"pb_icon_type",
                           "value"			=>	array(
                                    "No icon" => "no_icon",
                                    "Icon Browser" => "icon_browser",
                                    "Custom Icon" => "custom_icon",
                               ),
                           "save_always" => true,
                           "description" => esc_html__("Icon will be displayed in front of title.", "keydesign"),
                           "dependency" => array(
                               "element" => "pb_heading",
                               "value" => array("static_text"),
                           ),
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
                            "element" => "pb_icon_type",
                            "value" => "icon_browser",
                          ),
                          "description" => esc_html__( "Select icon from library.", "keydesign" ),
                      ),

                       array(
                           "type" => "colorpicker",
                           "class" => "",
                           "heading" => esc_html__("Icon color", "keydesign"),
                           "param_name" => "pb_icon_color",
                           "value" => "",
                           "dependency" =>	array(
                               "element" => "pb_icon_type",
                               "value" => array("icon_browser")
                           ),
                           "description" => esc_html__("Choose icon color. If none selected, the default theme color will be used.", "keydesign"),
                       ),

                       array(
                           "type" => "textfield",
                           "class" => "",
                           "heading" => esc_html__("Icon size", "keydesign"),
                           "param_name" => "pb_icon_size",
                           "value" => "",
                           "dependency" =>	array(
                               "element" => "pb_icon_type",
                               "value" => array("icon_browser")
                           ),
                           "description" => esc_html__("Enter icon size. (eg. 10px, 1em, 1rem)", "keydesign"),
                       ),

                       array(
                           "type" => "attach_image",
                           "class" => "",
                           "heading" => esc_html__("Upload image icon", "keydesign"),
                           "param_name" => "pb_icon_img",
                           "value" => "",
                           "dependency" => array(
                               "element" => "pb_icon_type",
                               "value" => array("custom_icon"),
                           ),
                           "description" => esc_html__("Upload your own custom image.", "keydesign"),
                       ),

                       array(
                           "type" => "dropdown",
                           "class" => "",
                           "heading" => esc_html__("Show value marker", "keydesign"),
                           "param_name"	=> "pb_progress_marker",
                           "value" => array(
                                   "No" => "marker_no",
                                   "Yes" => "marker_yes",
                               ),
                           "save_always" => true,
                           "dependency" => array(
                               "element" => "pb_heading",
                               "value" => array("static_text"),
                           ),
                           "description" => esc_html__("Value marker for your progress bar.", "keydesign")
                       ),

                       array(
                           "type" => "textfield",
                           "class" => "",
                           "heading" =>	esc_html__("Progress bar value", "keydesign"),
                           "param_name"	=>	"pb_progressbar_value",
                           "value" => "",
                           "description" => esc_html__("Progress bar filling value %. Only 1-100 values accepted.", "keydesign"),
                           "save_always" => true,
                       ),

                       array(
                           "type"  => "textfield",
                           "class" => "",
                           "heading" => esc_html__("Progress bar filling time", "keydesign"),
                           "param_name" => "pb_progressbar_filltime",
                           "value" => "",
                           "description" => esc_html__("Filling duration measured in seconds.", "keydesign"),
                           "save_always" => true,
                       ),

                       array(
                           "type" => "textarea",
                           "class" => "",
                           "heading" => esc_html__("Description", "keydesign"),
                           "param_name" => "pb_description",
                           "value" => "",
                           "description" => esc_html__("Displayed under the progress bar.", "keydesign")
                       ),

                       array(
                           "type"			=>	"dropdown",
                           "class"			=>	"",
                           "heading"		=>	esc_html__("Bar line thickness","keydesign"),
                           "param_name"	=>	"pb_thickness",
                           "value"			=>	array(
                                   "Thin line" => "thin-solid",
                                   "Medium line" => "medium-solid",
                                   "Thick line" => "thick-solid"
                               ),
                           "save_always" => true,
                           "description"	=>	esc_html__("Select bar thickness.", "keydesign")
                       ),

                       array(
                           "type" => "colorpicker",
                           "class" => "",
                           "heading" => esc_html__("Element color", "keydesign"),
                           "param_name" => "pb_main_color",
                           "value" => "",
                           "description" => esc_html__("Overwrite default title and active progress bar color.", "keydesign")
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
                           "param_name" => "pb_extra_class",
                           "value" => "",
                           "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign")
                       ),

                    )
                ));
            }
        }



		// Render the element on front-end

        public function kd_progressbar_shrt($atts, $content = null)
        {

            // Include required JS files
        		wp_enqueue_script('kd_jquery_appear');
        		wp_enqueue_script('kd_progressbar');

            // Declare empty vars
            $output = $content_icon = $icon_color_style = $icon_size_style = $counter_id = $pb_icon_font = $css_class = $animation_delay = '';

            extract(shortcode_atts(array(
                'pb_heading'		                  => '',
                'pb_title'		                    => '',
                'pb_icon_type'		                => '',
                'icon_iconsmind'                  => '',
                'pb_icon_color' 			            => '',
                'pb_icon_size' 			              => '',
                'pb_icon_img'		                  => '',
                'pb_progress_marker'		          => '',
                'pb_progressbar_value'		        => '',
                'pb_progressbar_filltime'		      => '',
                'pb_description'		              => '',
                'pb_thickness'		                => '',
                'pb_main_color'		                => '',
                'css_animation'                   => '',
                'elem_animation_delay'            => '',
                'pb_extra_class'                  => '',
            ), $atts));

            $counter_id .= 'kd-counter-'.uniqid();
            if($pb_heading == 'counter') {
                wp_enqueue_script('kd_countto');

                $js = '<script type="text/javascript">
    						jQuery(document).ready(function() {
    							jQuery(function($) {

    								$(".'.$counter_id.'").appear(function() {
    									$(this).countTo();
    								});
    							});
    						});
    					</script>';

    			       $output .= $js;
            }

            if( $pb_icon_type == 'icon_browser' ) {
              // Enqueue needed icon font.
              wp_enqueue_style( 'kd_iconsmind' );

              if (strlen($icon_iconsmind) > 0) {
                  $pb_icon_font = $icon_iconsmind;
              }

              if ($pb_icon_color !== '') {
                $icon_color_style = 'color: '.$pb_icon_color.';';
              }

              if ($pb_icon_size !== '') {
                $icon_size_style = 'font-size: '.$pb_icon_size.';';
              }
            }

            if( $pb_icon_type == 'icon_browser' && !empty($pb_icon_font) ) {
		            $content_icon = '<div class="kd-progress-icon"><i class="'.$pb_icon_font .' fa" style="'.$icon_size_style.' '.$icon_color_style.'"></i></div>';
            }
      			elseif($pb_icon_type == 'custom_icon' && !empty($pb_icon_img)){
        				$kd_progress_img_array = wpb_getImageBySize ( $params = array( 'post_id' => NULL, 'attach_id' => $pb_icon_img, 'thumb_size' => 'full', 'class' => "" ) );
        				$content_icon = '<div class="kd-progress-customimg">'.$kd_progress_img_array['thumbnail'].'</div>';
      			}

            // Fill time default
            if (empty($pb_progressbar_filltime)) {
              $pb_progressbar_filltime = '2';
            }

            //CSS Animation
            if ($css_animation == "no_animation") {
                $css_animation = "";
            }

            // Animation delay
            if ($elem_animation_delay) {
                $animation_delay = 'data-animation-delay='.$elem_animation_delay;
            }

            $output .= '<div class="kd_progress_bar '.$css_animation.' '.esc_attr( $pb_extra_class ).'" '.$animation_delay.'>';
                $output .= '<div class="kd_progb_head">';
                    if($pb_heading == 'static_text') {
                        $output .= '<div class="kd-progb-static">';
            				$output .= $content_icon;
            				$output .= '<div class="kd-progb-title"><h4 '.(!empty($pb_main_color) ? 'style="color: '.$pb_main_color.';"' : '').'>'.$pb_title.'</h4></div>';
                    if($pb_progress_marker !== 'marker_no' && $pb_heading == 'static_text') {
          						$output .= '<span class="kd_progressbarmarker" '.(!empty($pb_main_color) ? 'style="color: '.$pb_main_color.';"' : '').'>'.$pb_progressbar_value.'%</span>';
          					}
            			$output .= '</div>';
                    } elseif ($pb_heading == 'counter') {
                        $output .= '<div class="kd-progb-counter">';
                            $output .= '<span class="pb_counter_number '.$counter_id.'" '.(!empty($pb_main_color) ? 'style="color: '.$pb_main_color.';"' : '').' data-from="0" data-to="'.$pb_progressbar_value.'" data-speed="'.($pb_progressbar_filltime*1000).'" data-refresh-interval="50">0</span> <span class="pb_counter_units" '.(!empty($pb_main_color) ? 'style="color: '.$pb_main_color.';"' : '').'>%</span>';
                        $output .= '</div>';
                    }
                $output .= '</div>';
                $output .= '<div class="kd_progressbarfull '.$pb_thickness.'">
                  <div class="kd_progressbarfill" '.(!empty($pb_main_color) ? 'style="background-color: '.$pb_main_color.';"' : '').' data-value="'.$pb_progressbar_value.'" data-time="'.($pb_progressbar_filltime*1000).'">
                </div>';
                $output .= '</div>';
                if ( '' != $pb_description ) {
                  $output .= '<div class="kd_progb_desc">'.$pb_description.'</div>';
                }
        	$output .= '</div>';

            return $output;

        }
    }
}

if (class_exists('KD_ELEM_PROGRESSBAR')) {
    $KD_ELEM_PROGRESSBAR = new KD_ELEM_PROGRESSBAR;
}

?>
