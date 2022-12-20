<?php
if (class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_tek_teamcarousel extends WPBakeryShortCodesContainer {
    }
}
if (class_exists('WPBakeryShortCode')) {
    class WPBakeryShortCode_tek_teamcarousel_single extends WPBakeryShortCode {
    }
}
if (!class_exists('tek_teamcarousel')) {
    class tek_teamcarousel extends KEYDESIGN_ADDON_CLASS
    {
        function __construct() {
            add_action('init', array($this, 'kd_teamcarousel_init'));
            add_shortcode('tek_teamcarousel', array($this, 'kd_teamcarousel_container'));
            add_shortcode('tek_teamcarousel_single', array($this, 'kd_teamcarousel_single'));
        }
        // Element configuration in admin
        function kd_teamcarousel_init() {
            // Container element configuration
            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Team carousel", "keydesign"),
                    "description" => esc_html__("List all your team members in a carousel.", "keydesign"),
                    "base" => "tek_teamcarousel",
                    "class" => "",
                    "show_settings_on_create" => true,
                    "content_element" => true,
                    "as_parent" => array('only' => 'tek_teamcarousel_single'),
                    "icon" => plugins_url('assets/element_icons/team-carousel.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "js_view" => 'VcColumnView',
                    "params" => array(
                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Elements per row", "keydesign"),
                            "param_name"	=>	"tc_elements",
                            "value"			=>	array(
                                    "3 items" => "3",
                                    "5 items" => "5",
                                ),
                            "save_always" => true,
                            "description" => esc_html__("Amount of items displayed at a time with the widest browser width.", "keydesign")
                        ),

                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Enable autoplay","keydesign"),
                            "param_name"    =>  "tc_autoplay",
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
                            "param_name"    =>  "tc_autoplay_speed",
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
                                "element" => "tc_autoplay",
                                "value" => array("auto_on")
                            ),
                            "description"   =>  esc_html__("Carousel autoplay speed.", "keydesign")
                        ),

                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Stop on hover","keydesign"),
                            "param_name"    =>  "tc_stoponhover",
                            "value"         =>  array(
                                    "Off"   => "hover_off",
                                    "On"    => "hover_on"
                                ),
                            "save_always" => true,
                            "dependency" =>	array(
                                "element" => "tc_autoplay",
                                "value" => array("auto_on")
                            ),
                            "description"   =>  esc_html__("Stop sliding carousel on mouse over.", "keydesign")
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Extra class name", "keydesign"),
                            "param_name" => "tc_extra_class",
                            "value" => "",
                            "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign")
                        ),
                    )
                ));
                // Shortcode configuration
                vc_map(array(
                    "name" => esc_html__("Team member", "keydesign"),
                    "base" => "tek_teamcarousel_single",
                    "content_element" => true,
                    "as_child" => array('only' => 'tek_teamcarousel'),
                    "icon" => plugins_url('assets/element_icons/team-member.png', dirname(__FILE__)),
                    "params" => array(
                      array(
                          "type" => "textfield",
                          "class" => "",
                          "heading" => esc_html__("Team member name", "keydesign"),
                          "param_name" => "title",
                          "value" => "",
                          "admin_label" => true,
                      ),

                      array(
                          "type" => "colorpicker",
                          "class" => "",
                          "heading" => esc_html__("Name text color", "keydesign"),
                          "param_name" => "title_color",
                          "value" => "",
                          "description" => esc_html__("Choose team member name color. If none selected, the default theme color will be used.", "keydesign"),
                      ),

                      array(
                          "type" => "textfield",
                          "class" => "",
                          "heading" => esc_html__("Team member job", "keydesign"),
                          "param_name" => "position",
                          "value" => "",
                      ),

                      array(
                          "type" => "colorpicker",
                          "class" => "",
                          "heading" => esc_html__("Job text color", "keydesign"),
                          "param_name" => "position_color",
                          "value" => "",
                          "description" => esc_html__("Choose team member job color. If none selected, the default theme color will be used.", "keydesign"),
                      ),

                      array(
                          "type" => "textarea",
                          "class" => "",
                          "heading" => esc_html__("Team member description", "keydesign"),
                          "param_name" => "description",
                          "value" => "",
                      ),

                      array(
                          "type" => "colorpicker",
                          "class" => "",
                          "heading" => esc_html__("Description text color", "keydesign"),
                          "param_name" => "description_color",
                          "value" => "",
                          "description" => esc_html__("Choose team member description color. If none selected, the default theme color will be used.", "keydesign"),
                      ),

                      array(
                          "type" => "dropdown",
                          "class" => "",
                          "heading" => esc_html__("Person image source", "keydesign"),
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
                          "heading" => esc_html__("Person image", "keydesign"),
                          "param_name" => "image",
                          "description" => esc_html__("Select or upload your image using the media library."),
                          "dependency" =>	array(
                              "element" => "image_source",
                              "value" => array("media_library")
                          ),
                      ),

                      array(
                          "type" => "textfield",
                          "class" => "",
                          "heading" => esc_html__("Person image external source", "keydesign"),
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
                          "heading" => esc_html__("Person image size", "keydesign"),
                          "param_name" => "ext_image_size",
                          "value" => "",
                          "description" => esc_html__("Enter image size in pixels. Example: 400x450 (Width x Height).", "keydesign"),
                          "dependency" =>	array(
                              "element" => "image_source",
                              "value" => array("external_link")
                          ),
                      ),

                      array(
                          "type" => "colorpicker",
                          "class" => "",
                          "heading" => esc_html__("Box background color", "keydesign"),
                          "param_name" => "team_bg_color",
                          "value" => "",
                          "description" => esc_html__("Choose box background color. If none selected, the default theme color will be used.", "keydesign"),
                      ),

                      array(
                           "type" => "href",
                           "class" => "",
                           "heading" => esc_html__("Facebook Link", "keydesign"),
                           "param_name" => "facebook_url",
                           "value" => "",
                           "description" => esc_html__("Set Facebook link.", "keydesign"),
                      ),

                      array(
                           "type" => "href",
                           "class" => "",
                           "heading" => esc_html__("Instagram Link", "keydesign"),
                           "param_name" => "instagram_url",
                           "value" => "",
                           "description" => esc_html__("Set Instagram link.", "keydesign"),
                      ),

                      array(
                           "type" => "href",
                           "class" => "",
                           "heading" => esc_html__("Twitter Link", "keydesign"),
                           "param_name" => "twitter_url",
                           "value" => "",
                           "description" => esc_html__("Set Twitter link.", "keydesign"),
                      ),

                      array(
                           "type" => "href",
                           "class" => "",
                           "heading" => esc_html__("Linkedin Link", "keydesign"),
                           "param_name" => "linkedin_url",
                           "value" => "",
                           "description" => esc_html__("Set Linkedin link.", "keydesign"),
                      ),

                      array(
                           "type" => "href",
                           "class" => "",
                           "heading" => esc_html__("Xing Link", "keydesign"),
                           "param_name" => "xing_url",
                           "value" => "",
                           "description" => esc_html__("Set Xing link.", "keydesign"),
                      ),

                      array(
                          "type" => "colorpicker",
                          "class" => "",
                          "heading" => esc_html__("Social icons color", "keydesign"),
                          "param_name" => "social_color",
                          "value" => "",
                          "description" => esc_html__("Choose social icons color. If none selected, the default theme color will be used.", "keydesign"),
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
                          "param_name" => "team_extra_class",
                          "value" => "",
                          "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign")
                      ),

                    )
                ));
            }
        }

        public function kd_teamcarousel_container($atts, $content = null) {
            extract(shortcode_atts(array(
                    'tc_elements'           => '',
                    'tc_autoplay'           => '',
                    'tc_autoplay_speed'     => '',
                    'tc_stoponhover'        => '',
                    'tc_extra_class'        => '',
                ), $atts));

                $output = '';

                $kd_tcunique_id = "kdteamc".uniqid();

                $output = '
                <div class="team-carousel '.$kd_tcunique_id.' tc-parent '.$tc_extra_class.'">
                    <div class="tc-content">'.do_shortcode($content).'</div>
                </div>';

                $output .= '<script type="text/javascript">

                    if (jQuery(".team-carousel.'.$kd_tcunique_id.' .tc-content").length) {
                      var $owl'.$kd_tcunique_id.' = jQuery(".team-carousel.'.$kd_tcunique_id.' .tc-content");

                      $owl'.$kd_tcunique_id.'.children().each( function( index ) {
                        jQuery(this).attr( "data-position", index );
                      });

                      jQuery(document).on("click", ".team-carousel.'.$kd_tcunique_id.' .tc-content .owl-item>div", function() {
                        $owl'.$kd_tcunique_id.'.trigger("to.owl.carousel", jQuery(this).data( "position" ) );
                      });

                      jQuery(window).load(function() {
                      jQuery(".team-carousel.'.$kd_tcunique_id.' .tc-content").owlCarousel({
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
                                items:3,
                            },
                            1366:{
                                items: '.$tc_elements.',
                            }
                        },
                        items: '.$tc_elements.',
                        slideBy: 1,
                        mouseDrag: false,
                        center: true,
                        loop: true,
                        nav: false,
                        dots: false,';

                        if($tc_autoplay == "auto_on") {
                  				$output .= 'autoplay: true,
                          rewind: true,';
                  			}

                        if($tc_autoplay_speed !== "") {
                  				$output .= 'autoplayTimeout: '.$tc_autoplay_speed.',';
                  			}

                        if($tc_autoplay == "auto_on" && $tc_stoponhover == "hover_on") {
                          $output .= 'autoplayHoverPause: true,';
                        }

                        $output .='
                        addClassActive: true,
                      });
                    });
                    }
          			</script>';

                return $output;
        }

        public function kd_teamcarousel_single($atts, $content = null) {
            extract(shortcode_atts(array(
                'title' => '',
                'title_color' => '',
                'position' => '',
                'position_color' => '',
                'description' => '',
                'description_color' => '',
                'image_source' => '',
                'image' => '',
                'ext_image' => '',
                'ext_image_size' => '',
                'team_bg_color' => '',
                'facebook_url' => '',
                'instagram_url' => '',
                'twitter_url' => '',
                'linkedin_url' => '',
                'xing_url' => '',
                'social_color' => '',
                'css_animation' => '',
                'elem_animation_delay' => '',
                'team_extra_class' => '',
            ), $atts));

            $animation_delay = $default_src = $dimensions = $hwstring = '';

            $image = wpb_getImageBySize($params = array(
                'post_id' => NULL,
                'attach_id' => $image,
                'thumb_size' => 'full',
                'class' => ""
            ));

            $default_src = vc_asset_url( 'vc/no_image.png' );
            $dimensions = vc_extract_dimensions( $ext_image_size );
            $hwstring = $dimensions ? image_hwstring( $dimensions[0], $dimensions[1] ) : '';

            //CSS Animation
            if ($css_animation == "no_animation") {
                $css_animation = "";
            }

            // Animation delay
            if ($elem_animation_delay) {
                $animation_delay = 'data-animation-delay='.$elem_animation_delay;
            }

            $output = '<div class="team-member design-creative '.$css_animation.' '.$team_extra_class.'" '.$animation_delay.'>
                            <div class="team-content" '.(!empty($team_bg_color) ? 'style="background-color: '.$team_bg_color.';"' : '').'>
                                <div class="team-image">';

                                if ($image_source == 'external_link') {
                                  if (!$ext_image) {
                                    $output .='<img src="'.$default_src.'" class="vc_img-placeholder" />';
                                  } else {
                                    $output .='<img src="'.$ext_image.'" '.$hwstring.' />';
                                  }
                                } else {
                                  if (!$image) {
                                    $output .='<img src="'.$default_src.'" class="vc_img-placeholder" />';
                                  } else {
                                    $output .= $image['thumbnail'];
                                  }
                                }

                                $output .= '<div class="team-content-hover">
                                <h4 '.(!empty($title_color) ? 'style="color: '.$title_color.';"' : '').'>'.$title.'</h4>
                                <span class="team-subtitle" '.(!empty($position_color) ? 'style="color: '.$position_color.';"' : '').'>'.$position.'</span>
                                <p '.(!empty($description_color) ? 'style="color: '.$description_color.';"' : '').'>'.$description.'</p>
                                <div class="team-socials">';
                                  if(isset($facebook_url) && $facebook_url !== '') {
                                    $output .='<a href="'.$facebook_url.'" target="_blank"><span class="fab fa-facebook-f" '.(!empty($social_color) ? 'style="color: '.$social_color.';"' : '').'></span></a>';
                                  }
                                  if(isset($instagram_url) && $instagram_url !== '') {
                                    $output .='<a href="'.$instagram_url.'" target="_blank"><span class="fab fa-instagram" '.(!empty($social_color) ? 'style="color: '.$social_color.';"' : '').'></span></a>';
                                  }
                                  if(isset($twitter_url) && $twitter_url !== '') {
                                    $output .='<a href="'.$twitter_url.'" target="_blank"><span class="fab fa-twitter" '.(!empty($social_color) ? 'style="color: '.$social_color.';"' : '').'></span></a>';
                                  }
                                  if(isset($linkedin_url) && $linkedin_url !== '') {
                                    $output .='<a href="'.$linkedin_url.'" target="_blank"><span class="fab fa-linkedin-in" '.(!empty($social_color) ? 'style="color: '.$social_color.';"' : '').'></span></a>';
                                  }
                                  if(isset($xing_url) && $xing_url !== '') {
                                    $output .='<a href="'.$xing_url.'" target="_blank"><span class="fab fa-xing" '.(!empty($social_color) ? 'style="color: '.$social_color.';"' : '').'></span></a>';
                                  }
                                $output .='</div>
                            </div></div>
                            </div>
                        </div>';
            return $output;
        }
    }
}
if (class_exists('tek_teamcarousel')) {
    $tek_teamcarousel = new tek_teamcarousel;
}
?>
