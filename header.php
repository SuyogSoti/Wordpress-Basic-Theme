<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo esc_url( home_url( '/wp-content/themes/Wordpress-Basic-Theme/css/computer.css' ) ); ?>" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="<?php echo esc_url( home_url( '/wp-content/themes/Wordpress-Basic-Theme/css/mobile.css' ) ); ?>" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="<?php echo esc_url( home_url( '/wp-content/themes/Wordpress-Basic-Theme/style.css' ) ); ?>" media="screen" title="no title" charset="utf-8">
  <script type="text/javascript" src="<?php echo esc_url(home_url('/wp-content/themes/Wordpress-Basic-Theme/js/jquery-3.0.0.min.js')) ?>"></script>
  <script type="text/javascript" src="<?php echo esc_url(home_url('/wp-content/themes/Wordpress-Basic-Theme/js/script.js')) ?>"></script>
  <?php wp_head(); ?>
</head>
<body>
  <?php $menu_list = ['Home', 'Stuff', 'More Stuff', 'Lorem', 'Ipsum'];?>
  <div class="computer-nav">
    <ul>
      <?php for ($i=0; $i < count($menu_list); $i++) {
        echo "<a href='".esc_url(home_url("/"))."'><li>".$menu_list[$i]."</li></a>";
      }
       ?>
    </ul>
  </div>
  <div class="mobile-nav">
      <div class="hamburger-menu">
          <img src="<?php echo esc_url(home_url('/wp-content/uploads/2016/06/hamburger-menu-1.png'))  ?>" alt="" />
      </div>
      <ul>
        <?php for ($i=0; $i < count($menu_list); $i++) {
          echo "<a href='".esc_url(home_url("/"))."'><li>".$menu_list[$i]."</li></a>";
        }
         ?>
      </ul>
  </div>
