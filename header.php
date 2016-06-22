<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo esc_url( home_url( '/wp-content/themes/Wordpress-Basic-Theme/css/computer.css' ) ); ?>" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="<?php echo esc_url( home_url( '/wp-content/themes/Wordpress-Basic-Theme/style.css' ) ); ?>" media="screen" title="no title" charset="utf-8">
</head>
<body>
  <div class="nav">
    <ul>
      <?php $menu_list = ['Home', 'Stuff', 'More Stuff', 'Lorem', 'Ipsum'];
      for ($i=0; $i < count($menu_list); $i++) {
        echo "<a href='".esc_url(home_url("/"))."'><li>".$menu_list[$i]."</li></a>";
      }
       ?>
    </ul>
  </div>
