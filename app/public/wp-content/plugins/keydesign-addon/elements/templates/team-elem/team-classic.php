<?php
/*
* Template: Team Members Classic
*/

if(!function_exists('kd_team_set_classic')) {
  function kd_team_set_classic($atts,$content = null){
  	extract(shortcode_atts(array(
      'title' => '',
      'title_color' => '',
      'position' => '',
      'position_color' => '',
      'description' => '',
      'description_color' => '',
      'image_source' => '',
      'image' => '',
      'ext_image' => '',
      'ext_image_size' => '',
      'tm_phone' => '',
      'tm_phone_label' => '',
      'tm_email' => '',
      'tm_email_label' => '',
      'team_external_url' => '',
      'team_link_text' => '',
      'team_link_target' => '',
      'team_bg_color' => '',
      'facebook_url' => '',
      'instagram_url' => '',
      'twitter_url' => '',
      'google_url' => '',
      'linkedin_url' => '',
      'xing_url' => '',
      'social_color' => '',
      'css_animation' => '',
      'elem_animation_delay' => '',
      'team_extra_class' => '',
  	),$atts));

    $animation_delay = $default_src = $dimensions = $hwstring = '';

    $image = wpb_getImageBySize($params = array(
        'post_id' => NULL,
        'attach_id' => $image,
        'thumb_size' => 'full',
        'class' => ""
    ));

    $default_src = vc_asset_url( 'vc/no_image.png' );
    $dimensions = vc_extract_dimensions( $ext_image_size );
    $hwstring = $dimensions ? image_hwstring( $dimensions[0], $dimensions[1] ) : '';

    //CSS Animation
    if ($css_animation == "no_animation") {
        $css_animation = "";
    }

    // Animation delay
    if ($elem_animation_delay) {
        $animation_delay = 'data-animation-delay='.$elem_animation_delay;
    }

    $output = '<div class="team-member design-classic '.$css_animation.' '.$team_extra_class.'" '.$animation_delay.'>
                    <div class="team-content">
                        <div class="team-image-overlay"></div>
                        <div class="team-image">';

                        if ($image_source == 'external_link') {
                          if (!$ext_image) {
                            $output .='<img src="'.$default_src.'" class="vc_img-placeholder" />';
                          } else {
                            $output .='<img src="'.$ext_image.'" '.$hwstring.' />';
                          }
                        } else {
                          if (!$image) {
                            $output .='<img src="'.$default_src.'" class="vc_img-placeholder" />';
                          } else {
                            $output .= $image['thumbnail'];
                          }
                        }

                        $output .= '</div>
                        <div class="team-content-text" '.(!empty($team_bg_color) ? 'style="background-color: '.$team_bg_color.';"' : '').'>
                        <div class="team-content-text-inner">
                        <h4 '.(!empty($title_color) ? 'style="color: '.$title_color.';"' : '').'>'.$title.'</h4>
                        <span class="team-subtitle" '.(!empty($position_color) ? 'style="color: '.$position_color.';"' : '').'>'.$position.'</span>
                        <p '.(!empty($description_color) ? 'style="color: '.$description_color.';"' : '').'>'.$description.'</p>';
                        if ($team_external_url && $team_link_text) {
                          $output .= '<p class="team-link tl-classic-design"><a href="'.$team_external_url.'" target="'.$team_link_target.'">'.$team_link_text.'</a></p>';
                        }
                        if ($tm_phone || $tm_email) {
                          $output .= '<div class="kd-team-contact">';
                          if ($tm_phone) {
                            $output .= '<div class="kd-team-phone" '.(!empty($description_color) ? 'style="color: '.$description_color.';"' : '').'>'.(!empty($tm_phone_label) ? '<span class="team-phone-label">'.$tm_phone_label.'</span>' : '').'<a href="tel:'.$tm_phone.'">'.$tm_phone.'</a></div>';
                          }

                          if ($tm_email) {
                            $output .= '<div class="kd-team-email" '.(!empty($description_color) ? 'style="color: '.$description_color.';"' : '').'>'.(!empty($tm_email_label) ? '<span class="team-email-label">'.$tm_email_label.'</span>' : '').'<a href="mailto:'.$tm_email.'">'.$tm_email.'</a></div>';
                          }
                          $output .= '</div>';
                        }

                        $output .= '</div>
                        <div class="team-socials">';
                            if(isset($facebook_url) && $facebook_url !== '') {
                              $output .='<a href="'.$facebook_url.'" target="_blank"><span class="fab fa-facebook-f" '.(!empty($social_color) ? 'style="color: '.$social_color.';"' : '').'></span></a>';
                            }
                            if(isset($instagram_url) && $instagram_url !== '') {
                              $output .='<a href="'.$instagram_url.'" target="_blank"><span class="fab fa-instagram" '.(!empty($social_color) ? 'style="color: '.$social_color.';"' : '').'></span></a>';
                            }
                            if(isset($twitter_url) && $twitter_url !== '') {
                              $output .='<a href="'.$twitter_url.'" target="_blank"><span class="fab fa-twitter" '.(!empty($social_color) ? 'style="color: '.$social_color.';"' : '').'></span></a>';
                            }
                            if(isset($linkedin_url) && $linkedin_url !== '') {
                              $output .='<a href="'.$linkedin_url.'" target="_blank"><span class="fab fa-linkedin-in" '.(!empty($social_color) ? 'style="color: '.$social_color.';"' : '').'></span></a>';
                            }
                            if(isset($xing_url) && $xing_url !== '') {
                              $output .='<a href="'.$xing_url.'" target="_blank"><span class="fab fa-xing" '.(!empty($social_color) ? 'style="color: '.$social_color.';"' : '').'></span></a>';
                            }
                        $output .='</div>
                    </div>
                    </div>
                </div>';
    return $output;
  }
}
