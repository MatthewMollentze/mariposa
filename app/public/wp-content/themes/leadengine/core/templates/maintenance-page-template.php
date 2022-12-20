<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php $favicon = leadengine_get_option( 'tek-favicon' ); ?>
    <?php if ( isset( $favicon['url'] ) && '' != $favicon['url'] ) : ?>
      <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
        <link href="<?php echo esc_url( $favicon['url'] ); ?>" rel="icon">
      <?php endif; ?>
    <?php endif; ?>
    <?php wp_head(); ?>
  </head>
	<body <?php body_class('maintenance-mode'); ?>>
    <div class="container section">
      <?php if ( leadengine_get_option( 'tek-maintenance-title' ) ) :?>
        <h2 class="maintenance-title"><?php echo esc_html( leadengine_get_option( 'tek-maintenance-title' ) ); ?></h2>
      <?php endif; ?>

      <?php if ( leadengine_get_option( 'tek-maintenance-content' ) ) :?>
        <div class="maintenance-content"><?php echo wp_kses_post( leadengine_get_option( 'tek-maintenance-content' ) ); ?></div>
      <?php endif; ?>

      <?php if ( leadengine_get_option( 'tek-maintenance-countdown' ) ) :?>
        <?php if ( leadengine_get_option( 'tek-maintenance-count-day' ) && leadengine_get_option( 'tek-maintenance-count-month' ) && leadengine_get_option( 'tek-maintenance-count-year' ) ) : ?>
          <?php echo do_shortcode('[tek_countdown starting_year="'.esc_attr( leadengine_get_option( 'tek-maintenance-count-year' ) ).'" starting_month="'.esc_attr( leadengine_get_option( 'tek-maintenance-count-month' ) ).'" starting_day="'.esc_attr( leadengine_get_option( 'tek-maintenance-count-day' ) ).'" starting_hour=12" starting_minute="0" cd_text_days="Days" cd_text_hours="Hours" cd_text_minutes="Minutes" cd_text_seconds="Seconds"]'); ?>
        <?php endif; ?>
      <?php endif; ?>

      <?php if ( leadengine_get_option( 'tek-maintenance-subscribe' ) ) : ?>
         <?php if ( leadengine_get_option( 'tek-maintenance-form-select' ) == '1' && leadengine_get_option( 'tek-maintenance-contactf7-formid' ) != '' ) : ?>
           <div class="inline-cf">
             <?php echo do_shortcode('[contact-form-7 id="'. esc_attr( leadengine_get_option( 'tek-maintenance-contactf7-formid' ) ).'"]'); ?>
           </div>
         <?php elseif ( leadengine_get_option( 'tek-maintenance-form-select' ) == '2' && leadengine_get_option( 'tek-maintenance-ninja-formid' ) != '') : ?>
            <?php echo do_shortcode('[ninja_form id="'. esc_attr( leadengine_get_option( 'tek-maintenance-ninja-formid' ) ).'"]'); ?>
         <?php elseif ( leadengine_get_option( 'tek-maintenance-form-select' ) == '3' && leadengine_get_option( 'tek-maintenance-gravity-formid' ) != '') : ?>
            <?php echo do_shortcode('[gravityform id="'. esc_attr( leadengine_get_option( 'tek-maintenance-gravity-formid' ) ).'"]'); ?>
         <?php elseif ( leadengine_get_option( 'tek-maintenance-form-select' ) == '4' && leadengine_get_option( 'tek-maintenance-wp-formid' ) != '') : ?>
            <?php echo do_shortcode('[wpforms id="'. esc_attr( leadengine_get_option( 'tek-maintenance-wp-formid' ) ).'"]'); ?>
        <?php endif; ?>
      <?php endif; ?>
      <?php wp_footer(); ?>
    </div>
  </body>
</html>
