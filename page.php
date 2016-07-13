<?php get_header(); ?>

<div class="wrapper">
    <?php  setup_postdata($post); $content = get_the_content();?>
    <?php if (strlen($content) > 0) {
        echo the_content();
    }else {
        echo "<h1 style='text-align: center; line-height: 500px;'>This page has not been built yet!...Sorry! :(</h1>";
    } ?>
</div>

<?php get_footer(); ?>
