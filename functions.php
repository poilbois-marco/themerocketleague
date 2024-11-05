<?php

//ajouter une nouvelle zone de menu à mon thème
function register_my_menu(){
     register_nav_menus( array(
         'header-menu' => __( 'Menu De Tete'),
         'footer-menu'  => __( 'Menu De Pied'),
     ) );
 }
 add_action( 'init', 'register_my_menu', 0 );

 // vignettes
 add_theme_support( 'post-thumbnails' );
 the_post_thumbnail('thumbnail');