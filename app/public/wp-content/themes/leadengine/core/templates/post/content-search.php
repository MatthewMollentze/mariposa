<?php
/**
 * Template part for displaying posts with excerpts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package leadEngine
 * by KeyDesign
 */

?>

<?php
	$global_post_meta = leadengine_get_option( 'tek-post-meta' );

	$post_meta_date = leadengine_get_option( 'tek-post-meta-date' );
	$post_meta_author = leadengine_get_option( 'tek-post-meta-author' );
	$post_meta_categories = leadengine_get_option( 'tek-post-meta-categories' );
	$post_meta_comments = leadengine_get_option( 'tek-post-meta-comments' );

	if ( ! class_exists( 'ReduxFramework' ) ) {
    $global_post_meta = $post_meta_date = $post_meta_author = $post_meta_categories = $post_meta_comments = true;
  }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<h3 class="blog-single-title"><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	<?php if ( 'post' === get_post_type() ) : ?>
		<?php if ( $global_post_meta == true ) : ?>
			<div class="entry-meta">
				<span class="page-type"><span class="far fa-file-alt"></span><?php esc_html_e( 'Post', 'leadengine' ); ?></span>
				<?php if ( $post_meta_date == true ) : ?>
					<span class="published"><span class="far fa-clock"></span><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php  the_time( get_option('date_format') ); ?></a></span>
				<?php endif; ?>
				<?php if ( $post_meta_author == true ) : ?>
					<span class="author"><span class="far fa-keyboard"></span><?php the_author_posts_link(); ?></span>
				<?php endif; ?>
				<?php if ( $post_meta_categories == true ) : ?>
					<span class="blog-label"><span class="far fa-folder-open"></span><?php the_category(', '); ?></span>
				<?php endif; ?>
				<?php if ( $post_meta_comments == true ) : ?>
					<span class="comment-count"><span class="far fa-comment"></span><?php comments_popup_link( esc_html__('No comments yet', 'leadengine'), esc_html__('1 comment', 'leadengine'), esc_html__('% comments', 'leadengine') ); ?></span>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	<?php else : ?>
		<?php if ( $global_post_meta == true ) : ?>
			<div class="entry-meta">
				<?php if ( 'page' === get_post_type() ) : ?>
					<span class="page-type"><span class="far fa-file-alt"></span><?php esc_html_e( 'Page', 'leadengine' ); ?></span>
				<?php elseif ( 'portfolio' === get_post_type() ) : ?>
					<span class="page-type"><span class="far fa-file-image"></span><?php esc_html_e( 'Portfolio', 'leadengine' ); ?></span>
				<?php elseif ( 'product' === get_post_type() ) : ?>
					<span class="page-type"><span class="fas fa-shopping-cart"></span><?php esc_html_e( 'Product', 'leadengine' ); ?></span>
				<?php endif; ?>
				<?php if ( $post_meta_date == true ) : ?>
					<span class="published"><span class="far fa-clock"></span><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php  the_time( get_option('date_format') ); ?></a></span>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	<?php endif; ?>
		<div class="entry-content">
			<?php if ( has_excerpt() ) {
				the_excerpt();
			} ?>
			<a class="post-link" href="<?php esc_url(the_permalink()); ?>"><?php _e( 'Read more', 'leadengine' ); ?></a>
		</div>
</article>
