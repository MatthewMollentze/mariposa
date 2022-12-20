<?php if (has_post_thumbnail()) : ?>
  <div class="entry-image">
    <a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('large'); ?></a>
  </div>
<?php endif; ?>
