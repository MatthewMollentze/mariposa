<?php

if (!class_exists('KD_ELEM_PRICE_BLOCK')) {

    class KD_ELEM_PRICE_BLOCK extends KEYDESIGN_ADDON_CLASS {

        function __construct() {
            add_action('init', array($this, 'kd_priceblock_init'));
            add_shortcode('tek_priceblock', array($this, 'kd_priceblock_shrt'));
        }

        // Element configuration in admin

        function kd_priceblock_init() {
            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Price block", "keydesign"),
                    "description" => esc_html__("Price block with thumb image.", "keydesign"),
                    "base" => "tek_priceblock",
                    "class" => "",
                    "icon" => plugins_url('assets/element_icons/price-block.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "params" => array(

                         array(
                             "type" => "textfield",
                             "class" => "",
                             "heading" => esc_html__("Block title", "keydesign"),
                             "param_name" => "pb_title",
                             "admin_label" => true,
                             "value" => "",
		                         "description" => esc_html__("Price block title.", "keydesign"),
                             ),
                           array(
                               "type" => "colorpicker",
                               "class" => "",
                               "heading" => esc_html__("Block title color", "keydesign"),
                               "param_name" => "pb_title_color",
                               "value" => "",
                               "description" => esc_html__("Select title color. If none selected, the default theme color will be used.", "keydesign"),
                           ),
                          array(
                              "type" => "textarea",
                              "class" => "",
                              "heading" => esc_html__("Block description", "keydesign"),
                              "param_name" => "pb_description",
                              "value" => "",
                              "description" => esc_html__("Price block description.", "keydesign")
                              ),
                          array(
                              "type" => "colorpicker",
                              "class" => "",
                              "heading" => esc_html__("Block description color", "keydesign"),
                              "param_name" => "pb_description_color",
                              "value" => "",
                              "description" => esc_html__("Select description color. If none selected, the default theme color will be used.", "keydesign"),
                          ),
                              array(
                                  "type" => "dropdown",
                                  "class" => "",
                                  "heading" => esc_html__("Block image source", "keydesign"),
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
                                  "heading" => esc_html__("Block image", "keydesign"),
                                  "param_name" => "pb_image",
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
                                  "heading" => esc_html__("Block external image", "keydesign"),
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
                              "heading" => esc_html__("Price", "keydesign"),
                              "param_name" => "pb_price",
                              "admin_label" => true,
                              "value" => "",
 		                         "description" => esc_html__("Enter product price.", "keydesign"),
                              ),
                          array(
                              "type" => "dropdown",
                              "class" => "",
                              "heading" => esc_html__("Price currency", "keydesign"),
                              "param_name" => "pb_currency",
                              "value" => array(
                                  "Dollar" => "currency-dollar",
                                  "Euro" => "currency-euro",
                                  "Pound" => "currency-pound"
                              ),
                              "save_always" => true,
                              "description" => esc_html__("Select price currency.", "keydesign")
                          ),
                          array(
                              "type" => "textfield",
                              "class" => "",
                              "heading" => esc_html__("Other currency", "keydesign"),
                              "param_name" => "pb_other_currency",
                              "value" => "",
                              "description" => esc_html__("Pricing block custom currency.", "keydesign")
                          ),
                          array(
                              "type" => "dropdown",
                              "class" => "",
                              "heading" => esc_html__("Currency symbol position", "keydesign"),
                              "param_name" => "pb_currency_position",
                              "value" => array(
                                  "Left" => "currency-position-left",
                                  "Right" => "currency-position-right"
                              ),
                              "save_always" => true,
                              "description" => esc_html__("Select price block currency symbol position.", "keydesign")
                          ),
                          array(
                              "type" => "colorpicker",
                              "class" => "",
                              "heading" => esc_html__("Price color", "keydesign"),
                              "param_name" => "pb_price_color",
                              "value" => "",
                              "description" => esc_html__("Select price color. If none selected, the default theme color will be used.", "keydesign"),
                          ),
                          array(
                              "type" => "colorpicker",
                              "class" => "",
                              "heading" => esc_html__("Box background color", "keydesign"),
                              "param_name" => "pb_background_color",
                              "value" => "",
                              "description" => esc_html__("Select box background color. If none selected, the default theme color will be used.", "keydesign"),
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
                              "heading" => esc_html__("Animation Delay:", "keydesign"),
                              "param_name" => "elem_animation_delay",
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
                              "description" => esc_html__("Enter animation delay in ms", "keydesign"),
                              "group" => esc_html__("Extras", "keydesign"),
                          ),
                          array(
                              "type" => "textfield",
                              "class" => "",
                              "heading" => esc_html__("Extra class name", "keydesign"),
                              "param_name" => "pb_extra_class",
                              "value" => "",
                              "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign"),
                              "group" => esc_html__("Extras", "keydesign"),
                          ),
                    )
                ));
            }
        }



		// Render the element on front-end

        public function kd_priceblock_shrt($atts, $content = null)
        {

            // Include required JS and CSS files
	          wp_enqueue_script('kd_jquery_appear');

            // Declare empty vars
            $output = $pb_img_array = $product_image = $currency_symbol = $content_image = $animation_delay = '';

            extract(shortcode_atts(array(
              'pb_title' => '',
              'pb_title_color' => '',
              'pb_description' => '',
              'pb_description_color' => '',
              'image_source' => '',
              'pb_image' => '',
              'ext_image' => '',
              'pb_price' => '',
              'pb_currency' => '',
              'pb_other_currency' => '',
              'pb_currency_position' => '',
              'pb_price_color' => '',
              'pb_background_color' => '',
              'css_animation' => '',
              'elem_animation_delay' => '',
              'pb_extra_class' => '',
            ), $atts));

            switch($pb_currency){
                    case 'currency-dollar':
                        $currency_symbol = "&#36;";
                    break;

                    case 'currency-euro':
                        $currency_symbol = "&#128;";
                    break;

                    case 'currency-pound':
                        $currency_symbol = "&#163;";
                    break;

                    default:
                }

            if (!empty($pb_other_currency)) {
                $currency_symbol = $pb_other_currency;
            }

            $default_src = vc_asset_url( 'vc/no_image.png' );
            if ($image_source == 'external_link') {
              if (!$ext_image) {
                $content_image .='<img src="'.$default_src.'" class="vc_img-placeholder" />';
              } else {
                $content_image .='<img src="'.$ext_image.'" />';
              }
            } else {
              if ( '' != $pb_image ) {
                $block_img_array = wpb_getImageBySize ( $params = array( 'post_id' => NULL, 'attach_id' => $pb_image, 'thumb_size' => 'full', 'class' => "" ) );
        				$content_image = $block_img_array['thumbnail'];
              }
            }

            //CSS Animation
            if ($css_animation == "no_animation") {
                $css_animation = "";
            }

            // Animation delay
            if ($elem_animation_delay) {
                $animation_delay = 'data-animation-delay='.$elem_animation_delay;
            }


            $output = '<div class="kd-price-block '.$css_animation.' '.$pb_extra_class.'" '.(!empty($pb_background_color) ? 'style="background-color: '.$pb_background_color.';"' : '').' '.$animation_delay.'>';
                if ($content_image != '') {
                    $output .= '<div class="pb-image-wrap">'.$content_image.'</div>';
                }
                $output .= '<div class="pb-content-wrap">
                    <h4 '.(!empty($pb_title_color) ? 'style="color: '.$pb_title_color.';"' : '').'>'.$pb_title.'</h4>';
                    if ($pb_currency_position == "currency-position-left") {
    				          $output .= '<div class="pb-pricing-wrap"><span class="pb-price" '.(!empty($pb_price_color) ? 'style="color: '.$pb_price_color.';"' : '').'><span class="pb-currency">'.$currency_symbol.'</span>'.$pb_price.'</span></div>';
                    } elseif ($pb_currency_position == "currency-position-right") {
                      $output .= '<div class="pb-pricing-wrap"><span class="pb-price" '.(!empty($pb_price_color) ? 'style="color: '.$pb_price_color.';"' : '').'>'.$pb_price.'<span class="pb-currency">'.$currency_symbol.'</span></span></div>';
                    }
                    $output .= '<div class="pb-desc-wrap" '.(!empty($pb_description_color) ? 'style="color: '.$pb_description_color.';"' : '').'>'.wpb_js_remove_wpautop($pb_description, true).'</div>';
                $output .= '</div>
            </div>';

            return $output;

        }
    }
}

if (class_exists('KD_ELEM_PRICE_BLOCK')) {
    $KD_ELEM_PRICE_BLOCK = new KD_ELEM_PRICE_BLOCK;
}

?>
