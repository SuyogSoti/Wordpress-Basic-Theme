<?php
// to just list all of posts that is searched for
function ListPost() { ?>
  <a href="<?php echo get_permalink(); ?>">
    <div class="index_most_recent">
      <h5><?php the_title(); ?></h5>
      <span class="date"><?php the_date(); ?></span>
      <?php the_excerpt(); ?>
      <div class="author">
        By: <?php the_author(); ?>
      </div>
    </div>
  </a>
<?php } ?>
