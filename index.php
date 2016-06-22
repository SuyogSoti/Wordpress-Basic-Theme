<?php get_header(); ?>
<?php if (is_home()): ?>
  <div class="slideshow" id="home_slide"></div>
  <div class="wrapper" id="home_wrapper">
    <?php while ( have_posts() ) : ?>
      <?php the_post(); ?>
      <?php ListPost(); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </div>
<?php else: ?>
  <?php header(esc_url(home_url('/wp-content/themes/Wordpress-Basic-Theme/404.php'))); ?>
<?php endif; ?>
<?php get_footer(); ?>
