<?php
/**
 * The Template for displaying all single posts.
 * @package leadengine
 * by KeyDesign
 */

?>

<?php
  $post_meta_tags = leadengine_get_option( 'tek-post-meta-tags' );

  if ( ! class_exists( 'ReduxFramework' ) ) {
    $post_meta_tags = true;
  }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-single-content">
		<?php if ('quote' === get_post_format()) : ?>
		  <h1 class="blog-single-title quote"><?php the_title(); ?></h1>
		<?php else : ?>
		  <h1 class="blog-single-title"><?php the_title(); ?></h1>
		<?php endif; ?>
		<?php get_template_part( 'core/templates/post/partials/content', 'post-meta' ); ?>
		<?php get_template_part( 'core/templates/post/post-type/content', get_post_format() ); ?>
		<div class="blog-content">
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div>
		<div class="meta-content">
			<?php if ( $post_meta_tags == true ) : ?>
				<?php
					the_tags(
					    '<div class="tags"><span class="tags-label">' . __('Tags', 'leadengine') .':</span>',
					    ' ',
					    '</div>'
					);
				?>
			<?php endif; ?>

			<?php if (class_exists('KEYDESIGN_ADDON_CLASS')) {
					get_template_part( 'core/templates/post/partials/content', 'post-share' );
			} ?>

			<?php if ( leadengine_get_option( 'tek-blog-single-nav' ) ) : ?>
				<div class="navigation pagination">
					<?php previous_post_link('%link', __('Previous', 'leadengine')); ?>
					<?php next_post_link('%link', __('Next', 'leadengine')); ?>
				</div>
			<?php endif; ?>

			<?php if ( leadengine_get_option( 'tek-author-box' ) == true) : ?>
				<?php get_template_part( 'core/templates/post/partials/content', 'post-author' ); ?>
			<?php endif; ?>

		</div>
	</div>
</article>
<div class="page-content comments-content">
	<?php
		// If comments are open or we have at least one comment, load up the comment template
		if ( comments_open() || '0' != get_comments_number() ) {
			comments_template();
		}
	?>
</div>
