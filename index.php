<?php get_header(); ?>
<?php if (is_home()): ?>
  <?php echo "<div class='slideshow' id='home_slide'>".do_shortcode('[pjc_slideshow slide_type="home-page"]')."</div>"; ?>
  <div class="wrapper" id="home_wrapper">
    <?php while ( have_posts() ) : ?>
      <?php the_post(); ?>
      <?php ListPost(); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </div>
<?php endif; ?>
<?php get_footer(); ?>
