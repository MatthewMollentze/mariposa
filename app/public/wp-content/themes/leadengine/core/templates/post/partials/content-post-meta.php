<?php
/**
 * The template used for displaying meta information for single Blog posts
 */
 ?>
<?php
  $blog_template = $global_post_meta= $post_content = '';

  $blog_template = leadengine_get_option( 'tek-blog-template' );
  $global_post_meta = leadengine_get_option( 'tek-post-meta' );

  $post_meta_date = leadengine_get_option( 'tek-post-meta-date' );
  $post_meta_author = leadengine_get_option( 'tek-post-meta-author' );
  $post_meta_categories = leadengine_get_option( 'tek-post-meta-categories' );
  $post_meta_comments = leadengine_get_option( 'tek-post-meta-comments' );

  if ( ! class_exists( 'ReduxFramework' ) ) {
    $global_post_meta = $post_meta_date = $post_meta_author = $post_meta_categories = $post_meta_comments = true;
    $blog_template = 'img-top-list';
  }
?>

<?php if ( $global_post_meta == true ) : ?>
 <div class="entry-meta">
   <?php  if ( is_sticky() ) echo '<span class="fas fa-thumbtack"></span>' . apply_filters( 'sticky-post-text', esc_html__("Sticky", "leadengine") ) . '<span class="blog-separator">|</span>'; ?>

   <?php if ( $blog_template == 'detailed-grid' && !is_single() ) : ?>
     <div class="post-meta-child">
   <?php endif; ?>

   <?php if ( is_single() && $post_meta_date == true ) : ?>
     <span class="published"><span class="far fa-clock"></span><?php the_time( get_option('date_format') ); ?></span>
   <?php elseif ( $post_meta_date == true ) : ?>
     <span class="published"><span class="far fa-clock"></span><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_time( get_option('date_format') ); ?></a></span>
   <?php endif; ?>

   <?php if ( ( is_single() || $blog_template == 'img-top-list' || $blog_template == 'minimal-list' || $blog_template == 'detailed-grid' ) && $post_meta_author == true ) : ?>
     <span class="author"><span class="far fa-keyboard"></span><?php the_author_posts_link(); ?></span>
   <?php endif; ?>

   <?php if ( $blog_template == 'detailed-grid' && !is_single() ) : ?>
   </div><div class="post-meta-child">
   <?php endif; ?>

   <?php if ( $post_meta_categories == true ) : ?>
     <span class="blog-label"><span class="far fa-folder-open"></span><?php the_category(', '); ?></span>
   <?php endif; ?>
   <?php if ( ! is_single() && $post_meta_comments == true && ( $blog_template == 'img-top-list' || $blog_template == 'minimal-list' || $blog_template == 'detailed-grid' ) ) : ?>
     <span class="comment-count"><span class="far fa-comment"></span><?php  comments_popup_link( esc_html__('No comments yet', 'leadengine'), esc_html__('1 comment', 'leadengine'), esc_html__('% comments', 'leadengine') ); ?></span>
   <?php endif; ?>

   <?php if ( $blog_template == 'detailed-grid' && !is_single() ) : ?>
   </div>
   <?php endif; ?>
 </div>
<?php endif; ?>
