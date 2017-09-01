<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );


add_theme_support( 'post-thumbnails' );
add_post_type_support( 'page', 'excerpt' );

//set_post_thumbnail_size( 300, 380, array( 'center', 'center')  );
//add_image_size( 'portfolio', 300, 380, true );
add_image_size( 'portfolio', 300, 380, true);
add_image_size( 'hp', 350, 300, true);
add_image_size( 'blog', 400, 370, true);


function custom_post() {
/*Post type: CLIENTI*/
  register_post_type('clienti', /* nome del custom post type */
  // aggiungiamo ora tutte le impostazioni necessarie, in primis definiamo le varie etichette mostrate nei menù
    array('labels' => array(
        'name' => 'Clienti', /* Nome, al plurale, dell'etichetta del post type. */
        'singular_name' => 'Clienti', /* Nome, al singolare, dell'etichetta del post type. */
        'all_items' => 'Tutti gli Clienti', /* Testo mostrato nei menu che indica tutti i contenuti del post type */
        'add_new' => 'Aggiungi nuovo', /* Il testo per il pulsante Aggiungi. */
        'add_new_item' => 'Aggiungi nuovo clienti', /* Testo per il pulsante Aggiungi nuovo post type */
        'edit_item' => 'Modifica Clienti', /*  Testo per modifica */
        'new_item' => 'Nuovo Clienti' /* Testo per nuovo oggetto */
      ), /* Fine dell'array delle etichette */
        'description' => 'Elenco Clienti', /* Una breve descrizione del post type */
        'menu_icon' => get_stylesheet_directory_uri() . '/assets/images/clienti-icon.png', /* Scegli l'icona da usare nel menù per il posty type */
        'public' => true, /* Definisce se il post type sia visibile sia da front-end che da back-end */
        /* la riga successiva definisce quali elementi verranno visualizzati nella schermata di creazione del post */

        'supports' => array( 'title','excerpt', 'custom-fields','sticky')
    ) /* fine delle opzioni */
  ); /* fine della registrazione */

  /*Post type: PORTFOLIO*/
    register_post_type('portfolio', /* nome del custom post type */
    // aggiungiamo ora tutte le impostazioni necessarie, in primis definiamo le varie etichette mostrate nei menù
      array('labels' => array(
          'name' => 'Portfolio', /* Nome, al plurale, dell'etichetta del post type. */
          'singular_name' => 'portfolio', /* Nome, al singolare, dell'etichetta del post type. */
          'all_items' => 'Tutti gli portfolio', /* Testo mostrato nei menu che indica tutti i contenuti del post type */
          'add_new' => 'Aggiungi nuovo', /* Il testo per il pulsante Aggiungi. */
          'add_new_item' => 'Aggiungi nuovo portfolio', /* Testo per il pulsante Aggiungi nuovo post type */
          'edit_item' => 'Modifica portfolio', /*  Testo per modifica */
          'new_item' => 'Nuovo portfolio' /* Testo per nuovo oggetto */
        ), /* Fine dell'array delle etichette */
          'description' => 'Elenco portfolio', /* Una breve descrizione del post type */
          'menu_icon' => get_stylesheet_directory_uri() . '/assets/images/portfolio-icon.png', /* Scegli l'icona da usare nel menù per il posty type */
          'public' => true, /* Definisce se il post type sia visibile sia da front-end che da back-end */
          /* la riga successiva definisce quali elementi verranno visualizzati nella schermata di creazione del post */
          'taxonomies'=> array( 'category' ),
          'supports' => array( 'title','editor','excerpt', 'custom-fields','sticky','thumbnail')
      ) /* fine delle opzioni */
    ); /* fine della registrazione */

}

// Inizializzazione della funzione
add_action( 'init', 'custom_post');
