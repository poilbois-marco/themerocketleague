<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <nav>
      <?php 
        wp_nav_menu ( array (
        'theme_location' => 'header-menu',
        'menu_id'        => 'header-menu'
      ) );
      if (!is_user_logged_in()) {
                // Menu pour les utilisateurs connectés
                wp_nav_menu (
                  array (
                    'theme_location' => 'logged-in-menu',
                    'menu_id'        => 'logged-in-menu',
                    'fallback_cb'    => false
                )
              );
            } else {
                // Menu pour les utilisateurs non connectés
                wp_nav_menu (
                  array (
                    'theme_location' => 'logged-out-menu',
                    'menu_id'        => 'logged-out-menu',
                    'fallback_cb'    => false
                )
              );
            } 
      ?>
    </nav>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="wrap">
      <header>
        <h1><a><?php bloginfo('name'); ?></a></h1>
        <h2><?php bloginfo('description'); ?></h2>
      </header>