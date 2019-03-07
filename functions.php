<?php

add_action ( 'after_setup_theme', 'oblog_setup' );
function oblog_setup() {

  // Notre thème supporte la fonctionnalité de WP de générer la balise <title>
  add_theme_support( 'title-tag' );
  // Notre thème supporte la fonctionnalité de WP de générer l'image de mise en avant
  add_theme_support( 'post-thumbnails' );

  // Ajoute une nouvelle d'image
  add_image_size( 'post-thumbnail-square', 300, 300, true );

  remove_action( 'wp_head', 'wp_generator' );
}

add_action ( 'wp_enqueue_scripts', 'oblog_enqueue_styles', 0 );
function oblog_enqueue_styles() {
  $vendorStyle = 'oblog-vendor-style';

  // Contient le code CSS de normalize.css et font-awesome
  wp_enqueue_style(
    $vendorStyle,
    get_template_directory_uri() . '/public/css/vendor.css'
  );

 // Nous voulons charger vendor.css avant app.css
  wp_enqueue_style(
    'oblog-style',
    get_stylesheet_directory_uri() . '/public/css/app.css',
    array( $vendorStyle )
  );
}