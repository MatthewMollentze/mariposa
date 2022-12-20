<?php

if (!class_exists('KD_ELEM_ICON_BOX')) {

    class KD_ELEM_ICON_BOX extends KEYDESIGN_ADDON_CLASS {

        function __construct() {
            add_action('init', array($this, 'kd_iconbox_init'));
            add_shortcode('tek_iconbox', array($this, 'kd_iconbox_shrt'));
        }

        // Element configuration in admin

        function kd_iconbox_init() {
            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Icon box", "keydesign"),
                    "description" => esc_html__("Simple text box with icon.", "keydesign"),
                    "base" => "tek_iconbox",
                    "class" => "",
                    "icon" => plugins_url('assets/element_icons/icon-box.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "params" => array(

                        array(
                            "type" => "textarea",
                            "class" => "",
                            "heading" => esc_html__("Box title", "keydesign"),
                            "param_name" => "title",
                            "value" => "",
                            "admin_label" => true,
                            "description" => esc_html__("Enter box title here.", "keydesign"),
                        ),

                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Title tag","keydesign"),
                            "param_name"	=>	"title_size",
                            "value"			=>	array(
                                "Default" => "large-title",
                                "h1" => "h1",
                                "h2" => "h2",
                                "h3" => "h3",
                                "h4" => "large-title", //Legacy fallback
                                "h5" => "h5",
                                "h6" => "small-title", //Legacy fallback
                            ),
                            "save_always" => true,
                            "description"	=>	esc_html__("Select title tag. Default is set to H4.", "keydesign"),
                        ),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Title color", "keydesign"),
                            "param_name" => "title_color",
                            "value" => "",
                            "description" => esc_html__("Choose title color. If none selected, the default theme color will be used.", "keydesign"),
                        ),

                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Box content type","keydesign"),
                            "param_name"	=>	"box_content_type",
                            "value"			=>	array(
                                "Simple text" => "simple_text",
                                "HTML content" => "html_content",
                            ),
                            "save_always" => true,
                            "description"	=>	esc_html__("Select box content type.", "keydesign"),
                        ),

	                      array(
                            "type" => "textarea",
                            "class" => "",
                            "heading" => esc_html__("Box description - simple text", "keydesign"),
                            "param_name" => "text_box",
                            "value" => "",
                            "description" => esc_html__("Enter box content text here.", "keydesign"),
		                        "dependency" =>	array(
                                "element" => "box_content_type",
                                "value" => array("simple_text")
                            ),
                        ),

                        array(
                            "type" => "textarea_html",
                            "class" => "",
                            "heading" => esc_html__("Box description - HTML content", "keydesign"),
                            "param_name" => "content",
                            "value" => "",
                            "description" => esc_html__("Enter box content text here.", "keydesign"),
			                      "dependency" =>	array(
                                "element" => "box_content_type",
                                "value" => array("html_content")
                            ),
                        ),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Content text color", "keydesign"),
                            "param_name" => "text_color",
                            "value" => "",
                            "description" => esc_html__("Choose content text color. If none selected, the default theme color will be used.", "keydesign"),
                        ),

                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Display icon","keydesign"),
                            "param_name"	=>	"icon_type",
                            "value"			=>	array(
                                    "Icon browser" => "icon_browser",
                                    "Custom icon" => "custom_icon",
                                    "No icon" => "no_icon",
                                ),
                            "save_always" => true,
                            "description"	=>	esc_html__("Select icon source.", "keydesign"),
                        ),

                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Icon library","keydesign"),
                            "param_name"	=>	"icon_library",
                            "value"			=>	array(
                                    esc_html__( "IconsMind", "keydesign" ) => "iconsmind",
                                    esc_html__( "Font Awesome 5", "keydesign" ) => "fontawesome",
                                ),
                            "save_always" => true,
                            "description"	=>	esc_html__("Select icon library.", "keydesign"),
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
              								"element" => "icon_library",
              								"value" => "iconsmind",
              							),
              							"description" => esc_html__( "Select icon from library.", "keydesign" ),
            						),

                        array(
              							"type" => "iconpicker",
              							"heading" => esc_html__( "Icon", "keydesign" ),
              							"param_name" => "icon_fontawesome",
                            "settings" => array(
                        				"emptyIcon" => false,
                        				"iconsPerPage" => 50,
                        		),
              							"dependency" => array(
              								"element" => "icon_library",
              								"value" => "fontawesome",
              							),
              							"description" => esc_html__( "Select icon from library.", "keydesign" ),
            						),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Icon color", "keydesign"),
                            "param_name" => "icon_color",
                            "value" => "",
                            "dependency" =>	array(
                                "element" => "icon_type",
                                "value" => array("icon_browser")
                            ),
                            "description" => esc_html__("Choose icon color. If none selected, the default theme color will be used.", "keydesign"),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Icon size", "keydesign"),
                            "param_name" => "icon_size",
                            "value" => "",
                            "dependency" =>	array(
                                "element" => "icon_type",
                                "value" => array("icon_browser")
                            ),
                            "description" => esc_html__("Enter icon size. (eg. 10px, 1em, 1rem)", "keydesign"),
                        ),

                        array(
                            "type" => "attach_image",
                            "class" => "",
                            "heading" => esc_html__("Upload image icon", "keydesign"),
                            "param_name" => "icon_img",
                            "value" => "",
                            "description" => esc_html__("Upload your own custom image.", "keydesign"),
                            "dependency" => array(
                                "element" => "icon_type",
                                "value" => array("custom_icon"),
                            ),
                        ),

                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Image size","keydesign"),
                            "param_name"	=>	"icon_img_size",
                            "value"			=>	array(
                                    "Small size" => "img_small_size",
                                    "Medium size" => "img_medium_size",
                                    "Big size" => "img_big_size",
                                ),
                            "save_always" => true,
                            "dependency" => array(
                                "element" => "icon_type",
                                "value" => array("custom_icon"),
                            ),
                            "description"	=>	esc_html__("Select image size.", "keydesign"),
                        ),

                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Icon position","keydesign"),
                            "param_name"	=>	"icon_position",
                            "value"			=>	array(
                                    "Top" => "icon_top",
                                    "Left" => "icon_left",
                                ),
                            "save_always" => true,
                            "dependency" => array(
                                "element" => "icon_type",
                                "value" => array("icon_browser", "custom_icon"),
                            ),
                            "description"	=>	esc_html__("Select icon position relative to the content.", "keydesign"),
                        ),

                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Content alignment", "keydesign"),
                            "param_name" => "content_alignment",
                            "value" => array(
                                "Align center"      => "content_center",
                                "Align left"        => "content_left",
                                "Align right"       => "content_right"
                            ),
                            "save_always" => true,
                            "description" => esc_html__("Choose content alignment.", "keydesign"),
                        ),

                        array(
                             "type"	=>	"dropdown",
                             "class" =>	"",
                             "heading" => esc_html__("Link settings", "keydesign"),
                             "param_name" => "custom_link",
                             "value" =>	array(
                                    esc_html__( "No link", "keydesign" ) => "#",
                                    esc_html__( "Text link", "keydesign" )	=> "1",
                                    esc_html__( "Box link", "keydesign" )	=> "ib-box-link",
                                    esc_html__( "Icon/image link", "keydesign" )	=> "ib-icon-link",
                                ),
                             "save_always" => true,
                             "description" => esc_html__("You can add/remove link.", "keydesign"),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Link text", "keydesign"),
                            "param_name" => "link_text",
                            "value" => "",
                            "description" => esc_html__("Enter link text here.", "keydesign"),
                            "dependency" => array(
                               "element" => "custom_link",
                               "value"	=> array( "1" ),
                           ),
                        ),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Link color", "keydesign"),
                            "param_name" => "link_color",
                            "value" => "",
                            "description" => esc_html__("Choose link color. If none selected, the default theme color will be used.", "keydesign"),
                            "dependency" => array(
                               "element" => "custom_link",
                               "value"	=> array( "1" ),
                           ),
                        ),

                        array(
                             "type"	=>	"vc_link",
                             "class" =>	"",
                             "heading" => esc_html__("Link URL", "keydesign"),
                             "param_name" => "iconbox_link",
                             "value" =>	"",
                             "description" => esc_html__("You can add or remove the existing link from here.", "keydesign"),
                             "dependency" => array(
                                "element" => "custom_link",
                                "value"	=> array( "1", "ib-box-link", "ib-icon-link" ),
                            ),
                        ),

                        array(
              							"type" => "dropdown",
              							"class" => "",
              							"heading" => esc_html__("Box background type", "keydesign"),
              							"param_name" =>	"background_type",
              							"value" =>	array(
              								esc_html__( 'None', 'keydesign' ) => 'none',
              								esc_html__( 'Select color', 'keydesign' )	=> 'custom_bg_color',
                              esc_html__( 'Background image', 'keydesign' )	=> 'custom_bg_image',
              							),
              							"save_always" => true,
              							"description" => esc_html__("Select box background type.", "keydesign"),
            						),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Background color", "keydesign"),
                            "param_name" => "background_color",
                            "value" => "",
                            "dependency" =>	array(
                								"element" => "background_type",
                								"value" => array( "custom_bg_color" ),
      							        ),
                            "description" => esc_html__("Choose box background color.", "keydesign"),
                        ),

                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Background image source", "keydesign"),
                            "param_name" => "background_image_source",
                            "value" => array(
                                "Media library" => "media_library",
                                "External link" => "external_link",
                            ),
                            "dependency" => array(
                                "element" => "background_type",
                                "value" => array("custom_bg_image"),
                            ),
                            "description" => esc_html__("Select image source.", "keydesign"),
                            "save_always" => true,
                        ),

                        array(
                            "type" => "attach_image",
                            "class" => "",
                            "heading" => esc_html__("Image", "keydesign"),
                            "param_name" => "background_image",
                            "value" => "",
                            "description" => esc_html__("Upload custom image.", "keydesign"),
                            "dependency" => array(
                                "element" => "background_image_source",
                                "value" => array("media_library"),
                            ),
                            "save_always" => true,
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Image external source", "keydesign"),
                            "param_name" => "background_ext_image",
                            "value" => "",
                            "description" => esc_html__("Enter image external link.", "keydesign"),
                            "dependency" =>	array(
                                "element" => "background_image_source",
                                "value" => array("external_link"),
                            ),
                        ),

                        array(
              							"type" => "dropdown",
              							"class" => "",
              							"heading" => esc_html__("Box border type", "keydesign"),
              							"param_name" =>	"border_type",
              							"value" =>	array(
              								esc_html__( 'None', 'keydesign' ) => 'none',
              								esc_html__( 'Select border color', 'keydesign' )	=> 'custom_border_color',
              							),
                            "dependency" =>	array(
                								"element" => "background_type",
                								"value" => array( "custom_bg_color", "custom_bg_image" ),
      							        ),
              							"save_always" => true,
              							"description" => esc_html__("Select box border type.", "keydesign"),
            						),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Border color", "keydesign"),
                            "param_name" => "border_color",
                            "value" => "",
                            "dependency" =>	array(
                								"element" => "border_type",
                								"value" => array( "custom_border_color" ),
      							        ),
                            "description" => esc_html__("Choose box border color. If none selected, the default theme border color will be used.", "keydesign"),
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
                            "heading" => esc_html__("Animation Delay", "keydesign"),
                            "param_name" => "ib_animation_delay",
                            "value" => array(
                                "0 ms"              => "",
                                "200 ms"            => "200",
                                "400 ms"            => "400",
                                "600 ms"            => "600",
                                "800 ms"            => "800",
                                "1 s"            => "1000",
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
                            "param_name" => "ib_extra_class",
                            "value" => "",
                            "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign")
                        ),

                    )
                ));
            }
        }



		// Render the element on front-end

        public function kd_iconbox_shrt($atts, $content = null)
        {

            // Declare empty vars
            $output = $content_icon = $icons = $icon_position_class = $content_alignment_class = $link_title = $link_target = $icon_color_style = $icon_size_style =
            $normal_bg = $normal_border = $box_border_class = $theme_primary_color = $bg_extra_class = $animation_delay = $wrapper_class = $bg_image = $bg_image_data = $bg_image_src = $box_bg_image = $bg_class = '';

            extract(shortcode_atts(array(
                'icon_type' => '',
                'title' => '',
                'title_size' => '',
                'title_color' => '',
	              'box_content_type' => '',
                'text_box' => '',
                'text_color' => '',
                'icon_type' => '',
                'icon_library' => '',
                'icon_iconsmind' => '',
                'icon_fontawesome' => '',
                'icon_color' => '',
                'icon_size' => '',
                'icon_img' => '',
                'icon_img_size' => '',
                'icon_position' => '',
                'content_alignment' => '',
                'custom_link' => '',
                'link_text' => '',
                'link_color' => '',
                'iconbox_link' => '',
                'background_type' => '',
                'background_color' => '',
                'background_image_source' => '',
                'background_image' => '',
                'background_ext_image' => '',
                'border_type' => '',
                'border_color' => '',
                'css_animation' => '',
                'ib_animation_delay' => '',
                'ib_extra_class' => '',
            ), $atts));

            if (strlen($icon_iconsmind) > 0) {
                $icons = $icon_iconsmind;
            } else {
                $icons = $icon_fontawesome;
            }

            if ($icon_color !== '') {
              $icon_color_style = 'color: '.$icon_color.';';
            }

            if ($icon_size !== '') {
              $icon_size_style = 'font-size: '.$icon_size.';';
            }

            $href = vc_build_link($iconbox_link);
            if ($href['target'] == "") { $href['target'] = "_self"; }

      			if($href['url'] !== '') {
      				$link_target = ($href['target']) ? ' target="'.$href['target'].'"' : 'target="_self"';
      				$link_title = ($href['title']) ? ' title="'.$href['title'].'"' : '';
      			}

            if ( $icon_type == 'icon_browser' ) {
				          $content_icon = '<i class="'.$icons .' fa" style="'.$icon_size_style.' '.$icon_color_style.'"></i> ';
            } elseif ( $icon_type == 'custom_icon' && !empty($icon_img) ) {
				          $tt_iconbox_img_array = wpb_getImageBySize ( $params = array( 'post_id' => NULL, 'attach_id' => $icon_img, 'thumb_size' => 'full', 'class' => "" ) );
			            $content_icon = '<div class="tt-iconbox-customimg '.$icon_img_size.'">'.$tt_iconbox_img_array['thumbnail'].'</div>';
			      }

            // Box background image settings

            if ( $background_image_source == 'media_library' && '' != $background_image ) {
              $bg_image = intval( $background_image );
            	$bg_image_data = wp_get_attachment_image_src( $bg_image, 'large' );
            	$bg_image_src = $bg_image_data[0];
            }

            if ( $background_image_source == 'external_link' && '' != $background_ext_image ) {
              $box_bg_image = $background_ext_image;
            } elseif ( $background_image_source == 'media_library' && '' != $background_image ) {
              $box_bg_image = $bg_image_src;
            }

            // Content alignment in box
            if( $content_alignment == 'content_center' ) {
                $content_alignment_class = 'cont-center';
            }
            elseif ( $content_alignment == 'content_left' ) {
                $content_alignment_class = 'cont-left';
            }
            elseif ( $content_alignment == 'content_right' ) {
                $content_alignment_class = 'cont-right';
            }


            // Icon position class
            if ( $icon_position == 'icon_top' ) {
                $icon_position_class = 'icon-top';
            } elseif ( $icon_position == 'icon_left' ) {
                $icon_position_class = 'icon-left';
            }

            //Background type
            switch($background_type){
      				case 'none':
      					$normal_bg = 'background-color: transparent';
      				break;

      				case 'custom_bg_color':
                if ($background_color != '') {
                  $normal_bg = 'background-color: '.$background_color;
                } else {
                  $normal_bg = 'background-color: transparent';
                }
      				break;

              case 'custom_bg_image':
                if ( $box_bg_image != '' ) {
                  $normal_bg = 'background-image: url('.$box_bg_image.')';
                } else {
                  $normal_bg = 'background-color: transparent';
                }
              break;

      				default:
      			}

            //Border type
            switch($border_type){
      				case 'none':
      					$normal_border = 'border: none;';
      				break;

      				case 'custom_border_color':
                if ($border_color != '') {
	                $normal_border = 'border: 1px solid ' . $border_color . ';';
                } else {
                  $normal_border = '';
                }
      				break;

      				default:
      			}

            if ($border_type == 'custom_border_color') {
              $box_border_class = 'with-border';
            }

            //CSS Animation
            if ($css_animation == "no_animation") {
                $css_animation = "";
            }

            // Animation delay
            if ($ib_animation_delay) {
                $animation_delay = 'data-animation-delay='.$ib_animation_delay;
            }

            // Check if background color matches theme primary colorpicker
            $redux_ThemeTek = get_option( 'redux_ThemeTek' );
            $theme_primary_color = $redux_ThemeTek['tek-main-color'];
            if ($theme_primary_color == $background_color) {
              $bg_extra_class = "iconbox-main-color";
            }

            // Add class on wrapper if box has background color and image
            if ( $background_type == 'custom_bg_color' ) {
              $bg_class = 'box-bg-color';
            } elseif ( $background_type == 'custom_bg_image' ) {
              $bg_class = 'box-bg-image';
            }

            $wrapper_class = implode(' ', array('key-icon-box', 'icon-default', $icon_position_class, $content_alignment_class, $box_border_class, $bg_class, $css_animation, $ib_extra_class));

            $output .= '<div class="'.trim($wrapper_class).'" '.(!empty($background_type) ? 'style="'.$normal_bg.'; '.$normal_border.'"' : '').' '.$animation_delay.'>';
                if ($custom_link == "ib-box-link") {
                  $output .= '<a href="'.$href['url'].'"'.$link_target.$link_title.'>';
                }

                if ($background_type != "none") {
                  $output .= '<div class="ib-wrapper">';
                }

                if ($icon_type != "no_icon") {
                  if ($custom_link == "ib-icon-link") {
                    $output .= '<a href="'.$href['url'].'"'.$link_target.$link_title.'>' . $content_icon . '</a>';
                  } else {
                    $output .= $content_icon;
                  }
                }

                if (  '' != $title && $title_size == "small-title" ) {
                  $output .= '<h6 class="service-heading" '.(!empty($title_color) ? 'style="color: '.$title_color.';"' : '').'>'.$title.'</h6>';
                } elseif ( '' != $title && $title_size == "large-title" ) {
                  $output .= '<h4 class="service-heading" '.(!empty($title_color) ? 'style="color: '.$title_color.';"' : '').'>'.$title.'</h4>';
                } elseif ( '' != $title && '' != $title_size ) {
                  $output .= '<'.esc_attr( $title_size ).' class="service-heading" '.(!empty($title_color) ? 'style="color: '.$title_color.';"' : '').'>'.$title.'</'.esc_attr( $title_size ).'>';
                }

                if ($box_content_type == "html_content") {
        					if($content != '') {
        						$output .= '<p '.(!empty($text_color) ? 'style="color: '.$text_color.';"' : '').'>'.do_shortcode($content).'</p>';
        					}
        				} else {
                  if ( !empty($text_box) ) {
        					  $output .= '<p '.(!empty($text_color) ? 'style="color: '.$text_color.';"' : '').'>'.$text_box.'</p>';
        					}
                }

                if ($custom_link == "1") {
                  $output .= '<p class="ib-link '.$bg_extra_class.'"><a href="'.$href['url'].'"'.$link_target.''.$link_title.' '.(!empty($link_color) ? 'style="color: '.$link_color.';"' : '').'>'.$link_text.'</a></p>';
                }

                if ($background_type != "none") {
                  $output .= '</div>';
                }

                if ($custom_link == "ib-box-link") {
                  $output .= '</a>';
                }
            $output .= '</div>';
            return $output;

        }
    }
}

if (class_exists('KD_ELEM_ICON_BOX')) {
    $KD_ELEM_ICON_BOX = new KD_ELEM_ICON_BOX;
}

?>
