<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <script src="//unpkg.com/alpinejs" defer></script>
  </head>
    
  <body <?php body_class(); ?>>
    <header x-data="{ isOpen: false }">
        <div class="container">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo">
                </a>
            </div>
            
            <!-- Bouton menu burger -->
            <button class="menu-button" @click="isOpen = !isOpen">
                <img x-show="!isOpen" src="<?php echo get_template_directory_uri(); ?>/assets/menu-burger.png" alt="Menu" class="menu-icon">
                <img x-show="isOpen" src="<?php echo get_template_directory_uri(); ?>/assets/croix.png" alt="Fermer" class="close-icon">
            </button>
            
            <!-- Menu de navigation -->
            <nav :class="{ 'open': isOpen }">
              <article class="main-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'menu_id'        => 'header-menu',
                    'container'      => false,
                    'menu_class'     => 'menu-list',
                ));
                if (!is_user_logged_in()) {
                    // Menu pour les utilisateurs connectés
                    wp_nav_menu(array(
                        'theme_location' => 'logged-in-menu',
                        'menu_id'        => 'logged-in-menu',
                        'container'      => false,
                        'menu_class'     => 'menu-list',
                        'fallback_cb'    => false
                    ));
                } else {
                    // Menu pour les utilisateurs non connectés
                    wp_nav_menu(array(
                        'theme_location' => 'logged-out-menu',
                        'menu_id'        => 'logged-out-menu',
                        'container'      => false,
                        'menu_class'     => 'menu-list',
                        'fallback_cb'    => false
                    ));
                }
                ?>
              </article>
            </nav>
        </div>
    </header>