<?php
// vignettes
add_theme_support( 'post-thumbnails' );

//ajouter une nouvelle zone de menu à mon thème
function register_my_menu(){
     register_nav_menus( array(
         'header-menu' => __( 'Menu De Tete'),
         'logged-in-menu' => __( 'Menu De Connexion' ),
         'logged-out-menu' => __( 'Menu De Deconnexion' ),
         'footer-menu'  => __( 'Menu De Pied'),
     ) );
 }
 add_action( 'init', 'register_my_menu', 0 );
 add_theme_support( 'post-thumbnails' );
 the_post_thumbnail('thumbnail');

//inclure le fichier cookie-consent.js dans le thème
function enqueue_cookie_consent_script() {
    wp_enqueue_script('cookie-consent', get_template_directory_uri() . '/cookie-consent.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_cookie_consent_script');