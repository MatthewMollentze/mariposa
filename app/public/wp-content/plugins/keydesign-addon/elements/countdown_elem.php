<?php

if (!class_exists('KD_ELEM_COUNTDOWN')) {
    class KD_ELEM_COUNTDOWN extends KEYDESIGN_ADDON_CLASS {
        function __construct() {
            add_action('init', array($this, 'kd_countdown_init'));
            add_shortcode('tek_countdown', array($this, 'kd_countdown_shrt'));
        }

        // Element configuration in admin
        function kd_countdown_init() {
            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Countdown", "keydesign"),
                    "description" => esc_html__("Countdown", "keydesign"),
                    "base" => "tek_countdown",
                    "class" => "",
                    "icon" => plugins_url('assets/element_icons/countdown.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "params" => array(

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Starting Year", "keydesign"),
                            "param_name" => "starting_year",
                            "value" => "",
                            "description" => esc_html__("Enter event starting year", "keydesign")
                        ),

                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Starting Month", "keydesign"),
                            "param_name"    =>  "starting_month",
                            "value"         =>  array(
                                    "January" => "1",
                                    "February" => "2",
                                    "March" => "3",
                                    "April" => "4",
                                    "May" => "5",
                                    "June" => "6",
                                    "July" => "7",
                                    "August" => "8",
                                    "September" => "9",
                                    "October" => "10",
                                    "November" => "11",
                                    "December" => "12",
                                ),
                            "save_always" => true,
                            "description"   =>  esc_html__("Enter event starting month.", "keydesign")
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Starting Day", "keydesign"),
                            "param_name" => "starting_day",
                            "value" => "",
                            "description" => esc_html__("Enter event starting day.", "keydesign")
                        ),

                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Starting Hour", "keydesign"),
                            "param_name"    =>  "starting_hour",
                            "value"         => "24",
                            "value"         =>  array(
                                    "00" => "00",
                                    "01" => "01",
                                    "02" => "02",
                                    "03" => "03",
                                    "04" => "04",
                                    "05" => "05",
                                    "06" => "06",
                                    "07" => "07",
                                    "08" => "08",
                                    "09" => "09",
                                    "10" => "10",
                                    "11" => "11",
                                    "12" => "12",
                                    "13" => "13",
                                    "14" => "14",
                                    "15" => "15",
                                    "16" => "16",
                                    "17" => "17",
                                    "18" => "18",
                                    "19" => "19",
                                    "20" => "20",
                                    "21" => "21",
                                    "22" => "22",
                                    "23" => "23",
                                    "24" => "24",
                                ),
                            "save_always" => true,
                            "description"   =>  esc_html__("Enter event starting hour.", "keydesign")
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Starting minute", "keydesign"),
                            "param_name" => "starting_minute",
                            "value" => "00",
                            "description" => esc_html__("Enter event starting minute.", "keydesign")
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("DAYS Counter Text", "keydesign"),
                            "param_name" => "cd_text_days",
                            "value" => "DAYS",
                            "description" => esc_html__("Use this field to translate DAYS text.", "keydesign")
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("HOURS Counter Text", "keydesign"),
                            "param_name" => "cd_text_hours",
                            "value" => "HOURS",
                            "description" => esc_html__("Use this field to translate HOURS text.", "keydesign")
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("MINUTES Counter Text", "keydesign"),
                            "param_name" => "cd_text_minutes",
                            "value" => "MINUTES",
                            "description" => esc_html__("Use this field to translate MINUTES text.", "keydesign")
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("SECONDS Counter Text", "keydesign"),
                            "param_name" => "cd_text_seconds",
                            "value" => "SECONDS",
                            "description" => esc_html__("Use this field to translate SECONDS text.", "keydesign")
                        ),

                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Text alignment", "keydesign"),
                            "param_name"    =>  "cd_text_alignment",
                            "value"         =>  array(
                                    "Center" => "",
                                    "Left" => "cd-align-left",
                                ),
                            "save_always" => true,
                            "description"   =>  esc_html__("Select text alignment.", "keydesign")
                        ),

                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__("Text color", "keydesign"),
                            "param_name" => "cd_text_color",
                            "value" => "",
                            "description" => esc_html__("Select countdown text color color. If none selected, the default color ( white ) will be used.", "keydesign"),
                        ),

                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("CSS animation", "keydesign"),
                            "param_name" => "css_animation",
                            "value" => array(
                                "None" => "",
                                "Fade In" => "kd-animated fadeIn",
                                "Fade In Down" => "kd-animated fadeInDown",
                                "Fade In Left" => "kd-animated fadeInLeft",
                                "Fade In Right" => "kd-animated fadeInRight",
                                "Fade In Up" => "kd-animated fadeInUp",
                                "Zoom In" => "kd-animated zoomIn",
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
                            "param_name" => "cd_animation_delay",
                            "value" => array(
                                "0 ms" => "",
                                "200 ms" => "200",
                                "400 ms" => "400",
                                "600 ms" => "600",
                                "800 ms" => "800",
                                "1 s" => "1000",
                            ),
                            "save_always" => true,
                            "admin_label" => true,
                            "dependency" => array(
                                "element" => "css_animation",
                                "value" => array("kd-animated fadeIn", "kd-animated fadeInDown", "kd-animated fadeInLeft", "kd-animated fadeInRight", "kd-animated fadeInUp", "kd-animated zoomIn")
                            ),
                            "description" => esc_html__("Enter animation delay in ms.", "keydesign"),
                            "group" => esc_html__( "Extras", "keydesign" ),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Extra class name", "keydesign"),
                            "param_name" => "cd_extra_class",
                            "value" => "",
                            "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign"),
                            "group" => esc_html__( "Extras", "keydesign" ),
                        ),
                    )
                ));
            }
        }

        // Render the element on front-end

        public function kd_countdown_shrt($atts, $content = null) {

          // Declare empty vars
          $output = $animation_delay = $wrapper_class = '';

          // Include required JS files
          wp_enqueue_script('kd_countdown_script');

            extract(shortcode_atts(array(
                'starting_year' => '',
                'starting_month' => '',
                'starting_day' => '',
                'starting_hour' => '',
                'starting_minute' => '',
                'cd_text_days' => '',
                'cd_text_hours' => '',
                'cd_text_minutes' => '',
                'cd_text_seconds' => '',
                'cd_text_alignment' => '',
                'cd_text_color' => '',
                'css_animation' => '',
                'cd_animation_delay' => '',
                'cd_extra_class' => '',
            ), $atts));

            // Animation delay
            if ($cd_animation_delay) {
                $animation_delay = 'data-animation-delay='.$cd_animation_delay;
            }

            if ( '' == $starting_hour ) {
              $starting_hour = '12';
            }

            if ( '' == $starting_minute ) {
              $starting_minute = '0';
            }

            $wrapper_class = implode(' ', array('countdown', 'kd-countdown', $cd_text_alignment, $css_animation, $cd_extra_class));

            $output = '<div class="'.trim($wrapper_class).'" ' .(!empty($cd_text_color) ? 'style="color: '.$cd_text_color.';" ' : ' '). ' data-count-year="'.$starting_year.'" data-count-month="'.$starting_month.'" data-count-day="'.$starting_day.'" data-count-hour="'.$starting_hour.'" data-count-minute="'.$starting_minute.'" data-text-days="'.$cd_text_days.'" data-text-hours="'.$cd_text_hours.'" data-text-minutes="'.$cd_text_minutes.'" data-text-seconds="'.$cd_text_seconds.'" '.$animation_delay.'></div>';

            return $output;
        }
    }
}

if (class_exists('KD_ELEM_COUNTDOWN')) {
    $KD_ELEM_COUNTDOWN = new KD_ELEM_COUNTDOWN;
}
?>
