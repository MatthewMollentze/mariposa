<?php
/**
 * The template for displaying Search Results pages.
 * @package leadengine
 * by KeyDesign
 */

  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
  }

  get_header();

  $blog_sidebar = $page_layout = $blog_active_widgets = '';

  $blog_sidebar = leadengine_get_option( 'tek-blog-sidebar' );

  if ( '' == $blog_sidebar ) {
    $blog_sidebar = 0;
  }

  if ( $blog_sidebar ) {
    $page_layout = "use-sidebar";
  }

  $blog_active_widgets = is_active_sidebar( 'blog-sidebar' );
?>

<div id="posts-content" class="container" >
  <?php if ( $blog_sidebar && $blog_active_widgets ) : ?>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
  <?php else : ?>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 BlogFullWidth">
  <?php endif; ?>
    	<?php
    		if ( have_posts() ) :

    			while ( have_posts() ) : the_post();
    				get_template_part( 'core/templates/post/content', 'search' );
    			endwhile;

    			the_posts_pagination( array(
    				'mid_size' => 1,
    				'prev_text' => __( 'Previous', 'leadengine' ),
    				'next_text' => __( 'Next', 'leadengine' ),
    			) );
      ?>
    <?php
		  else :
        get_template_part( 'core/templates/post/content', 'none' );
      endif;
    ?>
    </div>
    <?php if ( $blog_sidebar && $blog_active_widgets ) : ?>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="right-sidebar">
  		     <?php get_sidebar(); ?>
        </div>
  		</div>
  	<?php endif; ?>
</div>

<?php get_footer(); ?>
