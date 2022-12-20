<?php
/**
 * The Template for displaying all single posts.
 * @package leadengine
 * by KeyDesign
 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly.
	}

	get_header();

	$page_layout = $blog_single_sidebar = $blog_active_widgets = '';

	$blog_single_sidebar = leadengine_get_option( 'tek-blog-single-sidebar' );

	if ( '' == $blog_single_sidebar ) {
		$blog_single_sidebar = 1;
	}

	$blog_active_widgets = is_active_sidebar( 'blog-sidebar' );

	if ( ! $blog_active_widgets ) {
		$blog_single_sidebar = 0;
	}

	if ( $blog_single_sidebar ) {
		$page_layout .= "use-sidebar";
	}
?>

<div id="posts-content" class="container blog-single <?php echo esc_html( $page_layout ); ?>">
	<?php if ( $blog_single_sidebar && $blog_active_widgets ) { ?>
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
	<?php } else { ?>
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 BlogFullWidth">
	<?php } ?>
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'core/templates/post/content', 'single' );
		endwhile; // End of the loop.
		?>
	</div>
	<?php if ( $blog_single_sidebar && $blog_active_widgets ) { ?>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="right-sidebar">
		     <?php get_sidebar(); ?>
      </div>
		</div>
	<?php } ?>
</div>

<?php if ( leadengine_get_option( 'tek-related-posts' ) == true ) :
	get_template_part( 'core/templates/post/partials/content', 'post-related' );
endif; ?>

<?php get_footer(); ?>
