<?php get_header(); ?>
<?php if (is_home()): ?>
  <div class="slideshow" id="home_slide"></div>
  <div class="wrapper" id="home_wrapper">
    <?php while ( have_posts() ) : ?>
      <?php the_post(); ?>
      <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
      <?php the_excerpt(); ?>
    <?php endwhile; ?>
  </div>
<?php else: ?>
  <?php header(esc_url(home_url('/wp-content/themes/Wordpress-Basic-Theme/404.php'))); ?>
<?php endif; ?>
<?php get_footer(); ?>
