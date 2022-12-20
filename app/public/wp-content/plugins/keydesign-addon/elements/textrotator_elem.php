<?php

if (!class_exists('KD_ELEM_TEXT_ROTATOR')) {

    class KD_ELEM_TEXT_ROTATOR extends KEYDESIGN_ADDON_CLASS {

        function __construct() {
            add_action('init', array($this, 'kd_textrotator_init'));
            add_shortcode('tek_textrotator', array($this, 'kd_textrotator_shrt'));
        }

        // Element configuration in admin

        function kd_textrotator_init() {
            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Text rotator", "keydesign"),
                    "description" => esc_html__("Simple shortcode to rotate your texts.", "keydesign"),
                    "base" => "tek_textrotator",
                    "class" => "",
                    "icon" => plugins_url('assets/element_icons/text-rotator.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "params" => array(
                      array(
                          "type" => "param_group",
                          "class" => "",
                          "heading" => esc_html__("Text fields", "keydesign"),
                          "value" => "",
                          "param_name" => "tr_text_fields",
                          "params" => array(
                              array(
                                  "type" => "textfield",
                                  "heading" => __("Single item","keydesign"),
                                  "param_name" => "tr_text_item",
                                  "description" =>"",
                                  "admin_label" => true,
                              ),
                        ),
                      ),

                      array(
                          "type"			=>	"dropdown",
                          "class"			=>	"",
                          "heading"		=>	esc_html__("Text align","keydesign"),
                          "param_name"	=>	"tr_text_align",
                          "value"			=>	array(
                              "Left" => "text-left",
                              "Center" => "text-center",
                              "Right" => "text-right",
                          ),
                          "save_always" => true,
                          "description"	=>	esc_html__("Select text align.", "keydesign"),
                      ),

                      array(
                          "type" => "colorpicker",
                          "class" => "",
                          "heading" => esc_html__("Text color", "keydesign"),
                          "param_name" => "tr_text_color",
                          "value" => "",
                          "description" => esc_html__("Select text color. If none selected, the default theme color will be used.", "keydesign"),
                      ),

                      array(
                          "type" => "textfield",
                          "class" => "",
                          "heading" => esc_html__("Font size", "keydesign"),
                          "param_name" => "tr_font_size",
                          "value" => "",
                          "description" => esc_html__("Enter text font size. (eg. 20px, 2em, 2rem)", "keydesign"),
                      ),

                      array(
                          "type"			=>	"dropdown",
                          "class"			=>	"",
                          "heading"		=>	esc_html__("Animation speed","keydesign"),
                          "param_name"	=>	"tr_speed",
                          "value"			=>	array(
                              "Default (1s until the next word show)" => "",
                              "Slow (2s)" => "slow-text-rotator",
                              "Slower (3s)" => "slower-text-rotator",
                              "Slowest (5s)" => "slowest-text-rotator",
                          ),
                          "save_always" => true,
                          "description"	=>	esc_html__("Select animation speed.", "keydesign"),
                      ),

                      array(
                          "type" => "textfield",
                          "class" => "",
                          "heading" => esc_html__("Extra class name", "keydesign"),
                          "param_name" => "tr_extra_class",
                          "value" => "",
                          "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign")
                      ),

                    )
                ));
            }
        }



	      // Render the element on front-end
        public function kd_textrotator_shrt($atts, $content = null) {

            extract(shortcode_atts(array(
              'tr_text_fields' => '',
              'tr_text_align' => '',
              'tr_text_color' => '',
              'tr_font_size' => '',
              'tr_speed' => '',
              'tr_extra_class' => '',
            ), $atts));

            $text_rotator_container = $kd_rotator_id = $i = $j = $output = $item_increment_class = $last_elem_class = $last_elem_style = $numItems = '';

            $kd_rotator_id = "kd-rotatorid-".uniqid();

            $output .= '<div class="kd-text-rotator '.$kd_rotator_id.' '.$tr_text_align.' '.$tr_speed.' '.$tr_extra_class.'">';
            // Text rotator container
            $text_rotator_container .= '<div class="kd-text-rotator-container">';
            $tr_text_fields = json_decode( urldecode( $tr_text_fields ), true );


            if( isset( $tr_text_fields ) ) {
              $i = 1;
              $j = 0;
              $numItems = count($tr_text_fields);
              foreach ( $tr_text_fields as $tr_text_fields_data ){
                if(++$j === $numItems) {
                  $j++;
                  $last_elem_class = 'last';
                  if ($tr_speed == 'slow-text-rotator') {
                    $last_elem_style = 'transition: all 0.5s '.(1+$j*2-4).'s;';
                  } elseif ($tr_speed == 'slower-text-rotator') {
                    $last_elem_style = 'transition: all 0.5s '.(1+$j*3-6).'s;';
                  } elseif ($tr_speed == 'slowest-text-rotator') {
                    $last_elem_style = 'transition: all 0.5s '.(1+$j*5-10).'s;';
                  } else {
                    $last_elem_style = 'transition: all 0.5s '.(0.5+$j*1.25-2.5).'s;';
                  }
                }
                $item_increment_class = 'kd-rotator-item-'.$i++;
                $text_rotator_container .= '<h2 class="rotator-single '.$item_increment_class.' '.$last_elem_class.'" style="'.$last_elem_style . (!empty($tr_text_color) ? ' color: '.$tr_text_color.';' : '') . (!empty($tr_font_size) ? ' font-size: '.$tr_font_size.';' : '').'">';
                if ( isset( $tr_text_fields_data["tr_text_item"] ) ){
                  $text_rotator_container .= $tr_text_fields_data["tr_text_item"];
                }
                $text_rotator_container .= '</h2>';
              }
            }

					  $text_rotator_container .= '</div>';

            $output .= $text_rotator_container;
            $output .= '</div>';

            return $output;
        }
    }
}

if (class_exists('KD_ELEM_TEXT_ROTATOR')) {
    $KD_ELEM_TEXT_ROTATOR = new KD_ELEM_TEXT_ROTATOR;
}

?>
