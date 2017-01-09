<?php

  // Ajoute l'image à la une aux pages et articles
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 1200, 800, true );


function create_post_type() {
  register_post_type( 'event',
    array(
      'labels' => array(
        'name' => __( 'Evenements' ),
        'singular_name' => __( 'Evenements' )
      ),
      'public' => true
    )
  );
}

add_action( 'init', 'create_post_type' );




  // Déclare des tailles d'images
  function image_size() {
      add_image_size( 'post-list', 600, 200, true );
  }
  add_action( 'after_setup_theme', 'image_size' );

  // Déclare des tailles d'images
  function editor_style() {
    // Affiche le selecteur de format
    add_filter( 'mce_buttons_2', function($buttons) {
      array_unshift( $buttons, 'styleselect' );
      return $buttons;
    });
    // Ajoute une feuille de style à l'éditeur de texte
    add_editor_style( array( 'assets/css/editor-style.css' ) );

    // Ajoute des formats personnalisés.
    add_filter( 'tiny_mce_before_init', function($settings) {
      $style_formats = array(
          /* Paragraphe */
          array( 'title' => 'Introduction', 'selector' => 'p', 'classes' => 'introduction' ),
      );

      $settings['style_formats'] = json_encode( $style_formats );
      $settings['remove_script_host'] = true;
      $settings['convert_urls'] = true;

      return $settings;
    });
  }
  add_action( 'after_setup_theme', 'editor_style' );

  // Créé les menus
  function register_menus()
  {
    register_nav_menus(array(
      'nav-main' => 'Menu principal',
      'nav-footer' => 'Pied de page',
    ));
  }
  add_action( 'init', 'register_menus' );

  // Retourne le titre approprié
  function get_title() {
    // Récupère la catégorie / étiquette
    if(is_tag()) {
        $term_id = get_query_var('tag_id');
        $taxonomy = 'post_tag';
        $args ='include=' . $term_id;
        $term = get_terms( $taxonomy, $args );
        echo $term[0]->name;
    }
    else if (is_category()){
        $cat_id = get_query_var('cat');
        $taxonomy = 'category';
        $args ='include=' . $cat_id;
        $term = get_terms( $taxonomy, $args );
        echo $term[0]->name;
    }
    else if (is_home()) {
      single_post_title();
    }
    else {
      the_title();
    }
  }

  // Liste les catégories
  function get_post_categories($post_id, $exclude = array(), $separator  = ', ', $limit = 10) {
    $tax = (get_post_type($post_id) != 'post' ? get_post_type($post_id).'-category' : 'category');
    $terms = get_the_terms($post_id, $tax);
    if (is_array($terms) && count($terms) > 0) {
      $categories = array_slice($terms, 0, $limit);
      $names = array();
      if (count($categories) > 0) {
        foreach($categories as $category) {
          if(!in_array($category->cat_ID, $exclude)){
            array_push($names, $category->name);
          }
        }
        return implode($separator, $names);
      }
    }
    return false;
  }

  // Enlève '[...]' à la fin des résumés d'articles.
  function new_excerpt_more( $more ) {
  	return '';
  }
  add_filter( 'excerpt_more', 'new_excerpt_more' );

?>
