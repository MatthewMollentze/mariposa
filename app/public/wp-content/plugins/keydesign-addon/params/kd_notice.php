<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

if(!class_exists('KEYDESIGN_Notice_Param')) {
	class KEYDESIGN_Notice_Param {
		function __construct() {
			if(defined('WPB_VC_VERSION') && version_compare(WPB_VC_VERSION, 4.8) >= 0) {
				if(function_exists('vc_add_shortcode_param')) {
					vc_add_shortcode_param('kd_param_notice' , array($this, 'kd_param_notice_callback'));
				}
			}
			else {
				if(function_exists('add_shortcode_param')) {
					add_shortcode_param('kd_param_notice' , array($this, 'kd_param_notice_callback'));
				}
			}
		}

		function kd_param_notice_callback($settings, $value) {
			$dependency = '';
			$param_name = isset($settings['param_name']) ? $settings['param_name'] : '';
			$class = isset($settings['class']) ? $settings['class'] : '';
			$text = isset($settings['text']) ? $settings['text'] : '';
			$output = '<h4 '.$dependency.' class="wpb_vc_param_value '.$class.'">'.$text.'</h4>';
			$output .= '<input type="hidden" name="'.$settings['param_name'].'" class="wpb_vc_param_value kd-param-heading '.$settings['param_name'].' '.$settings['type'].'_field" value="'.$value.'" '.$dependency.'/>';
			return $output;
		}

	}
}

if(class_exists('KEYDESIGN_Notice_Param')) {
	$KEYDESIGN_Notice_Param = new KEYDESIGN_Notice_Param();
}
