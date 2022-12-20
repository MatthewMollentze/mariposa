
<div class="blog-social-sharing">
<?php if (leadengine_get_option('tek-blog-social-sharing-buttons') && leadengine_get_option('tek-blog-social-sharing-buttons')['1'] == '1') { ?>
  <a class="tt_button btn-facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
    <span class="btn-text">
      <i class="fab fa-facebook-f"></i>
      <?php esc_html_e('Share on Facebook', 'leadengine'); ?>
    </span>
  </a>
<?php } if (leadengine_get_option('tek-blog-social-sharing-buttons') && leadengine_get_option('tek-blog-social-sharing-buttons')['2'] == '1') { ?>
  <a class="tt_button btn-twitter" target="_blank" href="https://twitter.com/share?url=<?php the_permalink(); ?>">
    <span class="btn-text">
      <i class="fab fa-twitter"></i>
      <?php esc_html_e('Share on Twitter', 'leadengine'); ?>
    </span>
  </a>
<?php } if (leadengine_get_option('tek-blog-social-sharing-buttons') && leadengine_get_option('tek-blog-social-sharing-buttons')['3'] == '1') { ?>
  <a class="tt_button btn-linkedin" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>">
    <span class="btn-text">
      <i class="fab fa-linkedin-in"></i>
      <?php esc_html_e('Share on LinkedIn', 'leadengine'); ?>
    </span>
  </a>
<?php } ?>
</div>
