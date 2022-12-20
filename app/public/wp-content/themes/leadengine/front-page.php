<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package leadengine
 * by KeyDesign
 */

  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
  }

  get_header();

  $kd_post_content = $blog_template_class = $page_layout = $blog_active_widgets = $section_style = '';

  $page_top_padding = get_post_meta( get_the_ID(), '_themetek_page_top_padding', true );
  $page_bottom_padding = get_post_meta( get_the_ID(), '_themetek_page_bottom_padding', true );

  if ( '' !== $page_top_padding ) {
   $section_style .= 'padding-top:' . ( preg_match( '/(px|em|\%|pt|cm)$/', $page_top_padding ) ? $page_top_padding : $page_top_padding . 'px' ) . ';';
  }
  if ( '' !== $page_bottom_padding ) {
   $section_style .= 'padding-bottom:' . ( preg_match( '/(px|em|\%|pt|cm)$/', $page_bottom_padding ) ? $page_bottom_padding : $page_bottom_padding . 'px' ) . ';';
  }

  $blog_sidebar = leadengine_get_option ( 'tek-blog-sidebar' );
  $blog_template = leadengine_get_option( 'tek-blog-template' );

  if ('' == $blog_sidebar) {
   $blog_sidebar = 1;
  }

  if ( !class_exists( 'ReduxFramework' ) ) {
    $kd_post_content .= "img-top-list";
    $blog_template_class .= "blog-img-top-list";
  } elseif ( '' != $blog_template ) {
    $kd_post_content .= $blog_template;
    $blog_template_class .= 'blog-'.$blog_template;
  }

  if ( $blog_sidebar ) {
    $page_layout .= "use-sidebar";
  }

  $blog_active_widgets = is_active_sidebar( 'blog-sidebar' );
?>

<?php if ( is_home() ) : ?>
	<div id="posts-content" class="container <?php echo esc_html( $page_layout ); ?> <?php echo esc_html( $blog_template_class ); ?>" >
	<?php if ( $blog_sidebar && $blog_active_widgets ) { ?>
		<div class="col-xs-12 col-sm-12 col-lg-8">
	<?php } else { ?>
		<div class="col-xs-12 col-sm-12 col-lg-8 BlogFullWidth">
	<?php } ?>
	<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'core/templates/post/blog', $kd_post_content );
			endwhile;

			the_posts_pagination( array(
				'mid_size' => 1,
				'prev_text' => __( 'Previous', 'leadengine' ),
				'next_text' => __( 'Next', 'leadengine' ),
			) );

		else :
			get_template_part( 'core/templates/post/content', 'none' );
		endif;
	?>
	</div>
	<?php if ( $blog_sidebar && $blog_active_widgets ) { ?>
		<div class="col-xs-12 col-sm-12 col-lg-4">
      <div class="right-sidebar">
		     <?php get_sidebar(); ?>
      </div>
		</div>
	<?php } ?>
	</div>
<?php else : ?>
	<div id="primary" class="content-area" style="<?php echo esc_attr( $section_style ); ?>">
		<main id="main" class="site-main" role="main">

			<?php // Show the selected frontpage content.
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'core/templates/page/content', 'front-page' );
				endwhile;
			else :
				get_template_part( 'core/templates/post/content', 'none' );
			endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php endif; ?>

<?php get_footer(); ?>
