<?php get_header(); ?>
<div class="wrapper">
  <?php

// The Query
$the_query = new WP_Query(array('p' => get_the_ID()) );

// The Loop
if ( $the_query->have_posts() ): ?>
	<?php while ( $the_query->have_posts() ): ?>
    <div class="whole_posts" id="post-<?php the_ID(); ?>">
  		<?php $the_query->the_post(); ?>
      <h3><?php the_title(); ?></h3>
      <span class="date"><?php the_date(); ?></span>
      <div class="author">
        By: <?php the_author(); ?>
      </div>
      <?php the_content(); ?>
  </div>
  <?php endwhile; ?>
<?php else: ?>
	<?php header(esc_url(home_url('/wp-content/themes/Wordpress-Basic-Theme/404.php'))); ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</div>
<?php get_footer(); ?>
