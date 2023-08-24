<?php
add_action( 'wp_enqueue_scripts', 'my_assets' );
function my_assets() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/main.css' ) );
    if ( is_page( 'accueil' ) ) {
        wp_enqueue_script( 'swiper-script', get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.js' );
        wp_enqueue_style( 'swiper-style', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css' );
        wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array( 'jquery' ), filemtime( get_stylesheet_directory() . '/assets/js/main.js' ), true );
    }
}


// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}