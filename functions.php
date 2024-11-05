<?php
// vignettes
add_theme_support( 'post-thumbnails' );
//ajouter une nouvelle zone de menu à mon thème
function register_my_menu(){
     register_nav_menus( array(
         'header-menu' => __( 'Menu De Tete'),
         'footer-menu'  => __( 'Menu De Pied'),
     ) );
 }
 add_action( 'init', 'register_my_menu', 0 );
 add_theme_support( 'post-thumbnails' );
 the_post_thumbnail('thumbnail');

 function init_my_custom()
 {
    register_post_type(
        'recette',
        array(
        'labels' => array(
        'name' => 'Recettes',
        'singular_name' => 'Recette',
        'add_new' => 'Toutes les recettes',
        'add_new_item' => 'Ajouter une recette',
        'edit_item' => 'Editer la recette',
        'new_item' => 'Nouvelle recette',
        'view_item' => 'Voir la recette',
        'search_items' => 'Rechercher parmi les recettes',
        'not_found' => 'Pas de recette trouvée',
        'not_found_in_trash' => 'Pas de recette dans la corbeille'
        ),
        'public' => true,
        'capacity_type' => 'post',
        'supports' => array(
        'title',
        'editor',
        'thumbnail'
        ),
        'has_archive' => true
        )
    );
 }
 add_action('init', 'init_my_custom');

 register_taxonomy(
  'type',
  'aliment',
  array(
    'label' => 'Types',
    'labels' => array(
    'name' => 'Types',
    'singular_name' => 'Type',
    'all_items' => 'Tous les types',
    'edit_item' => 'Éditer le type',
    'view_item' => 'Voir le type',
    'update_item' => 'Mettre à jour le type',
    'add_new_item' => 'Ajouter un type',
    'new_item_name' => 'Nouveau type',
    'search_items' => 'Rechercher parmi les types',
    'popular_items' => 'Types les plus utilisés'
  ),
  'hierarchical' => true
  )
);
register_taxonomy(
  'couleur',
  'aliment',
  array(
    'label' => 'Couleurs',
    'labels' => array(
    'name' => 'Couleurs',
    'singular_name' => 'Couleur',
    'all_items' => 'Toutes les couleurs',
    'edit_item' => 'Éditer la couleur',
    'view_item' => 'Voir la couleur',
    'update_item' => 'Mettre à jour la couleur',
    'add_new_item' => 'Ajouter une couleur',
    'new_item_name' => 'Nouvelle couleur',
    'search_items' => 'Rechercher parmi les couleurs',
    'popular_items' => 'Couleurs les plus utilisées'
  ),
  'hierarchical' => false
  )
);
register_taxonomy_for_object_type( 'type', 'aliment' );
register_taxonomy_for_object_type( 'couleur', 'aliment' );