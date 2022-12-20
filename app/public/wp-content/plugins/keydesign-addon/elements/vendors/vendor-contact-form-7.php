<?php

if (!class_exists('KD_ELEM_CONTACT_FORM')) {

    class KD_ELEM_CONTACT_FORM extends KEYDESIGN_ADDON_CLASS {

        function __construct() {
            add_action('init', array($this, 'kd_contactform_init'));
            add_shortcode('tek_contactform', array($this, 'kd_contactform_shrt'));
        }

        // Element configuration in admin

        function kd_contactform_init() {
            if (function_exists('vc_map')) {
              $cf7 = get_posts( 'post_type="wpcf7_contact_form"&numberposts=-1' );

              $contact_forms = array();
              if ( $cf7 ) {
                foreach ( $cf7 as $cform ) {
                  $contact_forms[ $cform->post_title ] = $cform->ID;
                }
              } else {
                $contact_forms[ __( 'No contact forms found', 'js_composer' ) ] = 0;
              }
                vc_map(array(
                    "name" => esc_html__("Contact Form 7", "keydesign"),
                    "description" => esc_html__("Place Contact Form 7", "keydesign"),
                    "base" => "tek_contactform",
                    "class" => "",
                    "icon" => plugins_url('../assets/element_icons/contact-form.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "params" => array(

                        array(
                            "type" =>	"dropdown",
                            "class" =>	"",
                            "heading" =>	esc_html__("Select contact form","keydesign"),
                            "param_name"	=>	"contact_form_id",
                            "value"	=> $contact_forms,
                            "save_always" => true,
                            "description"	=>	esc_html__("Choose previously created contact form from the drop down list.", "keydesign"),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Search title", "keydesign"),
                            "param_name" => "contact_form_title",
                            "value" => "",
                            "admin_label" => true,
                            "description" => esc_html__("Enter optional title to search if no ID selected or cannot find by ID.", "keydesign"),
                        ),

                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Form style","keydesign"),
                            "param_name"	=>	"contact_form_style",
                            "value"			=>	array(
                                "Full width fields" => "full-width-cf",
                                "Inline fields" => "inline-cf",
                            ),
                            "save_always" => true,
                            "description"	=>	esc_html__("Select contact from style.", "keydesign"),
                        ),

                        array(
                            "type"			=>	"dropdown",
                            "class"			=>	"",
                            "heading"		=>	esc_html__("Form field background","keydesign"),
                            "param_name"	=>	"contact_form_bg",
                            "value"			=>	array(
                                "Default" => "",
                                "White background" => "white-input-bg",
                            ),
                            "save_always" => true,
                            "description"	=>	esc_html__("Select field background color.", "keydesign"),
                        ),
                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Label color","keydesign"),
                            "param_name"    =>  "contact_form_label_color",
                            "value"         =>  array(
                                "Default" => "",
                                "White" => "white-label-color",
                            ),
                            "save_always" => true,
                            "description"   =>  esc_html__("Overwrite label text color.", "keydesign"),
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("CSS Animation", "keydesign"),
                            "param_name" => "css_animation",
                            "value" => array(
                                "No"              => "",
                                "Fade In"         => "kd-animated fadeIn",
                                "Fade In Down"    => "kd-animated fadeInDown",
                                "Fade In Left"    => "kd-animated fadeInLeft",
                                "Fade In Right"   => "kd-animated fadeInRight",
                                "Fade In Up"      => "kd-animated fadeInUp",
                                "Zoom In"         => "kd-animated zoomIn",
                            ),
                            "save_always" => true,
                            "admin_label" => true,
                            "description" => esc_html__("Select type of animation for element to be animated when it enters the browsers viewport (Note: works only in modern browsers).", "keydesign"),
                            "group" => esc_html__( "Extras", "keydesign" ),
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
                            "save_always" => true,
                            "admin_label" => true,
                            "description" => esc_html__("Enter animation delay in ms.", "keydesign"),
                            "group" => esc_html__( "Extras", "keydesign" ),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Extra class name", "keydesign"),
                            "param_name" => "contact_form_extra_class",
                            "value" => "",
                            "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign"),
                            "group" => esc_html__( "Extras", "keydesign" ),
                        ),
                    )
                ));
            }
        }



		// Render the element on front-end

        public function kd_contactform_shrt($atts, $content = null)
        {
            extract(shortcode_atts(array(
                'contact_form_id' => '',
                'contact_form_title' => '',
                'contact_form_style' => '',
                'contact_form_label_color' => '',
                'contact_form_bg' => '',
                'css_animation' => '',
                'elem_animation_delay' => '',
                'contact_form_extra_class' => '',
            ), $atts));

            $animation_delay = '';

            // Animation delay
            if ($elem_animation_delay) {
                $animation_delay = 'data-animation-delay='.$elem_animation_delay;
            }

            $wrapper_class = implode(' ', array('kd-contact-form', $contact_form_style, $contact_form_bg, $contact_form_label_color, $css_animation, $contact_form_extra_class));

            $output = '<div class="'.trim($wrapper_class).'" '.$animation_delay.'>';
            $output .= do_shortcode('[contact-form-7 id="'.$contact_form_id .'"]' );
            $output .= '</div>';

            return $output;

        }
    }
}

if (class_exists('KD_ELEM_CONTACT_FORM')) {
    $KD_ELEM_CONTACT_FORM = new KD_ELEM_CONTACT_FORM;
}

?>
