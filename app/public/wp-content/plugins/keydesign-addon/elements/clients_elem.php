<?php
if (class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_tek_clients extends WPBakeryShortCodesContainer {
    }
}
if (class_exists('WPBakeryShortCode')) {
    class WPBakeryShortCode_tek_clients_single extends WPBakeryShortCode {
    }
}
if (!class_exists('tek_clients')) {
    class tek_clients extends KEYDESIGN_ADDON_CLASS
    {
        function __construct() {
            add_action('init', array($this, 'kd_clients_init'));
            add_shortcode('tek_clients', array($this, 'kd_clients_container'));
            add_shortcode('tek_clients_single', array($this, 'kd_clients_single'));
        }
        // Element configuration in admin
        function kd_clients_init() {
            // Container element configuration
            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Logo carousel", "keydesign"),
                    "description" => esc_html__("Carousel with images.", "keydesign"),
                    "base" => "tek_clients",
                    "class" => "",
                    "show_settings_on_create" => true,
                    "content_element" => true,
                    "as_parent" => array('only' => 'tek_clients_single'),
                    "icon" => plugins_url('assets/element_icons/logo-carousel.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "js_view" => 'VcColumnView',
                    "params" => array(
                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Navigation","keydesign"),
                            "param_name"    =>  "client_nav",
                            "value"         =>  array(
                                    "Disable" => "nav-disable",
                                    "Enable" => "nav-enable",
                                ),
                            "save_always" => true,
                            "description"   =>  esc_html__("Enable to display navigation arrows.", "keydesign")
                        ),

                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Navigation color", "keydesign"),
                            "param_name" => "client_nav_color",
                            "value" => array(
                                "Black" => "black-navigation",
                                "White" => "white-navigation",
                            ),
                            "save_always" => true,
                            "dependency" =>	array(
                                "element" => "client_nav",
                                "value" => array("nav-enable")
                            ),
                            "description" => esc_html__("Select the navigation arrows color.", "keydesign"),
                         ),

                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Elements per row", "keydesign"),
                            "param_name"	=>	"client_elements",
                            "value"			=>	array(
                                    "1 items" => "1",
                                    "2 items" => "2",
                                    "3 items" => "3",
                                    "4 items" => "4",
                                    "5 items" => "5",
                                    "6 items" => "6",
                                    "7 items" => "7",
                                    "8 items" => "8",
                                    "9 items" => "9",
                                    "10 items" => "10",
                                ),
                            "save_always" => true,
                            "description" => esc_html__("Amount of items displayed at a time with the widest browser width.", "keydesign")
                        ),

                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Enable loop","keydesign"),
                            "param_name"    =>  "client_loop",
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
                            "heading"       =>  esc_html__("Enable autoplay","keydesign"),
                            "param_name"    =>  "client_autoplay",
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
                            "param_name"    =>  "client_autoplay_speed",
                            "value"         =>  array(
                                    "10s"   => "10000",
                                    "9s"   => "9000",
                                    "8s"   => "8000",
                                    "7s"   => "7000",
                                    "6s"   => "6000",
                                    "5s"   => "5000",
                                    "4s"   => "4000",
                                    "3s"   => "3000",
									"2s"   => "2000",
									"1s"   => "1000",
                                ),
                            "save_always" => true,
                            "dependency" =>	array(
                                "element" => "client_autoplay",
                                "value" => array("auto_on")
                            ),
                            "description"   =>  esc_html__("Carousel autoplay speed.", "keydesign")
                        ),

                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Stop on hover","keydesign"),
                            "param_name"    =>  "client_stoponhover",
                            "value"         =>  array(
                                    "Off"   => "hover_off",
                                    "On"    => "hover_on"
                                ),
                            "save_always" => true,
                            "dependency" =>	array(
                                "element" => "client_autoplay",
                                "value" => array("auto_on")
                            ),
                            "description" => esc_html__("Stop sliding carousel on mouse over.", "keydesign")
                        ),

                        array(
                             "type"	=>	"dropdown",
                             "class" =>	"",
                             "heading" => esc_html__("Image hover animation", "keydesign"),
                             "param_name" => "client_image_animation",
                             "value" =>	array(
                                    esc_html__( 'None', 'keydesign' ) => 'no-effect',
                                    esc_html__( 'Opacity', 'keydesign' )	=> 'opacity-effect',
                                    esc_html__( 'Gray scale', 'keydesign' )	=> 'grayscale-effect',
                                    esc_html__( 'Zoom in', 'keydesign' )	=> 'zoomin-effect',
                                ),
                             "save_always" => true,
                             "description" => esc_html__("Choose image animation on mouse over.", "keydesign"),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Extra class name", "keydesign"),
                            "param_name" => "client_extra_class",
                            "value" => "",
                            "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign")
                        )
                    )
                ));
                // Shortcode configuration
                vc_map(array(
                    "name" => __("Child image", "keydesign"),
                    "base" => "tek_clients_single",
                    "content_element" => true,
                    "as_child" => array('only' => 'tek_clients'),
                    "icon" => plugins_url('assets/element_icons/child-image.png', dirname(__FILE__)),
                    "params" => array(
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Image source", "keydesign"),
                            "param_name" => "client_image_source",
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
                            "param_name" => "client_image",
                            "admin_label" => true,
                            "description" => esc_html__("Select logo image from media library.", "keydesign"),
                            "dependency" =>	array(
                                "element" => "client_image_source",
                                "value" => array("media_library")
                            ),
                        ),
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Image external source", "keydesign"),
                            "param_name" => "client_image_ext",
                            "value" => "",
		                        "description" => esc_html__("Enter image external link.", "keydesign"),
                            "dependency" =>	array(
                                "element" => "client_image_source",
                                "value" => array("external_link")
                            ),
                        ),
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Image size", "keydesign"),
                            "param_name" => "ext_image_size",
                            "value" => "",
		                        "description" => esc_html__("Enter image size in pixels. Example: 140x40 (Width x Height).", "keydesign"),
                            "dependency" =>	array(
                                "element" => "client_image_source",
                                "value" => array("external_link")
                            ),
                        ),

                        array(
                            "type" => "href",
                            "class" => "",
                            "heading" => esc_html__("Image link", "keydesign"),
                            "param_name" => "client_link",
                            "value" => "",
                            "description" => esc_html__("Enter URL if you want this image to have a link.", "keydesign"),
                        ),

                        array(
                      			"type" => "dropdown",
                      			"heading" => __( "Link target", "keydesign" ),
                      			"param_name" => "client_link_target",
                            "value" => array(
            									esc_html__( "Same window", "keydesign" ) => "_self",
            									esc_html__( "New window", "keydesign" ) => "_blank",
            								),
                    		),

                    )
                ));
            }
        }

        public function kd_clients_container($atts, $content = null) {
            extract(shortcode_atts(array(
                'client_nav' => '',
                'client_nav_color' => '',
                'client_elements' => '',
                'client_loop' => '',
                'client_autoplay' => '',
                'client_autoplay_speed' => '',
                'client_stoponhover' => '',
                'client_image_animation' => '',
                'client_extra_class' => '',
            ), $atts));

            $output = '';

            $kd_clientunique_id = "kd-client-".uniqid();

            $output = '<div class="slider clients '.$client_image_animation.' '.$kd_clientunique_id.' '.$client_nav_color.' '.$client_extra_class.'">'.do_shortcode($content).'</div>';

            $output .= '<script type="text/javascript">
              jQuery(document).ready(function($){
                if ($(".slider.clients.'.$kd_clientunique_id.'").length) {
                  $(".slider.clients.'.$kd_clientunique_id.'").owlCarousel({
                    stageClass: "owl-wrapper",
                    stageOuterClass: "owl-wrapper-outer",
                    loadedClass: "owl-carousel",
                    responsiveClass:true,
                    responsive:{
                      0:{
                          items:1,';
                          if ($client_nav == 'nav-enable') {
                            $output .= 'nav: true,
                            navSpeed: 500,
                            dots: false,';
                          } else {
                            $output .= 'dots: false,';
                          }
                      $output .= '},
                      415:{
                          items:3,';
                          if ($client_nav == 'nav-enable') {
                            $output .= 'nav: true,
                            navSpeed: 500,
                            dots: false,';
                          } else {
                            $output .= 'dots: false,';
                          }
                      $output .= '},
                      960:{
                          items:'.$client_elements.',';
                          if ( $client_nav == 'nav-enable' ) {
                            $output .='dots: true,
                            nav: false,
                            dotsSpeed: 500,
                            dotsEach: true,';
                          } else {
                            $output .= 'dots: false,';
                          }
                      $output .= '}
                    },';

                    if($client_loop == "loop_on") {
                      $output .= 'loop: true,';
                    }

                    if($client_autoplay == "auto_on") {
                      $output .= 'autoplay: true,';
                    }

                    if($client_autoplay_speed !== "") {
                      $output .= 'autoplayTimeout: '.$client_autoplay_speed.',';
                    }

                    if($client_autoplay == "auto_on" && $client_stoponhover == "hover_on") {
                      $output .= 'autoplayHoverPause: true,';
                    }

                    $output .='
                  });
                }
              });
            </script>';

            return $output;
        }

        public function kd_clients_single($atts, $content = null) {
            extract(shortcode_atts(array(
                'client_image_source' => '',
                'client_image' => '',
                'client_image_ext' => '',
                'ext_image_size' => '',
                'client_link' => '',
                'client_link_target' => '',
            ), $atts));

			$default_src = $dimensions = $hwstring = '';

      $image  = wpb_getImageBySize($params = array(
          'post_id' => NULL,
          'attach_id' => $client_image,
          'thumb_size' => 'full',
          'class' => ""
      ));

      $default_src = vc_asset_url( 'vc/no_image.png' );

      $dimensions = vc_extract_dimensions( $ext_image_size );
      $hwstring = $dimensions ? image_hwstring( $dimensions[0], $dimensions[1] ) : '';
      $client_image_ext = $client_image_ext ? esc_attr( $client_image_ext ) : $default_src;

      $output = '<div class="clients-content">';
				if(isset($client_link) && $client_link !== '') {
          if ($client_image_source == 'external_link') {
            $output .='<a href="'.$client_link.'" target="'.$client_link_target.'"><img src="'.$client_image_ext.'" '.$hwstring.' /></a>';
          } else {
            $output .='<a href="'.$client_link.'" target="'.$client_link_target.'">'.$image["thumbnail"].'</a>';
          }
				} else {
          if ($client_image_source == 'external_link') {
            $output .= '<img src="'.$client_image_ext.'" '.$hwstring.' />';
          } else {
  					$output .= $image['thumbnail'];
          }
				}
		    $output .= '</div>';
            return $output;
        }
    }
}
if (class_exists('tek_clients')) {
    $tek_clients = new tek_clients;
}
?>
