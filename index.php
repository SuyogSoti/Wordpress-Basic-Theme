<?php get_header(); ?>
<?php if (is_home()): ?>
  <div class="slideshow" id="home_slide"></div>
  <div class="wrapper" id="home_wrapper">
    <?php while ( have_posts() ) : ?>
      <a href="<?php echo get_permalink(); ?>">
        <div class="index_most_recent">
          <?php the_post(); ?>
          <h5><?php the_title(); ?></h5>
          <span class="date"><?php the_date(); ?></span>
          <?php the_excerpt(); ?>
          <div class="author">
            By: <?php the_author(); ?>
          </div>
        </div>
      </a>
    <?php endwhile; ?>
  </div>
<?php else: ?>
  <?php header(esc_url(home_url('/wp-content/themes/Wordpress-Basic-Theme/404.php'))); ?>
<?php endif; ?>
<?php get_footer(); ?>
