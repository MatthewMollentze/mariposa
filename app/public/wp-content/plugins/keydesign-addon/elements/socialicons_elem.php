<?php

if (!class_exists('KD_ELEM_SOCIAL_ICONS')) {

    class KD_ELEM_SOCIAL_ICONS extends KEYDESIGN_ADDON_CLASS {

        function __construct() {
            add_action('init', array($this, 'kd_socialicons_init'));
            add_shortcode('tek_socialicons', array($this, 'kd_socialicons_shrt'));
        }

        // Element configuration in admin

        function kd_socialicons_init() {
            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Social icons", "keydesign"),
                    "description" => esc_html__("Connect your social media profiles to your website.", "keydesign"),
                    "base" => "tek_socialicons",
                    "class" => "",
                    "icon" => plugins_url('assets/element_icons/social-icons.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "params" => array(
                        array(
                          "type" => "kd_param_notice",
                          "text" => '<span style="display: block;">Control which icons are displayed and their urls on the <a href="' . admin_url ( 'admin.php?page=theme-options&tab=0' ) .'">settings page</a>.</span>',
                          "param_name" => "notification",
                          "edit_field_class" => "vc_column vc_col-sm-12",
                        ),
                        array(
                            "type" =>	"dropdown",
                            "class" =>	"",
                            "heading" =>	esc_html__("Icon alignment","keydesign"),
                            "param_name" =>	"si_icon_alignment",
                            "value" =>	array(
                                "Left" => "icon-left-align",
                                "Right" => "icon-right-align",
                                "Center" => "icon-center-align",
                            ),
                            "save_always" => true,
                            "description"	=>	esc_html__("Select icon alignment.", "keydesign"),
                        ),
                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Icon color", "keydesign"),
                            "param_name" => "si_icon_color",
                            "value" => "",
                            "description" => esc_html__("Select icon color.", "keydesign"),
                        ),
                        array(
                            "type" =>	"dropdown",
                            "class" => "",
                            "heading" => esc_html__("Background shape","keydesign"),
                            "param_name" =>	"si_bg_shape",
                            "value" => array(
                                "None" => "bg-shape-none",
                                "Circle" => "bg-shape-circle",
                                "Square" => "bg-shape-square",
                                "Rounded" => "bg-shape-rounded",
                                "Outline circle" => "bg-shape-outline-circle",
                                "Outline square" => "bg-shape-outline-square",
                                "Outline rounded" => "bg-shape-outline-rounded",
                            ),
                            "save_always" => true,
                            "description"	=> esc_html__("Select background shape and style for icon.", "keydesign"),
                        ),
                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Background color", "keydesign"),
                            "param_name" => "si_bg_color",
                            "value" => "",
                            "dependency" =>	array(
                                "element" => "si_bg_shape",
                                "value" => array("bg-shape-circle", "bg-shape-square", "bg-shape-rounded", "bg-shape-outline-circle", "bg-shape-outline-square", "bg-shape-outline-rounded")
                            ),
                            "description" => esc_html__("Select background color for icon.", "keydesign"),
                        ),
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Icon font size", "keydesign"),
                            "param_name" => "si_icon_size",
                            "value" => "",
                            "description" => esc_html__("Enter icon font size.", "keydesign")
                        ),
                        array(
                            "type" =>	"dropdown",
                            "class" => "",
                            "heading" => esc_html__("Hover effect","keydesign"),
                            "param_name" =>	"si_hover_effect",
                            "value" => array(
                                "Default" => "hover-default",
                                "Float shadow" => "hover-float-shadow",
                                "Opacity" => "hover-opacity",
                            ),
                            "save_always" => true,
                            "description"	=> esc_html__("Select hover effect.", "keydesign"),
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("CSS Animation", "keydesign"),
                            "param_name" => "css_animation",
                            "value" => array(
                                "No" => "no_animation",
                                "Fade In" => "kd-animated fadeIn",
                                "Fade In Down" => "kd-animated fadeInDown",
                                "Fade In Left" => "kd-animated fadeInLeft",
                                "Fade In Right" => "kd-animated fadeInRight",
                                "Fade In Up" => "kd-animated fadeInUp",
                                "Zoom In" => "kd-animated zoomIn",
                            ),
                            "description" => esc_html__("Select type of animation for element to be animated when it enters the browsers viewport (Note: works only in modern browsers).", "keydesign"),
                            "group" => esc_html__( "Extras", "keydesign" ),
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Animation Delay", "keydesign"),
                            "param_name" => "animation_delay",
                            "value" => array(
                                "0 ms" => "",
                                "200 ms" => "200",
                                "400 ms" => "400",
                                "600 ms" => "600",
                                "800 ms" => "800",
                                "1 s" => "1000",
                            ),
                            "dependency" =>	array(
                                "element" => "css_animation",
                                "value" => array("kd-animated fadeIn", "kd-animated fadeInDown", "kd-animated fadeInLeft", "kd-animated fadeInRight", "kd-animated fadeInUp", "kd-animated zoomIn")
                            ),
                            "description" => esc_html__("Enter animation delay in ms", "keydesign"),
                            "group" => esc_html__( "Extras", "keydesign" ),
                        ),
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Extra class name", "keydesign"),
                            "param_name" => "extra_class",
                            "value" => "",
                            "description" => esc_html__("Style particular content element differently - add a class name and refer to it in custom CSS.", "keydesign"),
                            "group" => esc_html__( "Extras", "keydesign" ),
                        ),
                    )
                ));
            }
        }



    		// Render the element on front-end

        public function kd_socialicons_shrt($atts, $content = null) {
            extract(shortcode_atts(array(
                'si_icon_alignment' => '',
                'si_icon_color' => '',
                'si_bg_shape' => '',
                'si_bg_color' => '',
                'si_icon_size' => '',
                'si_hover_effect' => '',
                'css_animation' => '',
                'animation_delay' => '',
                'extra_class' => '',
            ), $atts));

            $output = $redux_options = $social_items = $icon_size = $has_style = $background_style = $icon_bg_style = $wrapper_class = '';

            $redux_options = get_option( 'redux_ThemeTek' );
            $social_items = $redux_options['tek-social-profiles'];

            //CSS Animation
            if ($css_animation == "no_animation") {
                $css_animation = "";
            }

            // Animation delay
            if ($animation_delay) {
                $animation_delay = 'data-animation-delay='.$animation_delay;
            }

            $has_style = false;
            if ( $si_bg_shape != 'bg-shape-none' ) {
            	$has_style = true;
            	if ( false !== strpos( $si_bg_shape, 'outline' ) ) {
            		$background_style .= 'icon-element-outline';
            	} else {
            		$background_style .= 'icon-element-background';
            	}
            }

          	if ( false !== strpos( $si_bg_shape, 'outline' ) ) {
          		$icon_bg_style = 'border-color:' . $si_bg_color;
          	} else {
          		$icon_bg_style = 'background-color:' . $si_bg_color;
          	}

            $icon_bg_style = $icon_bg_style ? ' style="' . esc_attr( $icon_bg_style ) . '"' : '';

            $wrapper_class = implode(' ', array('kd-social-profiles', $si_icon_alignment, $background_style, $si_bg_shape, $si_hover_effect, $css_animation, $extra_class));

            if( class_exists( 'ReduxFramework' )) {
              $output .= '<div class="'.$wrapper_class.'" '.(!empty($si_icon_size) ? 'style="font-size:' . $si_icon_size . ';"' : '').' '.$animation_delay.'>';

              $output .= '<ul class="kd-social-list clearfix">';
              if ( is_array ( $social_items ) ) {
                  foreach ( $social_items as $key => $social_item ) {
                      if ( $social_item[ 'enabled' ] ) {
                          $icon = $social_item[ 'icon' ];
                          $base_url = $social_item[ 'url' ];

                          $output .= '<li'.(($has_style) ? $icon_bg_style : '').'>';
                          $output .= '<a target="_blank" href="'. $base_url . '">';
                          $output .= '<i class="fab ' . $icon . '" '.(!empty($si_icon_color) ? 'style="color: '.$si_icon_color.';"' : '').'></i>';
                          $output .= "</a>";
                          $output .= "</li>";
                      }
                  }
              }
              $output .= '</ul>';
              $output .= '</div>';
            }

            return $output;
        }
    }
}

if (class_exists('KD_ELEM_SOCIAL_ICONS')) {
    $KD_ELEM_SOCIAL_ICONS = new KD_ELEM_SOCIAL_ICONS;
}

?>
