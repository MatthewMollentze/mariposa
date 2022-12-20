<?php
if (class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_tek_testimonialcards extends WPBakeryShortCodesContainer {
    }
}
if (class_exists('WPBakeryShortCode')) {
    class WPBakeryShortCode_tek_testimonialcards_single extends WPBakeryShortCode {
    }
}
if (!class_exists('tek_testimonialcards')) {
    class tek_testimonialcards extends KEYDESIGN_ADDON_CLASS
    {
        function __construct() {
            add_action('init', array($this, 'kd_testimonialcards_init'));
            add_shortcode('tek_testimonialcards', array($this, 'kd_testimonialcards_container'));
            add_shortcode('tek_testimonialcards_single', array($this, 'kd_testimonialcards_single'));
        }
        // Element configuration in admin
        function kd_testimonialcards_init() {
            // Container element configuration
            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Testimonial cards", "keydesign"),
                    "description" => esc_html__("List all your client testimonials in a carousel.", "keydesign"),
                    "base" => "tek_testimonialcards",
                    "class" => "",
                    "show_settings_on_create" => true,
                    "content_element" => true,
                    "as_parent" => array('only' => 'tek_testimonialcards_single'),
                    "icon" => plugins_url('assets/element_icons/testimonial-cards.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "js_view" => 'VcColumnView',
                    "params" => array(
                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Navigation style","keydesign"),
                            "param_name"    =>  "tcard_nav_style",
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
                            "param_name" => "tcard_navigation_color",
                            "value" => array(
                                "Black" => "black-navigation",
                                "White" => "white-navigation",
                            ),
                            "save_always" => true,
                            "dependency" =>	array(
                                "element" => "tcard_nav_style",
                                "value" => array("nav-arrows")
                            ),
                            "description" => esc_html__("Choose the navigation arrows color.", "keydesign"),
                         ),

                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Enable autoplay","keydesign"),
                            "param_name"    =>  "tcard_autoplay",
                            "value"         =>  array(
                                    "Off"   => "auto_off",
                                    "On"   => "auto_on"
                                ),
                            "save_always" => true,
                            "description"   =>  esc_html__("Carousel autoplay settings.", "keydesign")
                        ),

                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Autoplay speed","keydesign"),
                            "param_name"    =>  "tcard_autoplay_speed",
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
                                "element" => "tcard_autoplay",
                                "value" => array("auto_on")
                            ),
                            "description"   =>  esc_html__("Carousel autoplay speed.", "keydesign")
                        ),

                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Stop on hover","keydesign"),
                            "param_name"    =>  "tcard_stoponhover",
                            "value"         =>  array(
                                    "Off"   => "hover_off",
                                    "On"   => "hover_on"
                                ),
                            "save_always" => true,
                            "dependency" =>	array(
                                "element" => "tcard_autoplay",
                                "value" => array("auto_on")
                            ),
                            "description"   =>  esc_html__("Stop sliding carousel on mouse over.", "keydesign")
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Extra class name", "keydesign"),
                            "param_name" => "tcard_extra_class",
                            "value" => "",
                            "description" => esc_html__("If you wish to style a particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign")
                        ),
                    )
                ));
                // Shortcode configuration
                vc_map(array(
                    "name" => esc_html__("Testimonial card", "keydesign"),
                    "base" => "tek_testimonialcards_single",
                    "content_element" => true,
                    "as_child" => array('only' => 'tek_testimonialcards'),
                    "icon" => plugins_url('assets/element_icons/testimonial-card.png', dirname(__FILE__)),
                    "params" => array(
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Author name", "keydesign"),
                            "param_name" => "tcards_author_name",
                            "admin_label" => true,
                            "value" => "",
	                          "description" => esc_html__("Write the testimonial author name.", "keydesign"),
                         ),

                         array(
                             "type" => "colorpicker",
                             "class" => "",
                             "heading" => esc_html__("Author name text color", "keydesign"),
                             "param_name" => "tcards_author_name_color",
                             "value" => "",
                             "description" => esc_html__("Choose author name text color. If none selected, the default theme color will be used.", "keydesign"),
                         ),

                         array(
                             "type" => "textfield",
                             "class" => "",
                             "heading" => esc_html__("Author job", "keydesign"),
                             "param_name" => "tcards_author_job",
                             "value" => "",
			                       "description" => esc_html__("Write the testimonial author job.", "keydesign"),
                        ),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Author job text color", "keydesign"),
                            "param_name" => "tcards_author_job_color",
                            "value" => "",
                            "description" => esc_html__("Choose author job text color. If none selected, the default theme color will be used.", "keydesign"),
                        ),

                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Author image source", "keydesign"),
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
                            "heading" => esc_html__("Author profile image", "keydesign"),
                            "param_name" => "tcards_author_image",
                            "value" => "",
                            "description" => esc_html__("Upload author profile image.", "keydesign"),
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
                            "description" => esc_html__("Enter image size in pixels. Example: 100x100 (Width x Height).", "keydesign"),
                            "dependency" =>	array(
                                "element" => "image_source",
                                "value" => array("external_link")
                            ),
                        ),

                        array(
                            "type" => "textarea",
                            "class" => "",
                            "heading" => esc_html__("Testimonial text", "keydesign"),
                            "param_name" => "tcards_testimonial_text",
                            "value" => "",
                            "description" => esc_html__("Write the testimonial message here.", "keydesign")
                        ),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Testimonial text color", "keydesign"),
                            "param_name" => "tcards_testimonial_text_color",
                            "value" => "",
                            "description" => esc_html__("Choose testimonial text color. If none selected, the default theme color will be used.", "keydesign"),
                        ),

                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Author details position", "keydesign"),
                            "param_name" => "tcards_author_details",
                            "value" => array(
                                "Top"               => "author-top",
                                "Bottom"            => "author-bottom",
                            ),
                            "save_always" => true,
                            "description" => esc_html__("Choose the author details (name, job and profile image) position.", "keydesign"),
                         ),

                         array(
                              "type"	=>	"dropdown",
                              "class" =>	"",
                              "heading" => esc_html__("Link settings", "keydesign"),
                              "param_name" => "tcards_link_settings",
                              "value" =>	array(
                                     esc_html__( 'No link', 'keydesign' ) => 'no_link',
                                     esc_html__( 'Simple link', 'keydesign' )	=> 'simple_link',
                                 ),
                              "save_always" => true,
                              "description" => esc_html__("You can add or remove the custom link.", "keydesign"),
                         ),

                         array(
                             "type" => "textfield",
                             "class" => "",
                             "heading" => esc_html__("Link text", "keydesign"),
                             "param_name" => "tcards_link_text",
                             "value" => "",
                             "description" => esc_html__("Enter link text.", "keydesign"),
                             "dependency" =>	array(
                                 "element" => "tcards_link_settings",
                                 "value" => array("simple_link"),
                             ),
                         ),

                         array(
                             "type" => "href",
                             "class" => "",
                             "heading" => esc_html__("Link URL", "keydesign"),
                             "param_name" => "tcards_link_url",
                             "value" => "",
                             "dependency" => array(
                                "element" => "tcards_link_settings",
                                "value"	=> array( "simple_link" ),
                            ),
                         ),

                         array(
                             'type' => 'dropdown',
                             'heading' => __( 'Link target', 'keydesign' ),
                             'param_name' => 'tcards_link_target',
                             "value" => array(
                               esc_html__( 'Same window', 'keydesign' ) => '_self',
                               esc_html__( 'New window', 'keydesign' ) => '_blank',
                             ),
                             "save_always" => true,
                             "dependency" => array(
                                "element" => "tcards_link_settings",
                                "value"	=> array( "simple_link" ),
                            ),
                         ),

                         array(
                             "type" => "colorpicker",
                             "class" => "",
                             "heading" => esc_html__("Link color", "keydesign"),
                             "param_name" => "tcards_link_color",
                             "value" => "",
                             "dependency" => array(
                                "element" => "tcards_link_settings",
                                "value"	=> array( "simple_link" ),
                            ),
                             "description" => esc_html__("Select link color. If none selected, the default theme color will be used.", "keydesign")
                         ),

                         array(
                             "type" => "colorpicker",
                             "class" => "",
                             "heading" => esc_html__("Testimonial box background color", "keydesign"),
                             "param_name" => "tcards_testimonial_bg_color",
                             "value" => "",
                             "description" => esc_html__("Choose testimonial box background color. If none selected, the default theme color will be used.", "keydesign"),
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
                            "group" => esc_html__("Extras", "keydesign"),
                         ),

                         array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Animation delay", "keydesign"),
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
                            "description" => esc_html__("Enter animation delay in ms", "keydesign"),
                            "group" => esc_html__("Extras", "keydesign"),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Extra class name", "keydesign"),
                            "param_name" => "tcards_extra_class",
                            "value" => "",
                            "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign"),
                            "group" => esc_html__("Extras", "keydesign"),
                        ),

                    )
                ));
            }
        }

        public function kd_testimonialcards_container($atts, $content = null) {
            extract(shortcode_atts(array(
                'tcard_nav_style'                   => '',
                'tcard_extra_class'                 => '',
                'tcard_autoplay'                    => '',
                'tcard_autoplay_speed'              => '',
                'tcard_stoponhover'                 => '',
                'tcard_navigation_color'            => '',
                ), $atts));

                $output = '';

                $kd_tcardsunique_id = "kd-tcards-".uniqid();

                $output .= '
                <div class="testimonial-cards tcards-parent '.$tcard_navigation_color.' '.$kd_tcardsunique_id.' '.$tcard_extra_class.'">
                    <div class="tcards-content">'.do_shortcode($content).'</div>
                </div>';

                $output .= '<script type="text/javascript">
          				jQuery(document).ready(function($){
                    if ($(".testimonial-cards.'.$kd_tcardsunique_id.' .tcards-content").length) {
                      $(".testimonial-cards.'.$kd_tcardsunique_id.' .tcards-content").owlCarousel({
                        stageClass: "owl-wrapper",
                        stageOuterClass: "owl-wrapper-outer",
                        loadedClass: "owl-carousel",
                        responsive:{
                            0:{
                                items:1,
                            },
                            769:{
                                items:3,
                            }
                        },
                        center: true,
                        loop: true,
                        rewind: true,';

                        if($tcard_nav_style == "nav-arrows") {
                          $output .= 'nav: true,
                          navSpeed: 500,
                          dots: false,';
                        } else {
                          $output .='dots: true,
                          dotsEach: true,
                          nav: false,
                          dotsSpeed: 500,';
                        }

                        if($tcard_autoplay == "auto_on") {
                  				$output .= 'autoplay: true,';
                  			} else {
                  				$output .= 'autoplay: false,';
                        }

                        if($tcard_autoplay_speed !== "") {
                  				$output .= 'autoplayTimeout: '.$tcard_autoplay_speed.',';
                  			}

                        if($tcard_autoplay == "auto_on" && $tcard_stoponhover == "hover_on") {
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

        public function kd_testimonialcards_single($atts, $content = null) {
            extract(shortcode_atts(array(
                'tcards_author_name' => '',
                'tcards_author_name_color' => '',
                'tcards_author_job' => '',
                'tcards_author_job_color' => '',
                'image_source' => '',
                'tcards_author_image' => '',
                'ext_image' => '',
                'ext_image_size' => '',
                'tcards_testimonial_text' => '',
                'tcards_testimonial_text_color' => '',
                'tcards_author_details' => '',
                'tcards_link_settings' => '',
                'tcards_link_text' => '',
                'tcards_link_url' => '',
                'tcards_link_target' => '',
                'tcards_link_color' => '',
                'tcards_testimonial_bg_color' => '',
                'css_animation' => '',
                'elem_animation_delay' => '',
                'tcards_extra_class' => '',
            ), $atts));

            $author_img = $tcards_author_img_array = $author_image = $animation_delay = $default_src = $dimensions = $hwstring = $card_id = $wrapper_class = '';

            $default_src = vc_asset_url( 'vc/no_image.png' );
            $dimensions = vc_extract_dimensions( $ext_image_size );
            $hwstring = $dimensions ? image_hwstring( $dimensions[0], $dimensions[1] ) : '';

            if ($image_source == 'external_link') {
              if (!$ext_image) {
                $author_image .='<img src="'.$default_src.'" class="vc_img-placeholder" />';
              } else {
                $author_image .='<img src="'.$ext_image.'" '.$hwstring.' />';
              }
            } else {
              $tcards_author_img_array = wpb_getImageBySize ( $params = array( 'post_id' => NULL, 'attach_id' => $tcards_author_image, 'thumb_size' => 'full', 'class' => "" ) );
      				$author_image = $tcards_author_img_array['thumbnail'];
            }

            //CSS Animation
            if ($css_animation == "no_animation") {
                $css_animation = "";
            }

            // Animation delay
            if ($elem_animation_delay) {
                $animation_delay = 'data-animation-delay='.$elem_animation_delay;
            }

            $card_id = uniqid( 'kd-testimonial-card-' );

            $wrapper_class = implode(' ', array('key-tcards', $card_id, $tcards_author_details, $css_animation, $tcards_extra_class));

            $output = '<div class="' . trim($wrapper_class) . '" '.$animation_delay.'>';
                    if ($tcards_author_details == "author-top") {
                      $output .= '<div class="tcards_header">
                          <div class="tcards-image">'.$author_image.'</div>
                          <h4 class="tcards-name" '.(!empty($tcards_author_name_color) ? 'style="color: '.$tcards_author_name_color.';"' : '').'>'.$tcards_author_name.'</h4>
                          <p class="tcards-job" '.(!empty($tcards_author_job_color) ? 'style="color: '.$tcards_author_job_color.';"' : '').'>'.$tcards_author_job.'</p>
                      </div>';
                    }
                    $output .= '<div class="tcards_message" '.(!empty($tcards_testimonial_bg_color) ? 'style="background-color: '.$tcards_testimonial_bg_color.';"' : '').'>
                        <h6 '.(!empty($tcards_testimonial_text_color) ? 'style="color: '.$tcards_testimonial_text_color.';"' : '').'>'.$tcards_testimonial_text.'</h6>';
                        if ( $tcards_link_settings == 'simple_link' && $tcards_link_text != '' && $tcards_link_url != '') {
                          $output .= '<div class="tcards-link"><a href="'.esc_url( $tcards_link_url ).'" target="'.esc_attr( $tcards_link_target ).'" '.(!empty($tcards_link_color) ? 'style="color: '.$tcards_link_color.';"' : '').'>'.esc_html( $tcards_link_text ).'</a></div>';
                        }
                    $output .= '</div>';
                    if ($tcards_author_details == "author-bottom") {
                      $output .= '<div class="tcards_header">
                          <div class="tcards-image">'.$author_image.'</div>
                          <h4 class="tcards-name" '.(!empty($tcards_author_name_color) ? 'style="color: '.$tcards_author_name_color.';"' : '').'>'.$tcards_author_name.'</h4>
                          <p class="tcards-job" '.(!empty($tcards_author_job_color) ? 'style="color: '.$tcards_author_job_color.';"' : '').'>'.$tcards_author_job.'</p>
                      </div>';
                    }

                    if (!empty($tcards_testimonial_bg_color) && $tcards_author_details == "author-bottom") {
                      $output .= '<style>..testimonial-cards .key-tcards.author-bottom.'.$card_id.' .tcards_message:before { border-color: '.$tcards_testimonial_bg_color.' transparent transparent '.$tcards_testimonial_bg_color.'; }</style>';
                    }
                    if (!empty($tcards_testimonial_bg_color) && $tcards_author_details == "author-top") {
                      $output .= '<style>.testimonial-cards .key-tcards.author-top.'.$card_id.' .tcards_message:before { border-color: transparent transparent '.$tcards_testimonial_bg_color.' '.$tcards_testimonial_bg_color.'; }</style>';
                    }
                $output .= '</div>';
            return $output;
        }
    }
}
if (class_exists('tek_testimonialcards')) {
    $tek_testimonialcards = new tek_testimonialcards;
}
?>
