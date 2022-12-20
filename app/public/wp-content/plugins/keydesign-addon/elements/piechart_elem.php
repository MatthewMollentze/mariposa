<?php

if (!class_exists('KD_ELEM_PIE_CHART')) {

    class KD_ELEM_PIE_CHART extends KEYDESIGN_ADDON_CLASS {

        function __construct() {
            add_action('init', array($this, 'kd_piechart_init'));
            add_shortcode('tek_piechart', array($this, 'kd_piechart_shrt'));
        }

        // Element configuration in admin

        function kd_piechart_init() {
            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Pie chart", "keydesign"),
                    "description" => esc_html__("Animated pie chart.", "keydesign"),
                    "base" => "tek_piechart",
                    "class" => "",
                    "icon" => plugins_url('assets/element_icons/pie-chart.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "params" => array(

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Title", "keydesign"),
                            "param_name" => "pc_title",
                            "value" => "",
                            "admin_label" => true,
                            "description" => esc_html__("Enter pie chart title here.", "keydesign")
                        ),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Title color", "keydesign"),
                            "param_name" => "pc_title_color",
                            "value" => "",
                            "description" => esc_html__("Choose title color. If none selected, the default theme color will be used.", "keydesign"),
                        ),

                        array(
                            "type" => "textarea",
                            "class" => "",
                            "heading" => esc_html__("Description", "keydesign"),
                            "param_name" => "pc_description",
                            "value" => "",
                            "description" => esc_html__("Enter pie chart description here.", "keydesign")
                        ),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Description color", "keydesign"),
                            "param_name" => "pc_description_color",
                            "value" => "",
                            "description" => esc_html__("Choose description color. If none selected, the default theme color will be used.", "keydesign"),
                        ),

                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Bar thickness","keydesign"),
                            "param_name"	=>	"pc_thickness",
                            "value"			=>	array(
                                    "Thin line"             => "thin_solid",
                                    "Medium line"           => "medium_solid",
                                    "Thick line"            => "thick_solid"
                                ),
                            "save_always" => true,
                            "description"	=>	esc_html__("Select pie chart bar width.", "keydesign")
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" =>	esc_html__("Percent", "keydesign"),
                            "param_name"	=>	"pc_value",
                            "value" => "",
                            "description" => esc_html__("Pie chart percent value %. Only 1-100 values accepted.", "keydesign"),
                            "save_always" => true,
                        ),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Filling bar color", "keydesign"),
                            "param_name" => "pc_main_color",
                            "value" => "",
                            "description" => esc_html__("Choose filling bar color. If none selected, the default theme color will be used.", "keydesign")
                        ),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Track color", "keydesign"),
                            "param_name" => "pc_track_color",
                            "value" => "",
                            "description" => esc_html__("Choose track color. If none selected, the default theme color will be used.", "keydesign"),
                        ),

                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Pie content","keydesign"),
                            "param_name"	=>	"pc_center_content",
                            "value"			=>	array(
                                    "No content"                => "no_content",
                                    "Percent value"             => "percent_value",
                                    "Icon"                      => "center_icon",
                                    "Image"                     => "center_image",
                                ),
                            "save_always" => true,
                            "description" => esc_html__("Select pie chart center content.", "keydesign")
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
              								"element" => "pc_center_content",
              								"value" => "center_icon",
              							),
              							"description" => esc_html__( "Select icon from library.", "keydesign" ),
            						),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Icon color", "keydesign"),
                            "param_name" => "pc_icon_color",
                            "value" => "",
                            "dependency" =>	array(
                                "element" => "pc_center_content",
                                "value" => "center_icon",
                            ),
                            "description" => esc_html__("Choose icon color. If none selected, the default theme color will be used.", "keydesign"),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Icon size", "keydesign"),
                            "param_name" => "pc_icon_size",
                            "value" => "",
                            "dependency" =>	array(
                                "element" => "pc_center_content",
                                "value" => "center_icon",
                            ),
                            "description" => esc_html__("Enter icon size. (eg. 10px, 1em, 1rem)", "keydesign"),
                        ),

                        array(
                            "type" => "attach_image",
                            "class" => "",
                            "heading" => esc_html__("Upload image icon", "keydesign"),
                            "param_name" => "pc_icon_img",
                            "value" => "",
                            "description" => esc_html__("Upload your own custom image.", "keydesign"),
                            "dependency" => array(
                                "element" => "pc_center_content",
                                "value" => array("center_image"),
                            ),
                        ),

                        array(
                             "type"	=>	"dropdown",
                             "class" =>	"",
                             "heading" => esc_html__("Link type", "keydesign"),
                             "param_name" => "pc_custom_link",
                             "value" =>	array(
                                    esc_html__( 'No link', 'keydesign' ) => '#',
                                    esc_html__( 'Add custom link', 'keydesign' )	=> '1',
                                ),
                             "save_always" => true,
                             "description" => esc_html__("You can add or remove the custom link.", "keydesign"),
                        ),
                        array(
                             "type"	=>	"vc_link",
                             "class" =>	"",
                             "heading" => esc_html__("Link settings", "keydesign"),
                             "param_name" => "pc_link",
                             "value" =>	"",
                             "description" => esc_html__("You can add or remove the existing link from here.", "keydesign"),
                             "dependency" => array(
                                "element" => "pc_custom_link",
                                "value"	=> array( "1" ),
                            ),
                        ),
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Link text", "keydesign"),
                            "param_name" => "pc_link_text",
                            "value" => "",
                            "description" => esc_html__("Enter link text here.", "keydesign"),
                            "dependency" => array(
                               "element" => "pc_custom_link",
                               "value"	=> array( "1" ),
                           ),
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
                            "description" => esc_html__("Enter animation delay in ms", "keydesign")
                        ),
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Extra class name", "keydesign"),
                            "param_name" => "pc_extra_class",
                            "value" => "",
                            "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign")
                        ),

                    )
                ));
            }
        }



		// Render the element on front-end

        public function kd_piechart_shrt($atts, $content = null)
        {
            // Include required JS files
            wp_enqueue_script('kd_jquery_appear');
            wp_enqueue_script('kd_easing_script');
            wp_enqueue_script('kd_easypiechart_script');

            // Declare empty vars
            $output = $content_icon = $icon_color_style = $icon_size_style = $pc_icons = $kd_piechart_img_array = $pc_unique_id = $animation_delay = '';

            extract(shortcode_atts(array(
                'pc_title'                  => '',
                'pc_title_color'            => '',
                'pc_description'            => '',
                'pc_description_color'      => '',
                'pc_thickness'              => '',
                'pc_value'                  => '',
                'pc_main_color'             => '',
                'pc_track_color'            => '',
                'pc_center_content'         => '',
                'icon_iconsmind'            => '',
                'pc_icon_color' 			      => '',
                'pc_icon_size' 			        => '',
                'pc_icon_img'			          => '',
                'pc_custom_link'            => '',
                'pc_link'                   => '',
                'pc_link_text'              => '',
                'css_animation'             => '',
                'elem_animation_delay'      => '',
                'pc_extra_class'            => ''
            ), $atts));

            if( $pc_center_content == 'center_icon' ) {
                // Enqueue needed icon font.
                wp_enqueue_style( 'kd_iconsmind' );

                if (strlen($icon_iconsmind) > 0) {
                    $pc_icons = $icon_iconsmind;
                }
            }

            if ($pc_icon_color !== '') {
              $icon_color_style = 'color: '.$pc_icon_color.';';
            }

            if ($pc_icon_size !== '') {
              $icon_size_style = 'font-size: '.$pc_icon_size.';';
            }

            $bar_width = '2';
            if( $pc_thickness == 'thin_solid' ) { $bar_width = '2'; }
            if( $pc_thickness == 'medium_solid' ) { $bar_width = '4'; }
            if( $pc_thickness == 'thick_solid' ) { $bar_width = '7'; }

            if( $pc_center_content == 'center_icon' && !empty($pc_icons) ) {
      				$content_icon = '<i class="'.$pc_icons .' fa" style="'.$icon_size_style.' '.$icon_color_style.'"></i>';
      			}
      			elseif($pc_center_content == 'center_image' && !empty($pc_icon_img)){
      				$kd_piechart_img_array = wpb_getImageBySize ( $params = array( 'post_id' => NULL, 'attach_id' => $pc_icon_img, 'thumb_size' => 'full', 'class' => "" ) );
      				$content_icon = $kd_piechart_img_array['thumbnail'];
      			}

            $href = vc_build_link($pc_link);
            if ($href['target'] == "") { $href['target'] = "_self"; }

      			if($href['url'] !== '') {
      				$link_target = (isset($href['target'])) ? ' target="'.$href['target'].'"' : 'target="_self"';
      				$link_title = (isset($href['title'])) ? ' title="'.$href['title'].'"' : '';
      			}

            //CSS Animation
            if ($css_animation == "no_animation") {
                $css_animation = "";
            }

            // Animation delay
            if ($elem_animation_delay) {
                $animation_delay = 'data-animation-delay='.$elem_animation_delay;
            }

            $output .= '<div class="kd_pie_chart '.$css_animation.' '.$pc_extra_class.'" '.$animation_delay.'>';
              $output .='<span class="kd_chart" data-bar-color="'.$pc_main_color.'" '.(!empty($pc_track_color) ? 'data-track-color="'.$pc_track_color.'"' : '').' data-line-width="'.$bar_width.'" data-percent="'.$pc_value.'">';
      					  if($pc_center_content == 'percent_value') {
                    $output .='<span class="pc_percent_container" '.(!empty($pc_title_color) ? 'style="color: '.$pc_title_color.';"' : '').'><span class="pc_percent"></span>%</span>';
                  } elseif ($pc_center_content == 'center_icon') {
                    $output .= '<div class="kd-piechart-icon" '.(!empty($pc_title_color) ? 'style="color: '.$pc_title_color.';"' : '').'>';
                      $output .= $content_icon;
                    $output .= '</div>';
                  } elseif ($pc_center_content == 'center_image') {
                    $output .= '<div class="kd-piechart-customimg">';
                      $output .= $content_icon;
                    $output .= '</div>';
                  } elseif ($pc_center_content == 'no_content') {
                    $output .= '';
                  }
      				$output .='</span>';
      				if(!empty($pc_title)) { $output .= '<h4 class="kd_pc_title" '.(!empty($pc_title_color) ? 'style="color: '.$pc_title_color.';"' : '').'>'.esc_html__($pc_title).'</h4>'; }
      				if(!empty($pc_description)) { $output .= '<p class="kd_pc_desc" '.(!empty($pc_description_color) ? 'style="color: '.$pc_description_color.';"' : '').'>'.esc_html__($pc_description).'</p>'; }
              if ($pc_custom_link == "1") {
                $output .= '<p class="pc-link"><a href="'.$href['url'].'"'.$link_target.''.$link_title.'>'.$pc_link_text.'</a></p>';
              }
        	  $output .= '</div>';

            return $output;

        }
    }
}

if (class_exists('KD_ELEM_PIE_CHART')) {
    $KD_ELEM_PIE_CHART = new KD_ELEM_PIE_CHART;
}

?>
