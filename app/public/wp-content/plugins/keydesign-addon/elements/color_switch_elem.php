<?php
if (class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_tek_color_swtich extends WPBakeryShortCodesContainer {
    }
}
if (class_exists('WPBakeryShortCode')) {
    class WPBakeryShortCode_tek_color_swtich_single extends WPBakeryShortCode {
    }
}
if (!class_exists('tek_color_swtich')) {
    class tek_color_swtich extends KEYDESIGN_ADDON_CLASS
    {
        function __construct() {
            add_action('init', array($this, 'kd_color_swtich_init'));
            add_shortcode('tek_color_swtich', array($this, 'kd_color_swtich_container'));
            add_shortcode('tek_color_swtich_single', array($this, 'kd_color_swtich_single'));
        }
        // Element configuration in admin
        function kd_color_swtich_init() {
            // Container element configuration
            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Color switcher", "keydesign"),
                    "description" => esc_html__("Carousel color picker", "keydesign"),
                    "base" => "tek_color_swtich",
                    "class" => "",
                    "show_settings_on_create" => true,
                    "content_element" => true,
                    "as_parent" => array('only' => 'tek_color_swtich_single'),
                    "icon" => plugins_url('assets/element_icons/color-switcher.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "js_view" => 'VcColumnView',
                    "params" => array(
                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Enable autoplay","keydesign"),
                            "param_name"    =>  "cs_autoplay",
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
                            "param_name"    =>  "cs_autoplay_speed",
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
                                "element" => "cs_autoplay",
                                "value" => array("auto_on")
                            ),
                            "description"   =>  esc_html__("Carousel autoplay speed.", "keydesign")
                        ),

                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Stop on hover","keydesign"),
                            "param_name"    =>  "cs_stoponhover",
                            "value"         =>  array(
                                    "Off"   => "hover_off",
                                    "On"   => "hover_on"
                                ),
                            "save_always" => true,
                            "dependency" =>	array(
                                "element" => "cs_autoplay",
                                "value" => array("auto_on")
                            ),
                            "description"   =>  esc_html__("Stop sliding carousel on mouse over.", "keydesign")
                        ),
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Extra class name", "keydesign"),
                            "param_name" => "cs_extra_class",
                            "value" => "",
                            "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign")
                        ),
                    )
                ));
                // Shortcode configuration
                vc_map(array(
                    "name" => __("Child Image", "keydesign"),
                    "base" => "tek_color_swtich_single",
                    "content_element" => true,
                    "as_child" => array('only' => 'tek_color_swtich'),
                    "icon" => plugins_url('assets/element_icons/child-image.png', dirname(__FILE__)),
                    "params" => array(
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
                            "heading" => esc_html__("Image", "keydesign"),
                            "param_name" => "color_switch_image",
                            "admin_label" => true,
                            "description" => esc_html__("Select or upload image from media library.", "keydesign"),
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
		                        "description" => esc_html__("Enter image size in pixels. Example: 600x350 (Width x Height).", "keydesign"),
                            "dependency" =>	array(
                                "element" => "image_source",
                                "value" => array("external_link")
                            ),
                        ),
                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Element Color", "keydesign"),
                            "param_name" => "color_switch_color",
                            "value" => "",
                            "description" => esc_html__("Choose color.", "keydesign"),
                        ),
                        array(
                             "type"	=>	"dropdown",
                             "class" =>	"",
                             "heading" => esc_html__("Link type", "keydesign"),
                             "param_name" => "color_switch_custom_link",
                             "value" =>	array(
                                    esc_html__( "No link", "keydesign" ) => "no-link",
                                    esc_html__( "Add a custom link", "keydesign" )	=> "enable-link",
                                ),
                             "save_always" => true,
                             "description" => esc_html__("You can add/remove custom link", "keydesign"),
                        ),
                        array(
                             "type"	=>	"vc_link",
                             "class" =>	"",
                             "heading" => esc_html__("Link settings", "keydesign"),
                             "param_name" => "color_switch_link",
                             "value" =>	"",
                             "description" => esc_html__("You can add or remove the existing link from here.", "keydesign"),
                             "dependency" => array(
                                "element" => "color_switch_custom_link",
                                "value"	=> "enable-link",
                            ),
                        ),
                    )
                ));
            }
        }

        public function kd_color_swtich_container($atts, $content = null) {
            extract(shortcode_atts(array(
                'cs_autoplay' => '',
                'cs_autoplay_speed' => '',
                'cs_stoponhover' => '',
                'cs_extra_class' => ''
            ), $atts));

      $kd_colorsw_id = "kd-colorsw-".uniqid();

			$output = '<div class="slider color-swtich '.$kd_colorsw_id.' '.$cs_extra_class.'">'.do_shortcode($content).'</div>';

      $output .= '<script type="text/javascript">
        jQuery(document).ready(function($){
          if ($(".color-swtich.'.$kd_colorsw_id.'").length > 0) {
            $(".color-swtich.'.$kd_colorsw_id.'").owlCarousel({
              stageClass: "owl-wrapper",
              stageOuterClass: "owl-wrapper-outer",
              loadedClass: "owl-carousel",
              dotsEach: true,
              dotsSpeed: 500,
              items: 1,
              rewind: true,';
              if($cs_autoplay == "auto_on") {
                $output .= 'autoplay: true,';
              }

              if($cs_autoplay_speed !== "") {
                $output .= 'autoplayTimeout: '.$cs_autoplay_speed.',';
              }

              if($cs_autoplay == "auto_on" && $cs_stoponhover == "hover_on") {
                $output .= 'autoplayHoverPause: true,';
              }

              $output .= 'addClassActive: true,
              animateIn: "fadeIn",
            });
            var elem_count = 0;
            jQuery(".color-swtich.'.$kd_colorsw_id.' .color-swtich-content").each(function (index, value) {
               var elem_color = ( jQuery(this).attr("data-color") );
               jQuery(".color-swtich.'.$kd_colorsw_id.' .owl-dots .owl-dot span").eq(elem_count++).css( "background", elem_color );
            });
          }

        });
      </script>';

			return $output;
        }

        public function kd_color_swtich_single($atts, $content = null) {
            // Declare empty vars
            $output = $link_title = $link_target = $default_src = $dimensions = $hwstring = '';

            extract(shortcode_atts(array(
                'image_source' => '',
                'color_switch_image' => '',
                'ext_image' => '',
                'ext_image_size' => '',
                'color_switch_color' => '',
                'color_switch_custom_link' => '',
                'color_switch_link' => '',

            ), $atts));

            $image = wpb_getImageBySize($params = array(
                'post_id' => NULL,
                'attach_id' => $color_switch_image,
                'thumb_size' => 'full',
                'class' => ""
            ));

            $default_src = vc_asset_url( 'vc/no_image.png' );

            $dimensions = vc_extract_dimensions( $ext_image_size );
            $hwstring = $dimensions ? image_hwstring( $dimensions[0], $dimensions[1] ) : '';
            $ext_image = $ext_image ? esc_attr( $ext_image ) : $default_src;

            $href = vc_build_link($color_switch_link);
            if ($href['target'] == "") { $href['target'] = "_self"; }

      			if($href['url'] !== '') {
      				$link_target = (isset($href['target'])) ? ' target="'.$href['target'].'"' : 'target="_self"';
      				$link_title = (isset($href['title'])) ? ' title="'.$href['title'].'"' : '';
      			}

            $output .= '<div class="color-swtich-content" data-color="'.$color_switch_color.'">';
            if ( $color_switch_custom_link == "enable-link" ) {
              $output .= '<a href="'.$href['url'].'"'.$link_target.''.$link_title.'>';
            }
            if ($image_source == 'external_link') {
              if (!$ext_image) {
                $output .='<img src="'.$default_src.'" />';
              } else {
                $output .='<img src="'.$ext_image.'" '.$hwstring.' />';
              }
            } else {
              if (!$image) {
                $output .='<img src="'.$default_src.'" />';
              } else {
                $output .= $image['thumbnail'];
              }
            }
            if ( $color_switch_custom_link == "enable-link" ) {
              $output .= '</a>';
            }
            $output .= '</div>';

			return $output;
        }
    }
}
if (class_exists('tek_color_swtich')) {
    $tek_color_swtich = new tek_color_swtich;
}
?>
