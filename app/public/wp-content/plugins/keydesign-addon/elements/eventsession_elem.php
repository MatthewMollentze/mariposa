<?php

if (!class_exists('KD_ELEM_EVENT_SESSION')) {

    class KD_ELEM_EVENT_SESSION extends KEYDESIGN_ADDON_CLASS {

        function __construct() {
            add_action('init', array($this, 'kd_eventsession_init'));
            add_shortcode('tek_eventsession', array($this, 'kd_eventsession_shrt'));
        }

        // Element configuration in admin

        function kd_eventsession_init() {
            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Event session", "keydesign"),
                    "description" => esc_html__("Event schedule session.", "keydesign"),
                    "base" => "tek_eventsession",
                    "class" => "",
                    "icon" => plugins_url('assets/element_icons/schedule.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "params" => array(

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Session time", "keydesign"),
                            "param_name" => "es_session_time",
                            "admin_label" => true,
                            "value" => "",
		                        "description" => esc_html__("Add a session time.", "keydesign"),
                         ),
                         array(
                             "type" => "textfield",
                             "class" => "",
                             "heading" => esc_html__("Session title", "keydesign"),
                             "param_name" => "es_session_title",
                             "admin_label" => true,
                             "value" => "",
		                         "description" => esc_html__("Add a session title.", "keydesign"),
                          ),
                          array(
                              "type" => "textarea",
                              "class" => "",
                              "heading" => esc_html__("Session summary", "keydesign"),
                              "param_name" => "es_session_description",
                              "value" => "",
                              "description" => esc_html__("Add a session summary.", "keydesign")
                          ),
                          array(
                              "type" => "textfield",
                              "class" => "",
                              "heading" => esc_html__("Person name", "keydesign"),
                              "param_name" => "es_speaker_name",
                              "admin_label" => true,
                              "value" => "",
		                          "description" => esc_html__("Name of the person in charge for this session.", "keydesign"),
                          ),
                          array(
                              "type" => "textfield",
                              "class" => "",
                              "heading" => esc_html__("Person job", "keydesign"),
                              "param_name" => "es_speaker_position",
                              "value" => "",
		                          "description" => esc_html__("Write the person job title.", "keydesign"),
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
                              "class" => "",
                              "heading" => esc_html__("Person image", "keydesign"),
                              "param_name" => "es_image",
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
                              "heading" => esc_html__("Person external image", "keydesign"),
                              "param_name" => "ext_image",
                              "value" => "",
                              "description" => esc_html__("Enter image external link.", "keydesign"),
                              "dependency" =>	array(
                                  "element" => "image_source",
                                  "value" => array("external_link")
                              ),
                          ),
                          array(
                               "type"	=>	"dropdown",
                               "class" =>	"",
                               "heading" => esc_html__("Link type", "keydesign"),
                               "param_name" => "es_custom_link",
                               "value" =>	array(
                                      esc_html__( "No link", "keydesign" ) => "#",
                                      esc_html__( "Add a custom link", "keydesign" )	=> "1",
                                  ),
                               "save_always" => true,
                               "description" => esc_html__("You can add/remove custom link", "keydesign"),
                          ),
                          array(
                              "type" => "textfield",
                              "class" => "",
                              "heading" => esc_html__("Link text", "keydesign"),
                              "param_name" => "es_link_text",
                              "value" => "",
                              "description" => esc_html__("Enter link text here.", "keydesign"),
                              "dependency" => array(
                                 "element" => "es_custom_link",
                                 "value"	=> array( "1" ),
                             ),
                          ),
                          array(
                               "type"	=>	"vc_link",
                               "class" =>	"",
                               "heading" => esc_html__("Link settings", "keydesign"),
                               "param_name" => "es_link",
                               "value" =>	"",
                               "description" => esc_html__("You can add or remove the existing link from here.", "keydesign"),
                               "dependency" => array(
                                  "element" => "es_custom_link",
                                  "value"	=> array( "1" ),
                              ),
                          ),
                          array(
                              "type"			=>	"dropdown",
                              "class"			=>	"",
                              "heading"		=>	esc_html__("Expand element","keydesign"),
                              "param_name"	=>	"es_expanded",
                              "value"			=>	array(
                                      "No" => "es_collapsed",
                                      "Yes" => "es_expand",
                                  ),
                              "save_always" => true
                          ),
                          array(
                              "type" => "colorpicker",
                              "class" => "",
                              "heading" => esc_html__("Box background color", "keydesign"),
                              "param_name" => "es_background_color",
                              "value" => "",
                              "description" => esc_html__("Select box background color. If none selected, the default theme color will be used.", "keydesign"),
                          ),
                          array(
                              "type" => "textfield",
                              "class" => "",
                              "heading" => esc_html__("Extra class name", "keydesign"),
                              "param_name" => "es_extra_class",
                              "value" => "",
                              "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign")
                          ),
                    )
                ));
            }
        }



		// Render the element on front-end

        public function kd_eventsession_shrt($atts, $content = null)
        {

            // Include required JS and CSS files
	          wp_enqueue_script('kd_jquery_appear');

            // Declare empty vars
            $output = $speaker_image = $href = $link_target = $link_title = $es_unique_id = $expand_class = $content_image = '';

            extract(shortcode_atts(array(
                'es_session_time' => '',
                'es_session_title' => '',
                'es_session_description' => '',
                'es_speaker_name' => '',
                'es_speaker_position' => '',
                'image_source' => '',
                'es_image' => '',
                'ext_image' => '',
                'es_custom_link' => '',
                'es_link_text' => '',
                'es_link' => '',
                'es_expanded' => '',
                'es_background_color' => '',
                'es_extra_class' => '',
            ), $atts));

            $es_unique_id = 'esaccid'.mt_rand(999, 9999999);

            $default_src = vc_asset_url( 'vc/no_image.png' );
            if ($image_source == 'external_link') {
              if (!$ext_image) {
                $content_image .='<img src="'.$default_src.'" class="vc_img-placeholder" />';
              } else {
                $content_image .='<img src="'.$ext_image.'" />';
              }
            } else {
              $speaker_img_array = wpb_getImageBySize ( $params = array( 'post_id' => NULL, 'attach_id' => $es_image, 'thumb_size' => 'full', 'class' => "" ) );
      				$content_image = $speaker_img_array['thumbnail'];
            }

            $href = vc_build_link($es_link);
            if ($href['target'] == "") { $href['target'] = "_self"; }

      			if($href['url'] !== '') {
      				$link_target = (isset($href['target'])) ? ' target="'.$href['target'].'"' : 'target="_self"';
      				$link_title = (isset($href['title'])) ? ' title="'.$href['title'].'"' : '';
      			}

            $es_no_description ='';
            if($es_session_description == '') {
                $es_no_description = 'es_no_description';
            }

            switch($es_expanded){
      				case 'es_collapsed':
      					$expand_class = "es-collapsed";
      				break;
              case 'es_expand':
      					$expand_class = "es-expanded";
      				break;

      				default:
      			}


            $output = '<div class="es-accordion '.$es_no_description.' '.$es_extra_class.'" id="'.$es_unique_id.'" '.(!empty($es_background_color) ? 'style="background-color: '.$es_background_color.';"' : '').'>
                            <div class="es-heading '.$expand_class.'">';
                                if ($es_session_time != '') {
                                    $output .= '<span class="es-time"><i class="far fa-clock"></i>'.$es_session_time.'</span>';
                                }
                                $output .= '<h4>';
                                if ($es_expanded == 'es_expand') {
                                    $output .= '<a data-toggle="collapse" data-parent="#'.$es_unique_id.'" href="#tabid'.strtolower(md5($es_unique_id)).'" aria-expanded="true">'.$es_session_title.' <i class="fas fa-angle-down"></i></a>';
                                } elseif ($es_expanded == 'es_collapsed')  {
                                    $output .= '<a class="collapsed" data-toggle="collapse" data-parent="#'.$es_unique_id.'" href="#tabid'.strtolower(md5($es_unique_id)).'">'.$es_session_title.' <i class="fas fa-angle-down"></i></a>';
                                }
                                $output .= '</h4>
                            </div>';
                            if ($es_expanded == 'es_expand') {
                                $output .= '<div id="tabid'.strtolower(md5($es_unique_id)).'" class="panel-collapse collapse in" aria-expanded="true" role="tabpanel">';
                            } elseif ($es_expanded == 'es_collapsed')  {
                                $output .= '<div id="tabid'.strtolower(md5($es_unique_id)).'" class="panel-collapse collapse" role="tabpanel">';
                            }
						    $output .= '<div class="es-speaker-container">
                    <div class="es-speaker-img">'.$content_image.'</div>
                    <div class="es-speaker-name">'.$es_speaker_name.'</div>
                    <div class="es-speaker-position">'.$es_speaker_position.'</div>
                </div>
                <div class="es-session-desc"><div class="es-desc-wrapper">'.wpb_js_remove_wpautop($es_session_description, true).'</div>';
                if ($es_custom_link == "1") {
                  $output .= '<div class="es-link"><a href="'.$href['url'].'"'.$link_target.''.$link_title.'>'.$es_link_text.'</a></div>';
                }
  						$output .= '</div></div>
            </div>';

            return $output;

        }
    }
}

if (class_exists('KD_ELEM_EVENT_SESSION')) {
    $KD_ELEM_EVENT_SESSION = new KD_ELEM_EVENT_SESSION;
}

?>
