<?php
if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
  class WPBakeryShortCode_tek_timeline extends WPBakeryShortCodesContainer {}
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
  class WPBakeryShortCode_tek_timeline_single extends WPBakeryShortCode {}
}
if ( !class_exists( 'tek_timeline' ) ) {
    class tek_timeline extends KEYDESIGN_ADDON_CLASS {
        function __construct() {
            add_action( 'init', array( $this, 'kd_timeline_init' ) );
            add_shortcode( 'tek_timeline', array( $this, 'kd_timeline_container' ) );
            add_shortcode( 'tek_timeline_single', array( $this, 'kd_timeline_single' ) );
        }
        // Element configuration in admin
        function kd_timeline_init() {
            // Container element configuration
            if ( function_exists( 'vc_map' ) ) {
                vc_map( array(
                    "name" => esc_html__( "Timeline", "keydesign" ),
                    "description" => esc_html__( "Showcase your story in chronological order.", "keydesign" ),
                    "base" => "tek_timeline",
                    "class" => "kd-outer-controls",
                    "show_settings_on_create" => true,
                    "content_element" => true,
                    "as_parent" => array('only' => 'tek_timeline_single'),
                    "icon" => plugins_url( 'assets/element_icons/timeline.png', dirname(__FILE__) ),
                    "category" => esc_html__( "KeyDesign Elements", "keydesign" ),
                    "js_view" => 'VcColumnView',
                    "params" => array(
						array(
							"type"	=>	"dropdown",
							"class" =>	"",
							"heading" => esc_html__("Card alignment", "keydesign"),
							"param_name" => "card_alignment",
							"value" =>	array(
								esc_html__( "Left", "keydesign" ) => "timeline-align-left",
								esc_html__( "Right", "keydesign" )	=> "timeline-align-right",
								esc_html__( "ZigZag", "keydesign" )	=> "timeline-align-zigzag",
							),
							"save_always" => true,
							"description" => esc_html__("Select cards alignment ", "keydesign"),
						),

						array(
							"type" => "colorpicker",
							"class" => "",
							"heading" => esc_html__("Global background color", "keydesign"),
							"param_name" => "global_background_color",
							"value" => "",
							"description" => esc_html__("Select a global color used for the card, point and line background.", "keydesign"),
						),

						array(
							"type" => "colorpicker",
							"class" => "",
							"heading" => esc_html__("Global text color", "keydesign"),
							"param_name" => "global_text_color",
							"value" => "",
							"description" => esc_html__("Select a global color used for the text and icon color.", "keydesign"),
						),

						array(
							"type" => "textfield",
							"class" => "",
							"heading" => esc_html__( "Extra class name", "keydesign" ),
							"param_name" => "extra_class",
							"value" => "",
							"description" => esc_html__( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign" ),
							"group" => esc_html__( "Extras", "keydesign" ),
						),
                    )
                ));
                // Shortcode configuration
                vc_map(array(
                    "name" => __( "Timeline card", "keydesign" ),
                    "base" => "tek_timeline_single",
                    "content_element" => true,
                    "as_child" => array('only' => 'tek_timeline'),
                    "icon" => plugins_url( 'assets/element_icons/timeline-child.png', dirname(__FILE__) ),
                    "params" => array(
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Date", "keydesign"),
                            "param_name" => "date",
                            "value" => "",
                            "description" => esc_html__("Enter card date here.", "keydesign"),
                            "group" => esc_html__( "Content", "keydesign" ),
                        ),

						array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Title", "keydesign"),
                            "param_name" => "title",
                            "value" => "",
                            "description" => esc_html__("Enter card title here.", "keydesign"),
                            "admin_label" => true,
                            "group" => esc_html__( "Content", "keydesign" ),
                        ),

						array(
                            "type" => "textarea",
                            "class" => "",
                            "heading" => esc_html__("Description", "keydesign"),
                            "param_name" => "description",
                            "value" => "",
                            "description" => esc_html__("Enter card description here.", "keydesign"),
                            "group" => esc_html__( "Content", "keydesign" ),
                        ),

						array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Date color", "keydesign"),
                            "param_name" => "date_color",
                            "value" => "",
                            "description" => esc_html__("Select date color. If none selected, the default theme color will be used.", "keydesign"),
                            "group" => esc_html__( "Design", "keydesign" ),
                        ),

						array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Title color", "keydesign"),
                            "param_name" => "title_color",
                            "value" => "",
                            "description" => esc_html__("Select title color. If none selected, the default theme color will be used.", "keydesign"),
                            "group" => esc_html__( "Design", "keydesign" ),
                        ),

						array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Description color", "keydesign"),
                            "param_name" => "description_color",
                            "value" => "",
                            "description" => esc_html__("Select description color. If none selected, the default theme color will be used.", "keydesign"),
                            "group" => esc_html__( "Design", "keydesign" ),
                        ),

						array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Card background color", "keydesign"),
                            "param_name" => "card_background_color",
                            "value" => "",
                            "description" => esc_html__("Select card background color. If none selected, the default theme color will be used.", "keydesign"),
                            "group" => esc_html__( "Design", "keydesign" ),
                        ),

						array(
							"type"	=>	"dropdown",
							"class" =>	"",
							"heading" => esc_html__("Link settings", "keydesign"),
							"param_name" => "link_settings",
							"value" =>	array(
								esc_html__( "No link", "keydesign" ) => "no-link",
								esc_html__( "Text link", "keydesign" )	=> "text-link",
								esc_html__( "Full box link", "keydesign" )	=> "full-link",
							),
							"save_always" => true,
							"description" => esc_html__("You can add/remove custom link", "keydesign"),
							"group" => esc_html__( "Link", "keydesign" ),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Link text", "keydesign"),
                            "param_name" => "link_text",
                            "value" => "",
                            "description" => esc_html__("Enter link text here.", "keydesign"),
                            "dependency" => array(
                               "element" => "link_settings",
                               "value"	=> array( "text-link" ),
                           ),
                           "group" => esc_html__( "Link", "keydesign" ),
                        ),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Link color", "keydesign"),
                            "param_name" => "link_color",
                            "value" => "",
                            "description" => esc_html__("Select link color. If none selected, the default theme color will be used.", "keydesign"),
                            "dependency" => array(
                               "element" => "link_settings",
                               "value"	=> array( "text-link" ),
                           ),
                           "group" => esc_html__( "Link", "keydesign" ),
                        ),

                        array(
                            "type" => "href",
                            "class" => "",
                            "heading" => esc_html__("Link URL", "keydesign"),
                            "param_name" => "link_url",
                            "value" => "",
                            "description" => esc_html__("Enter URL (Note: parameters like \"mailto:\" are also accepted).", "keydesign"),
                            "dependency" => array(
								"element" => "link_settings",
								"value"	=> array( "text-link", "full-link" ),
							),
							"group" => esc_html__( "Link", "keydesign" ),
						),

                        array(
							"type" => "dropdown",
							"heading" => __( "Link target", "keydesign" ),
                      		"param_name" => "link_target",
                            "value" => array(
								esc_html__( "Same window", "keydesign" ) => "_self",
								esc_html__( "New window", "keydesign" ) => "_blank",
							),
                            "dependency" => array(
								"element" => "link_settings",
								"value"	=> array( "text-link", "full-link" ),
							),
							"save_always" => true,
							"group" => esc_html__( "Link", "keydesign" ),
						),

						array(
							"type"			=>	"dropdown",
							"class"			=>	"",
							"heading"		=>	esc_html__("Display icon?","keydesign"),
							"param_name"	=>	"icon_settings",
							"value"			=>	array(
								"Icon browser" => "icon_browser",
								"No icon" => "no_icon",
							),
							"save_always" => true,
							"description"	=>	esc_html__("Select icon source.", "keydesign"),
							"group" => esc_html__( "Icon", "keydesign" ),
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
								"element" => "icon_settings",
                                "value" => "icon_browser",
							),
							"description" => esc_html__( "Select icon from library.", "keydesign" ),
							"group" => esc_html__( "Icon", "keydesign" ),
						),

						array(
							"type" => "colorpicker",
							"class" => "",
							"heading" => esc_html__("Icon color", "keydesign"),
							"param_name" => "icon_color",
							"value" => "",
							"dependency" =>	array(
								"element" => "icon_settings",
								"value" => array("icon_browser")
							),
							"description" => esc_html__("Select icon color. If none selected, the default theme color will be used.", "keydesign"),
							"group" => esc_html__( "Icon", "keydesign" ),
						),

						array(
							"type" => "dropdown",
							"class" => "",
							"heading" => esc_html__( "CSS Animation", "keydesign" ),
							"param_name" => "css_animation",
							"value" => array(
								"None"              => "",
								"Fade In"         => "kd-animated fadeIn",
								"Fade In Down"    => "kd-animated fadeInDown",
								"Fade In Left"    => "kd-animated fadeInLeft",
								"Fade In Right"   => "kd-animated fadeInRight",
								"Fade In Up"      => "kd-animated fadeInUp",
								"Zoom In"         => "kd-animated zoomIn",
							),
							"save_always" => true,
							"admin_label" => true,
							"description" => esc_html__( "Select type of animation for element to be animated when it enters the browsers viewport (Note: works only in modern browsers).", "keydesign" ),
							"group" => esc_html__( "Extras", "keydesign" ),
						),

						array(
							"type" => "dropdown",
							"class" => "",
							"heading" => esc_html__( "Animation delay", "keydesign" ),
							"param_name" => "animation_delay",
							"value" => array(
								"0 ms" => "",
								"200 ms" => "200",
								"400 ms" => "400",
								"600 ms" => "600",
								"800 ms" => "800",
								"1000 ms" => "1000",
							),
							"dependency" =>	array(
								"element" => "css_animation",
								"value" => array( "kd-animated fadeIn", "kd-animated fadeInDown", "kd-animated fadeInLeft", "kd-animated fadeInRight", "kd-animated fadeInUp", "kd-animated zoomIn" )
							),
							"save_always" => true,
							"admin_label" => true,
							"description" => esc_html__( "Enter animation delay in ms.", "keydesign" ),
							"group" => esc_html__( "Extras", "keydesign" ),
						),

						array(
							"type" => "textfield",
							"class" => "",
							"heading" => esc_html__( "Extra class name", "keydesign" ),
							"param_name" => "extra_class",
							"value" => "",
							"description" => esc_html__( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign" ),
							"group" => esc_html__( "Extras", "keydesign" ),
						),
                    )
                ));
            }
        }

        public function kd_timeline_container( $atts, $content = null ) {

			// Declare empty vars
			$output = $wrapper_class = $line_color = '';

            extract( shortcode_atts( array(
                'card_alignment' => '',
                'global_background_color' => '',
                'global_text_color' => '',
                'extra_class' => '',
            ), $atts ) );

            global $global_background;
            global $global_text;

            $global_background = $global_background_color;
            $global_text = $global_text_color;

      			$wrapper_class = implode( ' ', array( 'kd-timeline', $card_alignment, $extra_class ) );

            // Line color
            if ( '' != $global_background_color ) {
              $line_color = $global_background_color;
            }

            $output = '<div class="'.trim($wrapper_class).'">
      				<div class="timeline-line" '.( !empty( $line_color ) ? 'style="background-color: '.$line_color.';"' : '' ).'>
      					<div class="timeline-line-inner"></div>
      				</div>
      				'.do_shortcode($content).'
      			</div>';

            return $output;
        }

        public function kd_timeline_single( $atts, $content = null ) {

			// Declare empty vars
			$output = $wrapper_class = $point_icon = $point_color = '';

            extract( shortcode_atts( array(
				'date' => '',
				'title' => '',
				'description' => '',
				'date_color' => '',
				'title_color' => '',
				'description_color' => '',
				'card_background_color' => '',
				'link_settings' => '',
				'link_text' => '',
				'link_color' => '',
				'link_url' => '',
				'link_target' => '',
				'icon_settings' => '',
				'icon_iconsmind' => '',
				'icon_color' => '',
				'css_animation' => '',
				'animation_delay' => '',
				'extra_class' => '',
            ), $atts ) );

            // Global colors
            if ( '' != $GLOBALS['global_background'] ) {
              $card_background_color_f = $point_color = $GLOBALS['global_background'];
            }

            if ( '' != $GLOBALS['global_text'] ) {
              $date_color_f = $title_color_f = $description_color_f = $link_color_f = $icon_color_f = $GLOBALS['global_text'];
            }

            if ( '' != $card_background_color ) {
              $card_background_color_f = $point_color = $card_background_color;
            }

            if ( '' != $date_color ) {
              $date_color_f = $date_color;
            }

            if ( '' != $title_color ) {
              $title_color_f = $title_color;
            }

            if ( '' != $description_color ) {
              $description_color_f = $description_color;
            }

            if ( '' != $link_color ) {
              $link_color_f = $link_color;
            }

            if ( '' != $icon_color ) {
              $icon_color_f = $icon_color;
            }

            // Point icon
            if ( $icon_settings == 'icon_browser' && strlen( $icon_iconsmind ) > 0 ) {
              $exploded = explode( ' ', $icon_iconsmind );
              $iconsmind_cat = end( $exploded );
              $font_file_name = substr( strstr( $iconsmind_cat, '-' ), strlen( '-' ) );

              if ( strpos( $exploded[0], 'iconsmind-' ) === 0 ) {
                wp_enqueue_style( $font_file_name.'-im-fonts-woff', plugin_dir_url( __DIR__ ).'assets/css/iconsmind/fonts/'.$font_file_name.'.woff' );
                wp_enqueue_style( $iconsmind_cat, plugin_dir_url( __DIR__ ).'assets/css/iconsmind/'.$iconsmind_cat.'.css' );
              } elseif ( strpos( $exploded[1], 'fa-' ) === 0 ) {
                wp_enqueue_style( 'font-awesome' );
              }
            }

            if ( strlen( $icon_iconsmind ) > 0 ) {
                $point_icon = $icon_iconsmind;
            }

            $main_icon = '<i class="'.$point_icon.'" '.( !empty( $icon_color_f ) ? 'style="color: '.$icon_color_f.';"' : '' ).'></i>';

      			// Animation delay
      			if ( $animation_delay ) {
      				$animation_delay = 'data-animation-delay='.$animation_delay;
      			}

      			// Link settings
      			if ( $link_settings == 'text-link' ) {
      				$link_output = '<a class="timeline-link" href="' . $link_url . '" target="' . $link_target . '" '.( ! empty( $link_color_f ) ? 'style="color: ' . $link_color_f . ';"' : '').'>' . $link_text . '</a>';
      			}

            $wrapper_class = implode( ' ', array( 'timeline-item', $extra_class, $css_animation ) );

            $output = '<div class="'.trim( $wrapper_class ).'" '.$animation_delay.'>
  				    <div class="timeline-item-wrapper '. ( $link_settings == 'full-link' ? 'full-link-card' : '').'" '. ( !empty( $card_background_color_f ) ? 'style="background-color: '.$card_background_color_f.';"' : '').'>';
              if ( $link_settings == 'full-link' ) {
                $output .= '<a class="timeline-full-link" href="' . $link_url . '" '. ( !empty( $title ) ? 'title="'.esc_attr( $title ).'"' : '').' target="' . $link_target . '">';
              }

      					if ( '' != $date ) {
      						$output .= '<div class="timeline-item-date"><p class="item-date" '. ( !empty( $date_color_f ) ? 'style="color: '.$date_color_f.';"' : '').'>' . esc_html( $date ) . '</p></div>';
      					}

      					$output .= '<div class="timeline-content">';
      						if ( '' != $title ) {
      							$output .= '<h4 class="timeline-item-title" '. ( !empty( $title_color_f ) ? 'style="color: '.$title_color_f.';"' : '').'>' . $title . '</h4>';
      						}
      						if ( '' != $description ) {
      							$output .= '<p class="timeline-item-description" '. ( !empty( $description_color_f ) ? 'style="color: '.$description_color_f.';"' : '').'>' . $description . '</p>';
      						}
      						if ( $link_settings == 'text-link' ) {
      							$output .= '<div class="timeline-cta">' . $link_output . '</div>';
      						}
      					$output .= '</div>';
                if ( $link_settings == 'full-link' ) {
                  $output .= '</a>';
                }
      				$output .= '</div>';

      				$output .= '<div class="timeline-item-arrow" '. ( !empty( $card_background_color_f ) ? 'style="border-color: '.$card_background_color_f.';"' : '').'></div>
              <div class="timeline-item-point" '. ( !empty( $point_color ) ? 'style="background-color: '.$point_color.';"' : '').'>';
                if ( strlen( $icon_iconsmind ) > 0 ) {
                    $output .= $main_icon;
                }
              $output .= '</div>
      			</div>';

            return $output;
        }
    }
}

if ( class_exists( 'tek_timeline' ) ) {
    $tek_timeline = new tek_timeline;
}
