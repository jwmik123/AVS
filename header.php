<!DOCTYPE html>
<html>
  <head>
    <?php wp_head(); ?>
    <meta charset="utf-8">
    <title><?php bloginfo('title'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/sass/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/font-awesome/css/font-awesome.css">
  </head>
<?php include_once('functions.php'); ?>
  <div class="socials">
      <span id="fb">FB</span>
      <span id="phone">0623521980</span>
      <span id="language">Language</span>
  </div>
  <div class="navigation">
      <ul>
          <li id="li-link"><?php wp_nav_menu( array( 'theme_location' => 'Home' ) ); ?></li>
          <li id="li-link"><?php wp_nav_menu( array( 'theme_location' => 'Diensten' ) ); ?></li>
          <li id="li-link"><?php wp_nav_menu( array( 'theme_location' => 'Over' ) ); ?></li>
          <li id="li-link"><?php wp_nav_menu( array( 'theme_location' => 'Contact' ) ); ?></li>

      </ul>
  </div>
