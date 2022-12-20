<?php
if (!class_exists('KD_ELEM_MAP')) {
    class KD_ELEM_MAP extends KEYDESIGN_ADDON_CLASS {
        function __construct() {
            add_action('init', array($this, 'kd_map_init'));
            add_shortcode('tek_map', array($this, 'kd_map_shrt'));
        }


        // Element configuration in admin
        function kd_map_init() {

            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Google map", "keydesign"),
                    "description" => esc_html__("Custom Google Map", "keydesign"),
                    "base" => "tek_map",
                    "class" => "",
                    "icon" => plugins_url('assets/element_icons/google-map.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "params" => array(
                        array(
                          "type" => "kd_param_notice",
                          "text" => "<span style='display: block;'>Google maps requires a valid API key in order to work. You can add it in LeadEngine > Theme Options > Global Options. You can generate a new API key from <a href='https://developers.google.com/maps/faq#new-key' target='_blank' title='Google Maps API'>here</a>.</span>",
                          "param_name" => "notification",
                          'edit_field_class' => 'vc_column vc_col-sm-12',
                        ),
                        array(
          								"type"			=>	"textfield",
          								"class"			=>	"",
          								"heading"		=>	esc_html__("Map name", "keydesign"),
          								"param_name"	=>	"map_name",
          								"value"			=>	"",
          								"description"	=>	esc_html__("Insert a unique map name.", "keydesign"),
          								"save_always"	=>	true,
          							),

                        array(
                            "type"          => "textfield",
                            "class"         => "",
                            "heading"       => esc_html__("Location latitude", "keydesign"),
                            "param_name"    => "map_latitude",
                            "value"         => "",
                            "description"   => esc_html__("Enter location latitude.", "keydesign")
                        ),

                        array(
                            "type"          => "textfield",
                            "class"         => "",
                            "heading"       => esc_html__("Location longitude", "keydesign"),
                            "param_name"    => "map_longitude",
                            "value"         => "",
                            "description"   => esc_html__("Enter location longitude.", "keydesign")
                        ),

                        array(
                            "type"          => "dropdown",
                            "class"         => "",
                            "heading"       => esc_html__("Map zoom", "keydesign"),
                            "param_name"    => "map_zoom",
                            "value"     =>  array(
                                "10 - City" => "10",
                                "11" => "11",
                                "12" => "12",
                                "13" => "13",
                                "14" => "14",
                                "15 - Streets" => "15",
                                "16" => "16",
                                "17" => "17",
                                "18" => "18",
                                "19" => "19",
                                "20 - Buildings" => "20",
                            ),
                            "description"   => esc_html__("Enter map zoom (default 14).", "keydesign")
                        ),
                        array(
            								"type"			=>	"dropdown",
            								"class"			=>	"",
            								"heading"		=>	esc_html__("Map style", "keydesign"),
            								"param_name"	=>	"map_style",
            								"value"			=>	array(
                                esc_html__( 'Grayscale', 'keydesign' ) 			=> 'gmap_style_grayscale',
            										esc_html__( 'Google preset colors', 'keydesign' )	=> 'gmap_style_normal',
            									),
            								"description"	=>	esc_html__("Choose map style.", "keydesign"),
            								"save_always"	=>	true,
          							),

                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Marker icon source", "keydesign"),
                            "param_name" => "image_source",
                            "value" => array(
                                "Media library" => "media_library",
                                "External link" => "external_link",
                            ),
                            "description" => esc_html__("Select image source.", "keydesign"),
                            "save_always" => true,
                        ),

                        array(
                            "type"          => "attach_image",
                            "heading"       => esc_html__("Map marker image", "keydesign"),
                            "param_name"    => "map_icon",
                            "description"   => esc_html__("Upload map marker icon. Recommended image size: 50x50 (Width x Height).", "keydesign"),
                            "dependency" =>	array(
                                "element" => "image_source",
                                "value" => array("media_library")
                            ),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Marker image external source", "keydesign"),
                            "param_name" => "ext_image",
                            "value" => "",
                            "description" => esc_html__("Enter image external link. Recommended image size: 50x50 (Width x Height).", "keydesign"),
                            "dependency" =>	array(
                                "element" => "image_source",
                                "value" => array("external_link")
                            ),
                        ),

                        array(
                            "type"          => "textfield",
                            "class"         => "",
                            "heading"       => esc_html__("Map height", "keydesign"),
                            "param_name"    => "map_height",
                            "value"         => "",
                            "description"   => esc_html__("Enter map height in pixels. Default is 400px.", "keydesign")
                        ),

                        array(
            								"type"			=>	"dropdown",
            								"class"			=>	"",
            								"heading"		=>	esc_html__("Map info panel settings", "keydesign"),
            								"param_name"	=>	"map_business_panel_settings",
                            "group"         => esc_html__("Business info", "keydesign"),
            								"value"			=>	array(
                                esc_html__( "Hide business info panel", "keydesign" ) => "hidden_info_panel",
            										esc_html__( "Left aligned", "keydesign" )	=> "left_info_panel",
                                esc_html__( "Right aligned", "keydesign" ) => "right_info_panel",
            									),
            								"save_always"	=>	true,
          							),

                        array(
                            "type"          => "textfield",
                            "class"         => "",
                            "heading"       => esc_html__("Panel title", "keydesign"),
                            "param_name"    => "map_business_name",
                            "value"         => "",
                            "group"         => esc_html__("Business info", "keydesign"),
                            "description"   => esc_html__("Enter panel title.", "keydesign"),
                            "dependency" =>	array(
                                "element" => "map_business_panel_settings",
                                "value" => array("left_info_panel", "right_info_panel")
                            ),
                        ),

                        array(
                            "type"          => "textfield",
                            "class"         => "",
                            "heading"       => esc_html__("Address", "keydesign"),
                            "param_name"    => "map_business_address",
                            "value"         => "",
                            "group"         => esc_html__("Business info", "keydesign"),
                            "description"   => esc_html__("Enter business address.", "keydesign"),
                            "dependency" =>	array(
                                "element" => "map_business_panel_settings",
                                "value" => array("left_info_panel", "right_info_panel")
                            ),
                        ),

                        array(
                            "type"          => "textfield",
                            "class"         => "",
                            "heading"       => esc_html__("Email", "keydesign"),
                            "param_name"    => "map_business_email",
                            "value"         => "",
                            "group"         => esc_html__("Business info", "keydesign"),
                            "description"   => esc_html__("Enter business email.", "keydesign"),
                            "dependency" =>	array(
                                "element" => "map_business_panel_settings",
                                "value" => array("left_info_panel", "right_info_panel")
                            ),
                        ),

                        array(
                            "type"          => "textfield",
                            "class"         => "",
                            "heading"       => esc_html__("Phone", "keydesign"),
                            "param_name"    => "map_business_phone",
                            "value"         => "",
                            "group"         => esc_html__("Business info", "keydesign"),
                            "description"   => esc_html__("Enter business phone.", "keydesign"),
                            "dependency" =>	array(
                                "element" => "map_business_panel_settings",
                                "value" => array("left_info_panel", "right_info_panel")
                            ),
                        ),

                        array(
                            "type"          => "textfield",
                            "class"         => "",
                            "heading"       => esc_html__("Opening hours title", "keydesign"),
                            "param_name"    => "map_business_opening_hours",
                            "value"         => "",
                            "group"         => esc_html__("Business info", "keydesign"),
                            "description"   => esc_html__("Enter opening hours title text.", "keydesign"),
                            "dependency" =>	array(
                                "element" => "map_business_panel_settings",
                                "value" => array("left_info_panel", "right_info_panel")
                            ),
                        ),

                        array(
                            "type"          => "param_group",
                            "class"         => "",
                            "heading"       => esc_html__("Opening hours schedule", "keydesign"),
                            "value" => urlencode( json_encode ( array(
																		array(
																			"map_schedule_day"       => "",
																			"map_schedule_day_info"  => "",
																		)
                            )	)	),
                            "param_name"    => "map_business_schedule",
                            "group"         => esc_html__("Business info", "keydesign"),
                            "dependency" =>	array(
                                "element" => "map_business_panel_settings",
                                "value" => array("left_info_panel", "right_info_panel")
                            ),
                            "params" => array(
        												array(
          													"type" => "textfield",
          													"heading" => __("Day name","keydesign"),
          													"param_name" => "map_schedule_day_name",
          													"description" => "",
          													"admin_label" => true,
        												),
        												array(
          													"type" => "textarea",
          													"heading" => __("Day opening/closing hours","keydesign"),
          													"param_name" => "map_schedule_day_hours",
          													"value" => "",
          													"description" => "",
        												),
          								),

                        ),

                    )
                ));
            }
        }

        // Render the element on front-end
        public function kd_map_shrt($atts, $content = null) {


              $api = 'https://maps.googleapis.com/maps/api/js';
              $redux_ThemeTek = get_option( 'redux_ThemeTek' );
              $map_key = $redux_ThemeTek['tek-google-api'];
              if($map_key != false) {
                $arr_params = array(
                  'key' => $map_key
                );
                $api = esc_url( add_query_arg( $arr_params, $api ));
              }

              if (isset($redux_ThemeTek['tek-google-api']) && $redux_ThemeTek['tek-google-api'] != '' ) {
                wp_enqueue_script("googleapis",$api,null,null,false);
              }

            // Declare empty vars
            $output = $gmap_style_var = $business_data = $content_image = $map_img_array = '';

            extract(shortcode_atts(array(
                'map_name' => '',
                'map_latitude' => '',
                'map_longitude' => '',
                'map_zoom' => '',
                'map_style' => '',
                'image_source' => '',
                'map_icon' => '',
                'ext_image' => '',
                'map_height' => '',
                'map_business_panel_settings' => '',
                'map_business_name' => '',
                'map_business_address' => '',
                'map_business_email' => '',
                'map_business_phone' => '',
                'map_business_opening_hours' => '',
                'map_business_schedule' => '',
            ), $atts));

            if ($image_source == 'external_link') {
              $content_image .= $ext_image;
            } else {
              $map_img_array = wp_get_attachment_image_src($map_icon, "large");
      				$content_image = $map_img_array[0];
            }

            switch($map_style){
      				case 'gmap_style_grayscale':
      					$gmap_style_var = 'var featureOpts = [
      											{
      											  stylers: [
      												{ "visibility": "on" },
      												{ "weight": 1 },
      												{ "saturation": -100 },
      												{ "lightness": 2.2 },
      												{ "gamma": 2.2 }
      											  ]
      											}, {
                                featureType: "poi",
                                stylers: [
                                  { visibility: "off" }
                                ]
                            }
      										];';
      				break;

      				case 'gmap_style_normal':
      					$gmap_style_var = 'var featureOpts = [
      											{
      											  stylers: [
      												{ "visibility": "on" },
      												{ "weight": 1.1 },
      												{ "saturation": 1 },
      												{ "lightness": 1 },
      												{ "gamma": 1 }
      											  ]
      											}, {
                                featureType: "poi",
                                stylers: [
                                  { visibility: "off" }
                                ]
                            }
      										];';
      				break;
      			}

      			$id = "kd".uniqid();

            if (isset($redux_ThemeTek['tek-google-api']) && $redux_ThemeTek['tek-google-api'] != '' ) {
      			$output .= '<script>

                    function initKdMap_'.$id.'() {
                      var map_'.$id.';
        							var gmap_location_'.$id.' = new google.maps.LatLng('.$map_latitude.', '.$map_longitude.');
        							var GMAP_MODULE_'.$id.' = "customMap";
      								'.$gmap_style_var.'
      								var mapOptions = {
      									zoom: '.$map_zoom.',
      									center: gmap_location_'.$id.',
                        scrollwheel: false,
      									mapTypeControlOptions: {
      										mapTypeIds: [google.maps.MapTypeId.ROADMAP, GMAP_MODULE_'.$id.']
      									},
      									mapTypeId: GMAP_MODULE_'.$id.'
      								};
      								map_'.$id.' = new google.maps.Map(document.getElementById("'.$id.'"), mapOptions);
      								marker_'.$id.' = new google.maps.Marker({
      									map: map_'.$id.',
      									draggable: false,
      									animation: google.maps.Animation.DROP,
      									position: gmap_location_'.$id.',
      									icon: "'.$content_image.'"
      								  });
      								google.maps.event.addListener(marker_'.$id.', "click", function() {
      									if (marker_'.$id.'.getAnimation() != null) {
      										marker_'.$id.'.setAnimation(null);
      									} else {
      										marker_'.$id.'.setAnimation(google.maps.Animation.BOUNCE);
      									}
      								});
      								var styledMapOptions = {
      									name: "'.$map_name.'"
      								};
      								var customMapType_'.$id.' = new google.maps.StyledMapType(featureOpts, styledMapOptions);
      								map_'.$id.'.mapTypes.set(GMAP_MODULE_'.$id.', customMapType_'.$id.');
                      }
                      jQuery(window).on("load", function() {
                        initKdMap_'.$id.'();
                      });
      						</script>';
                  } else {
            $output .= '<div class="kd-alertbox kd-contact-alertbox ab_info">
                        <div class="ab-icon"><i class="fas fa-exclamation-triangle"></i></div>
                        <div class="ab-message"><p></p>
                        <p>Google maps requires a valid API key in order to work.<br> You can add it in LeadEngine > Theme Options > Global Options.<br> You can generate a new API key from https://developers.google.com/maps</p></div>
                        <a href="#" class="ab-close"><i class="fas fa-times"></i></a>
                        </div>';
                  }

            $output .= '<div class="contact-map-container '.$map_business_panel_settings.'" '.(!empty($map_height) ? 'style="height: '.$map_height.';"' : '').'>';
                if ($map_business_panel_settings != "hidden_info_panel") {
                    $output .= '<div class="business-info-wrapper">
                        <div class="business-info-header">';
                            if ($map_business_name != '') {
                                $output .= '<h4>'.$map_business_name.'</h4>';
                            }
                            $output .= '<address>';
                              if ($map_business_address != '') {
                                  $output .= '<span class="business-address-row"><i class="fa iconsmind-Map-Marker2"></i><span class="address-overflow">'.$map_business_address.'</span></span>';
                              }
                              if ($map_business_phone != '') {
                                  $output .= '<span class="business-phone-row"><i class="fa iconsmind-Telephone"></i>'.$map_business_phone.'</span>';
                              }
                              if ($map_business_email != '') {
                                  $output .= '<span class="business-email-row"><i class="fa iconsmind-Mail"></i><a href="mailto:'.$map_business_email.'">'.$map_business_email.'</a></span>';
                              }
                            $output .= '</address>
                        </div>
                        <div class="business-info-schedule">
                            <h4>'.$map_business_opening_hours.'</h4>';
                            $map_business_schedule = json_decode( urldecode( $map_business_schedule ), true );

                            if( isset( $map_business_schedule ) ) {
                      				foreach ( $map_business_schedule as $business_data ){
                      						$output .= '<div class="business-info-day">';
                                  if ( isset( $business_data["map_schedule_day_name"] ) ){
                                  $output .= '<span class="business-info-day-name">'.$business_data["map_schedule_day_name"].'</span>';
                                  }
                                  if ( isset( $business_data["map_schedule_day_hours"] ) ){
                                  $output .= '<span class="business-info-day-hours">'.$business_data["map_schedule_day_hours"].'</span>';
                                  }
                      						$output .= '</div>';
                      				}
                      			}

                        $output .= '</div>
                    </div>';
                }
                $output .= '<div id="'.$id.'" class="kd_map" '.(!empty($map_height) ? 'style="height: '.$map_height.';"' : '').'></div>

            </div>';

            return $output;
        }
    }
}

if (class_exists('KD_ELEM_MAP')) {
    $KD_ELEM_MAP = new KD_ELEM_MAP;
}
?>
