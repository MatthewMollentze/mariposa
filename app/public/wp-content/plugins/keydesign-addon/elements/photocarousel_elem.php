<?php
if (class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_tek_photocarousel extends WPBakeryShortCodesContainer {
    }
}
if (class_exists('WPBakeryShortCode')) {
    class WPBakeryShortCode_tek_photocarousel_single extends WPBakeryShortCode {
    }
}
if (!class_exists('tek_photocarousel')) {
    class tek_photocarousel extends KEYDESIGN_ADDON_CLASS
    {
        function __construct() {
            add_action('init', array($this, 'kd_photocarousel_init'));
            add_shortcode('tek_photocarousel', array($this, 'kd_photocarousel_container'));
            add_shortcode('tek_photocarousel_single', array($this, 'kd_photocarousel_single'));
        }
        // Element configuration in admin
        function kd_photocarousel_init() {
            // Container element configuration
            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Photo box carousel", "keydesign"),
                    "description" => esc_html__("List photo boxes in a carousel.", "keydesign"),
                    "base" => "tek_photocarousel",
                    "class" => "",
                    "show_settings_on_create" => true,
                    "content_element" => true,
                    "as_parent" => array('only' => 'tek_photocarousel_single', 'tek_photobox'),
                    "icon" => plugins_url('assets/element_icons/photobox-carousel.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "js_view" => 'VcColumnView',
                    "params" => array(
                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Elements per row", "keydesign"),
                            "param_name"	=>	"pbc_elements",
                            "value"			=>	array(
                                    "1 item" => "1",
                                    "2 items" => "2",
                                    "3 items" => "3",
                                    "4 items" => "4",
                                ),
                            "save_always" => true,
                            "description" => esc_html__("Amount of items displayed at a time with the widest browser width.", "keydesign")
                        ),

                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Enable loop","keydesign"),
                            "param_name"    =>  "pbc_loop",
                            "value"         =>  array(
                                    "Off" => "loop_off",
                                    "On" => "loop_on",
                                ),
                            "save_always" => true,
                            "description"   =>  esc_html__("Infinity loop. Duplicate last and first items to get loop illusion.", "keydesign")
                        ),

                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Navigation style","keydesign"),
                            "param_name"    =>  "pbc_nav_style",
                            "value"         =>  array(
                                    "Arrows" => "nav-arrows",
                                    "Dots" => "nav-dots",
                                ),
                            "save_always" => true,
                            "description"   =>  esc_html__("Select navigation style.", "keydesign")
                        ),

                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Navigation arrows color", "keydesign"),
                            "param_name" => "pbc_navigation_color",
                            "value" => array(
                                "Black" => "black-navigation",
                                "White" => "white-navigation",
                            ),
                            "save_always" => true,
                            "dependency" =>	array(
                                "element" => "pbc_nav_style",
                                "value" => array("nav-arrows")
                            ),
                            "description" => esc_html__("Choose the navigation arrows color.", "keydesign"),
                         ),

                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Enable autoplay","keydesign"),
                            "param_name"    =>  "pbc_autoplay",
                            "value"         =>  array(
                                    "Off"   => "auto_off",
                                    "On"    => "auto_on"
                                ),
                            "save_always" => true,
                            "description"   =>  esc_html__("Carousel autoplay settings.", "keydesign")
                        ),

                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Autoplay speed","keydesign"),
                            "param_name"    =>  "pbc_autoplay_speed",
                            "value"         =>  array(
                                    "10s"   => "10000",
                                    "9s"   => "9000",
                                    "8s"   => "8000",
                                    "7s"   => "7000",
                                    "6s"   => "6000",
                                    "5s"   => "5000",
                                    "4s"   => "4000",
                                    "3s"   => "3000",
                                ),
                            "save_always" => true,
                            "dependency" =>	array(
                                "element" => "pbc_autoplay",
                                "value" => array("auto_on")
                            ),
                            "description"   =>  esc_html__("Carousel autoplay speed.", "keydesign")
                        ),

                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Stop on hover","keydesign"),
                            "param_name"    =>  "pbc_stoponhover",
                            "value"         =>  array(
                                    "Off"   => "hover_off",
                                    "On"    => "hover_on"
                                ),
                            "save_always" => true,
                            "dependency" =>	array(
                                "element" => "pbc_autoplay",
                                "value" => array("auto_on")
                            ),
                            "description"   =>  esc_html__("Stop sliding carousel on mouse over.", "keydesign")
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
                // Shortcode configuration
                vc_map(array(
                    "name" => esc_html__("Photo Box", "keydesign"),
                    "base" => "tek_photocarousel_single",
                    "content_element" => true,
                    "as_child" => array('only' => 'tek_photocarousel'),
                    "icon" => plugins_url('assets/element_icons/photo-box.png', dirname(__FILE__)),
                    "params" => array(
                      array(
                          "type" => "textfield",
                          "class" => "",
                          "heading" => esc_html__("Box title", "keydesign"),
                          "param_name" => "phb_title",
                          "value" => "",
                          "admin_label" => true,
                          "description" => esc_html__("Enter box title here.", "keydesign")
                      ),
                      array(
                          "type" => "colorpicker",
                          "class" => "",
                          "heading" => esc_html__("Title color", "keydesign"),
                          "param_name" => "phb_title_color",
                          "value" => "",
                          "description" => esc_html__("Choose title color. If none selected, the default theme color will be used.", "keydesign"),
                      ),
                      array(
                          "type" => "textarea",
                          "class" => "",
                          "heading" => esc_html__("Box description", "keydesign"),
                          "param_name" => "phb_description",
                          "value" => "",
                          "description" => esc_html__("Enter box content text here.", "keydesign")
                      ),
                      array(
                          "type" => "colorpicker",
                          "class" => "",
                          "heading" => esc_html__("Description color", "keydesign"),
                          "param_name" => "phb_description_color",
                          "value" => "",
                          "description" => esc_html__("Choose description color. If none selected, the default theme color will be used.", "keydesign"),
                      ),
                      array(
                           "type"	=>	"dropdown",
                           "class" =>	"",
                           "heading" => esc_html__("Box text align", "keydesign"),
                           "param_name" => "phb_text_align",
                           "value" =>	array(
                                  esc_html__( 'Left aligned', 'keydesign' ) => 'text-left',
                                  esc_html__( 'Center aligned', 'keydesign' )	=> 'text-center',
                              ),
                           "save_always" => true,
                           "description" => esc_html__("Text alignment in box.", "keydesign"),
                      ),
                      array(
                          "type" => "dropdown",
                          "class" => "",
                          "heading" => esc_html__("Image source", "keydesign"),
                          "param_name" => "image_source",
                          "value" => array(
                              "Media library" => "media_library",
                              "External link" => "external_link",
                          ),
                          "description" => esc_html__("Select image source.", "keydesign"),
                          "save_always" => true,
                      ),
                      array(
                          "type" => "attach_image",
                          "class" => "",
                          "heading" => esc_html__("Image", "keydesign"),
                          "param_name" => "phb_image",
                          "value" => "",
                          "description" => esc_html__("Select or upload your image using the media library.", "keydesign"),
                          "dependency" =>	array(
                              "element" => "image_source",
                              "value" => array("media_library")
                          ),
                      ),
                      array(
                          "type" => "textfield",
                          "class" => "",
                          "heading" => esc_html__("Image external source", "keydesign"),
                          "param_name" => "ext_image",
                          "value" => "",
                          "description" => esc_html__("Enter image external link.", "keydesign"),
                          "dependency" =>	array(
                              "element" => "image_source",
                              "value" => array("external_link")
                          ),
                      ),
                      array(
                          "type" => "textfield",
                          "class" => "",
                          "heading" => esc_html__("Image size", "keydesign"),
                          "param_name" => "ext_image_size",
                          "value" => "",
                          "description" => esc_html__("Enter image size in pixels. Example: 400x250 (Width x Height).", "keydesign"),
                          "dependency" =>	array(
                              "element" => "image_source",
                              "value" => array("external_link")
                          ),
                      ),
                      array(
                           "type"	=>	"dropdown",
                           "class" =>	"",
                           "heading" => esc_html__("Box link type", "keydesign"),
                           "param_name" => "phb_custom_link",
                           "value" =>	array(
                                  esc_html__( 'No link', 'keydesign' ) => '#',
                                  esc_html__( 'Button link', 'keydesign' )	=> 'box-button-link',
                                  esc_html__( 'Simple link', 'keydesign' )	=> 'box-simple-link',
                                  esc_html__( 'Box link', 'keydesign' )	=> 'box-link',
                              ),
                           "save_always" => true,
                           "description" => esc_html__("You can add or remove the custom link.", "keydesign"),
                      ),
                      array(
                           "type"	=>	"vc_link",
                           "class" =>	"",
                           "heading" => esc_html__("Link settings", "keydesign"),
                           "param_name" => "phb_box_link",
                           "value" =>	"",
                           "description" => esc_html__("You can add or remove the existing link from here.", "keydesign"),
                           "dependency" => array(
                              "element" => "phb_custom_link",
                              "value"	=> array( "box-button-link", "box-link", "box-simple-link" ),
                          ),
                      ),
                      array(
                          "type" => "textfield",
                          "class" => "",
                          "heading" => esc_html__("Button text", "keydesign"),
                          "param_name" => "phb_button_text",
                          "value" => "",
                          "description" => esc_html__("Write the text displayed on the button.", "keydesign"),
                          "dependency" => array(
                             "element" => "phb_custom_link",
                             "value"	=> array( "box-button-link", "box-simple-link" ),
                         ),
                      ),
                      array(
                          "type" => "colorpicker",
                          "class" => "",
                          "heading" => esc_html__("Link color", "keydesign"),
                          "param_name" => "phb_link_color",
                          "value" => "",
                          "description" => esc_html__("Choose link color. If none selected, the default theme color will be used.", "keydesign"),
                          "dependency" => array(
                             "element" => "phb_custom_link",
                             "value"	=> array( "box-simple-link" ),
                         ),
                      ),
                      array(
                          "type" => "dropdown",
                          "class" => "",
                          "heading" => esc_html__("Button style", "keydesign"),
                          "param_name" => "phb_button_style",
                          "value" => array(
                              "Solid color" => "",
                              "Outline" => "tt_secondary_button"
                          ),
                          "dependency" => array(
                             "element" => "phb_custom_link",
                             "value"	=> array( "box-button-link" ),
                          ),
                          "description" => esc_html__("Select button style", "keydesign")
                      ),
                      array(
                          "type" => "dropdown",
                          "class" => "",
                          "heading" => esc_html__("Button color scheme", "keydesign"),
                          "param_name" => "phb_button_color_scheme",
                          "value" => array(
                              "Primary color" => "btn_primary_color",
                              "Secondary color" => "btn_secondary_color"
                          ),
                          "dependency" => array(
                             "element" => "phb_custom_link",
                             "value"	=> array( "box-button-link" ),
                          ),
                          "description" => esc_html__("Select button predefined color scheme.", "keydesign")
                      ),
                      array(
                          "type" => "colorpicker",
                          "class" => "",
                          "heading" => esc_html__("Box background color", "keydesign"),
                          "param_name" => "phb_background_color",
                          "value" => "",
                          "description" => esc_html__("Choose box background color.", "keydesign"),
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
                          "param_name" => "phb_extra_class",
                          "value" => "",
                          "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign")
                      ),

                    )
                ));
            }
        }

        public function kd_photocarousel_container($atts, $content = null) {
            extract(shortcode_atts(array(
                'pbc_elements' => '',
                'pbc_loop' => '',
                'pbc_nav_style' => '',
                'pbc_navigation_color' => '',
                'pbc_autoplay' => '',
                'pbc_autoplay_speed' => '',
                'pbc_stoponhover' => '',
                'pb_extra_class' => '',
                ), $atts));

                $output = '';

                $kd_pbcunique_id = "kd-pbc-".uniqid();

                $output .= '
                <div class="photobox-carousel '.$pbc_navigation_color.' '.$kd_pbcunique_id.' pbc-parent '.$pb_extra_class.'">
                    <div class="pbc-content">'.do_shortcode($content).'</div>
                </div>';

                $output .= '<script type="text/javascript">
          				jQuery(document).ready(function($){
                    if ($(".photobox-carousel.'.$kd_pbcunique_id.' .pbc-content").length) {
                      $(".photobox-carousel.'.$kd_pbcunique_id.' .pbc-content").owlCarousel({
                          stageClass: "owl-wrapper",
                          stageOuterClass: "owl-wrapper-outer",
                          loadedClass: "owl-carousel",
                          responsive:{
                              0:{
                                  items:1,
                              },
                              768:{
                                  items:2,
                              },
                              1199:{
                                  items:'.$pbc_elements.',
                              }
                          },
                          rewind: true,';

                          if($pbc_loop == "loop_on") {
                            $output .= 'loop: true,';
                          }

                          if($pbc_nav_style == "nav-arrows") {
                            $output .= 'nav: true,
                            navSpeed: 500,
                            dots: false,';
                          } else {
                            $output .='dots: true,
                            dotsEach: true,
                            nav: false,
                            dotsSpeed: 500,';
                          }

                          if($pbc_autoplay == "auto_on") {
                    				$output .= 'autoplay: true,';
                    			} else {
                    				$output .= 'autoplay: false,';
                          }

                          if($pbc_autoplay_speed !== "") {
                    				$output .= 'autoplayTimeout: '.$pbc_autoplay_speed.',';
                    			}

                          if($pbc_autoplay == "auto_on" && $pbc_stoponhover == "hover_on") {
                            $output .= 'autoplayHoverPause: true,';
                          } else {
                    				$output .= 'autoplayHoverPause: false,';
                          }

                        $output .='
                      });
                    }
          				});
          			</script>';

                return $output;
        }

        public function kd_photocarousel_single($atts, $content = null) {
            extract(shortcode_atts(array(
                'phb_title' => '',
                'phb_title_color' => '',
                'phb_description' => '',
                'phb_description_color' => '',
                'phb_text_align' => '',
                'image_source' => '',
                'phb_image' => '',
                'ext_image' => '',
                'ext_image_size' => '',
                'phb_custom_link' => '',
                'phb_box_link' => '',
                'phb_button_text' => '',
                'phb_link_color' => '',
                'phb_button_style' => '',
                'phb_button_color_scheme' => '',
                'phb_background_color' => '',
                'css_animation' => '',
                'elem_animation_delay' => '',
                'phb_extra_class' => '',
            ), $atts));

            $content_image = $phb_img_array = $href = $link_target = $link_title = $no_image_class = $animation_delay = $default_src = $dimensions = $hwstring = '';

            if(empty($phb_image)) {
              $no_image_class = "no-image";
            }

            $default_src = vc_asset_url( 'vc/no_image.png' );
            $dimensions = vc_extract_dimensions( $ext_image_size );
            $hwstring = $dimensions ? image_hwstring( $dimensions[0], $dimensions[1] ) : '';

            if ($image_source == 'external_link') {
              if (!$ext_image) {
                $content_image .='<img src="'.$default_src.'" class="vc_img-placeholder" />';
              } else {
                $content_image .='<img src="'.$ext_image.'" '.$hwstring.' />';
              }
            } else {
              $phb_img_array = wpb_getImageBySize ( $params = array( 'post_id' => NULL, 'attach_id' => $phb_image, 'thumb_size' => 'full', 'class' => "" ) );
      				$content_image = $phb_img_array['thumbnail'];
            }

            $href = vc_build_link($phb_box_link);
      			if($href['url'] !== '') {
      				$link_target = (isset($href['target']) && ($href['target'] != '')) ? 'target="'.$href['target'].'"' : '';
      				$link_title = (isset($href['title'])) ? 'title="'.$href['title'].'"' : '';
      			}

            //CSS Animation
            if ($css_animation == "no_animation") {
                $css_animation = "";
            }

            // Animation delay
            if ($elem_animation_delay) {
                $animation_delay = 'data-animation-delay='.$elem_animation_delay;
            }

            $output = '<div class="kd-photobox '.$css_animation.' '.$phb_extra_class.'" '.$animation_delay.'>';
                if ($phb_custom_link == "box-link") {
                    $output .= '<a href="'.$href['url'].'" '.$link_target.' '.$link_title.'>';
                }

                if ( $phb_custom_link == "box-button-link" || $phb_custom_link == "box-simple-link" && '' != $href['url']) {
                  $output .= '<div class="photobox-img"><a href="'.$href['url'].'" '.$link_target.' '.$link_title.'>'.$content_image.'</a></div>';
                } else {
                  $output .= '<div class="photobox-img">'.$content_image.'</div>';
                }

                $output .= '<div class="phb-content '.$phb_text_align.' '.$no_image_class.'" '.(!empty($phb_background_color) ? 'style="background-color: '.$phb_background_color.';"' : '').'>
                  <h4 '.(!empty($phb_title_color) ? 'style="color: '.$phb_title_color.';"' : '').'>'.$phb_title.'</h4>
                  <p '.(!empty($phb_description_color) ? 'style="color: '.$phb_description_color.';"' : '').'>'.$phb_description.'</p>';

                  if ( $phb_custom_link == "box-button-link" && '' != $phb_button_text && '' != $href['url'] ) {
                    $output .= '<div class="phb-btncontainer">
                        <a href="'.$href['url'].'" '.$link_target.' '.$link_title.' class="tt_button '.$phb_button_style.' '.$phb_button_color_scheme.'">'.$phb_button_text.'</a>
                    </div>';
                  } elseif ( $phb_custom_link == "box-simple-link" && '' != $phb_button_text && '' != $href['url'] ) {
                    $output .= '<div class="phb-btncontainer">
                        <a class="phb-simple-link" href="'.$href['url'].'" '.$link_target.' '.$link_title.' '.(!empty($phb_link_color) ? 'style="color: '.$phb_link_color.';"' : '').'>'.$phb_button_text.'</a>
                    </div>';
                  }

                $output .= '</div>';
                if ($phb_custom_link == "box-link") {
                    $output .= '</a>';
                }
            $output .= '</div>';

            return $output;
        }
    }
}
if (class_exists('tek_photocarousel')) {
    $tek_photocarousel = new tek_photocarousel;
}
?>
