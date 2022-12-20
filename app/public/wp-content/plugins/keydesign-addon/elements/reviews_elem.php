<?php

if (!class_exists('KD_ELEM_REVIEWS')) {

    class KD_ELEM_REVIEWS extends KEYDESIGN_ADDON_CLASS {

        function __construct() {
            add_action('init', array($this, 'kd_reviews_init'));
            add_shortcode('tek_reviews', array($this, 'kd_reviews_shrt'));
        }

        // Element configuration in admin

        function kd_reviews_init() {

            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Review box", "keydesign"),
                    "description" => esc_html__("Display reviews with ratings.", "keydesign"),
                    "base" => "tek_reviews",
                    "class" => "",
                    "icon" => plugins_url('assets/element_icons/reviews.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "params" => array(

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Author name", "keydesign"),
                            "param_name" => "rw_author_name",
                            "admin_label" => true,
                            "value" => "",
		                        "description" => esc_html__("Write the review author name.", "keydesign"),
                            "group" => esc_html__("Content", "keydesign"),
                         ),

                         array(
                             "type" => "colorpicker",
                             "class" => "",
                             "heading" => esc_html__("Author name text color", "keydesign"),
                             "param_name" => "rw_author_name_color",
                             "value" => "",
                             "description" => esc_html__("Choose author name text color. If none selected, the default theme color will be used.", "keydesign"),
                             "group" => esc_html__("Design", "keydesign"),
                         ),

                         array(
                             "type" => "textfield",
                             "class" => "",
                             "heading" => esc_html__("Author description", "keydesign"),
                             "param_name" => "rw_author_desc",
                             "value" => "",
			                       "description" => esc_html__("Write the review author description.", "keydesign"),
                             "group" => esc_html__("Content", "keydesign"),
                        ),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Author description text color", "keydesign"),
                            "param_name" => "rw_author_desc_color",
                            "value" => "",
                            "description" => esc_html__("Choose author description text color. If none selected, the default theme color will be used.", "keydesign"),
                            "group" => esc_html__("Design", "keydesign"),
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
                            "group" => esc_html__("Image", "keydesign"),
                        ),

                        array(
                            "type" => "attach_image",
                            "class" => "",
                            "heading" => esc_html__("Author image", "keydesign"),
                            "param_name" => "rw_author_image",
                            "value" => "",
                            "description" => esc_html__("Select or upload author profile image using the media library.", "keydesign"),
                            "dependency" =>	array(
                                "element" => "image_source",
                                "value" => array("media_library")
                            ),
                            "group" => esc_html__("Image", "keydesign"),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Author image external source", "keydesign"),
                            "param_name" => "ext_image",
                            "value" => "",
                            "description" => esc_html__("Enter image external link.", "keydesign"),
                            "dependency" =>	array(
                                "element" => "image_source",
                                "value" => array("external_link")
                            ),
                            "group" => esc_html__("Image", "keydesign"),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Author image size", "keydesign"),
                            "param_name" => "ext_image_size",
                            "value" => "",
                            "description" => esc_html__("Enter image size in pixels. Example: 230x400 (Width x Height).", "keydesign"),
                            "dependency" =>	array(
                                "element" => "image_source",
                                "value" => array("external_link")
                            ),
                            "group" => esc_html__("Image", "keydesign"),
                        ),

                        array(
                            "type" => "textarea",
                            "class" => "",
                            "heading" => esc_html__("Review message", "keydesign"),
                            "param_name" => "rw_review_message",
                            "value" => "",
                            "description" => esc_html__("Write the review message.", "keydesign"),
                            "group" => esc_html__("Content", "keydesign"),
                        ),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Review message text color", "keydesign"),
                            "param_name" => "rw_review_message_color",
                            "value" => "",
                            "description" => esc_html__("Choose review message text color. If none selected, the default theme color will be used.", "keydesign"),
                            "group" => esc_html__("Design", "keydesign"),
                        ),

                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Show star rating","keydesign"),
                            "param_name"    =>  "rw_show_review_rating",
                            "value"         =>  array(
                                    "Show star rating"   => "show_stars",
                                    "Hide star rating"   => "hide_stars"
                                ),
                            "save_always" => true,
                            "description"   =>  esc_html__("Display stars rating.", "keydesign"),
                            "group" => esc_html__("Content", "keydesign"),
                        ),

                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Review rating","keydesign"),
                            "param_name"	=>	"rw_review_rating",
                            "value"			=>	array(
                                    "1 star"   => "one_star",
                                    "2 stars"  => "two_stars",
                                    "3 stars"  => "three_stars",
                                    "4 stars"  => "four_stars",
                                    "5 stars"  => "five_stars",
                                ),
                            "save_always" => true,
                            "dependency" =>	array(
                                "element" => "rw_show_review_rating",
                                "value" => array("show_stars")
                            ),
                            "description"	=>	esc_html__("Select review rating.", "keydesign"),
                            "group" => esc_html__("Content", "keydesign"),
                        ),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Star color", "keydesign"),
                            "param_name" => "rw_star_color",
                            "value" => "",
                            "dependency" =>	array(
                                "element" => "rw_show_review_rating",
                                "value" => array("show_stars")
                            ),
                            "description" => esc_html__("Choose star color.", "keydesign"),
                            "group" => esc_html__("Design", "keydesign"),
                        ),

                        array(
                             "type"	=>	"dropdown",
                             "class" =>	"",
                             "heading" => esc_html__("Link settings", "keydesign"),
                             "param_name" => "rw_link_settings",
                             "value" =>	array(
                                    esc_html__( 'No link', 'keydesign' ) => 'no_link',
                                    esc_html__( 'Simple link', 'keydesign' )	=> 'simple_link',
                                ),
                             "save_always" => true,
                             "description" => esc_html__("You can add or remove the custom link.", "keydesign"),
                             "group" => esc_html__("Link", "keydesign"),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Link text", "keydesign"),
                            "param_name" => "rw_link_text",
                            "value" => "",
                            "description" => esc_html__("Enter link text.", "keydesign"),
                            "dependency" =>	array(
                                "element" => "rw_link_settings",
                                "value" => array("simple_link"),
                            ),
                            "group" => esc_html__("Link", "keydesign"),
                        ),

                        array(
                            "type" => "href",
                            "class" => "",
                            "heading" => esc_html__("Link URL", "keydesign"),
                            "param_name" => "rw_link_url",
                            "value" => "",
                            "dependency" => array(
                               "element" => "rw_link_settings",
                               "value"	=> array( "simple_link" ),
                           ),
                           "group" => esc_html__("Link", "keydesign"),
                        ),

                        array(
                      			'type' => 'dropdown',
                      			'heading' => __( 'Link target', 'keydesign' ),
                      			'param_name' => 'rw_link_target',
                            "value" => array(
            									esc_html__( 'Same window', 'keydesign' ) => '_self',
            									esc_html__( 'New window', 'keydesign' ) => '_blank',
            								),
                            "save_always" => true,
                            "dependency" => array(
                               "element" => "rw_link_settings",
                               "value"	=> array( "simple_link" ),
                           ),
                           "group" => esc_html__("Link", "keydesign"),
                    		),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Link color", "keydesign"),
                            "param_name" => "rw_link_color",
                            "value" => "",
                            "dependency" => array(
                               "element" => "rw_link_settings",
                               "value"	=> array( "simple_link" ),
                           ),
                            "description" => esc_html__("Select link color. If none selected, the default theme color will be used.", "keydesign"),
                            "group" => esc_html__("Link", "keydesign"),
                        ),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Box background color", "keydesign"),
                            "param_name" => "rw_box_background",
                            "value" => "",
                            "description" => esc_html__("Choose review box background color. If none selected, the default theme color will be used.", "keydesign"),
                            "group" => esc_html__("Design", "keydesign"),
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
                            "group" => esc_html__( "Extras", "keydesign" ),
                         ),

                         array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Animation Delay", "keydesign"),
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
                            "group" => esc_html__( "Extras", "keydesign" ),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Extra class name", "keydesign"),
                            "param_name" => "rw_extra_class",
                            "value" => "",
                            "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign"),
                            "group" => esc_html__( "Extras", "keydesign" ),
                        ),

                    )
                ));
            }
        }



		// Render the element on front-end

        public function kd_reviews_shrt($atts, $content = null)
        {
            extract(shortcode_atts(array(
                'rw_author_name' => '',
                'rw_author_name_color' => '',
                'rw_author_desc' => '',
                'rw_author_desc_color' => '',
                'image_source' => '',
                'rw_author_image' => '',
                'ext_image' => '',
                'ext_image_size' => '',
                'rw_review_message' => '',
                'rw_review_message_color' => '',
                'rw_show_review_rating' => '',
                'rw_review_rating' => '',
                'rw_star_color' => '',
                'rw_link_settings' => '',
                'rw_link_text' => '',
                'rw_link_url' => '',
                'rw_link_target' => '',
                'rw_link_color' => '',
                'rw_box_background' => '',
                'css_animation' => '',
                'elem_animation_delay' => '',
                'rw_extra_class' => '',
            ), $atts));

            $author_img = $full_star = $empty_star = $rating_stars = $rw_author_img_array = $author_image = $animation_delay = $dimensions = $hwstring = '';

            $full_star = '<span class="fa fa-star" '.(!empty($rw_star_color) ? 'style="color: '.$rw_star_color.';"' : '').'></span>';
            $empty_star = '<span class="fa fa-star-o" '.(!empty($rw_star_color) ? 'style="color: '.$rw_star_color.';"' : '').'></span>';

            switch($rw_review_rating){
      				case 'one_star':
      					$rating_stars = $full_star.str_repeat($empty_star, 4);
      				break;

                      case 'two_stars':
      					$rating_stars = str_repeat($full_star, 2).str_repeat($empty_star, 3);
      				break;

                      case 'three_stars':
      					$rating_stars = str_repeat($full_star, 3).str_repeat($empty_star, 2);
      				break;

                      case 'four_stars':
      					$rating_stars = str_repeat($full_star, 4).$empty_star;
      				break;

                      case 'five_stars':
      					$rating_stars = str_repeat($full_star, 5);
      				break;

      				default:
      			}

            $dimensions = vc_extract_dimensions( $ext_image_size );
            $hwstring = $dimensions ? image_hwstring( $dimensions[0], $dimensions[1] ) : '';

            if ($image_source == 'external_link') {
              if (!empty($ext_image)) {
                $author_image .='<img src="'.$ext_image.'" '.$hwstring.' />';
              }
            } elseif(!empty($rw_author_image)) {
              $rw_author_img_array = wpb_getImageBySize ( $params = array( 'post_id' => NULL, 'attach_id' => $rw_author_image, 'thumb_size' => 'full', 'class' => "" ) );
              $author_image = $rw_author_img_array['thumbnail'];
            }

            //CSS Animation
            if ($css_animation == "no_animation") {
                $css_animation = "";
            }

            // Animation delay
            if ($elem_animation_delay) {
                $animation_delay = 'data-animation-delay='.$elem_animation_delay;
            }

            $output = '
                <div class="key-reviews single-review-box '.$css_animation.' '.$rw_extra_class.'" '.(!empty($rw_box_background) ? 'style="background-color: '.$rw_box_background.';"' : '').' '.$animation_delay.'>';
                    if (!empty($rw_author_image) || !empty($ext_image)) {
                      $output .= '<div class="rw_img_wrapper">
                          <div class="rw-authorimg">'.$author_image.'</div>
                      </div>';
                    }

                    $output .= '<div class="rw-author-details">
                      <h5 '.(!empty($rw_author_name_color) ? 'style="color: '.$rw_author_name_color.';"' : '').'>'.$rw_author_name.'</h5>
                      <p '.(!empty($rw_author_desc_color) ? 'style="color: '.$rw_author_desc_color.';"' : '').'>'.$rw_author_desc.'</p>
                    </div>';
                    if ($rw_review_message) {
                      $output .= '<div class="rw_message" '.(!empty($rw_review_message_color) ? 'style="color: '.$rw_review_message_color.';"' : '').'>'.$rw_review_message.'</div>';
                    }

                    if ( $rw_link_settings == 'simple_link' && $rw_link_text != '' && $rw_link_url != '') {
                      $output .= '<div class="rw-link"><a href="'.esc_url( $rw_link_url ).'" target="'.esc_attr( $rw_link_target ).'" '.(!empty($rw_link_color) ? 'style="color: '.$rw_link_color.';"' : '').'>'.esc_html( $rw_link_text ).'</a></div>';
                    }

                    if ( $rw_show_review_rating !== "hide_stars" ) {
                      $output .= '<div class="rw_rating">
                         '.$rating_stars.'
                      </div>';
                    }
                $output .= '</div>';

            return $output;



        }
    }
}

if (class_exists('KD_ELEM_REVIEWS')) {
    $KD_ELEM_REVIEWS = new KD_ELEM_REVIEWS;
}

?>
