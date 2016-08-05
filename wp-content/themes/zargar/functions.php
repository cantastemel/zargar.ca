<?php


add_theme_support( 'menus' );
add_filter('show_admin_bar', '__return_false');
add_theme_support( 'post-thumbnails' );
add_image_size( 'icon-size', 50, 50, true);

/**
 * Enqueue scripts and styles.
 */
function scripts_and_styles() {
  if (!is_admin()) {

    // Deregister unwanted scripts
    wp_deregister_script('jquery');

    // Modernizr goes in the head
    wp_register_script( 'modernizr', get_stylesheet_directory_uri() . '/assets/js/modernizr-custom.min.js', array(), '', false );

    // Jquery and the rest of our script in thee footer
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js','','',true);
    wp_register_script('scrollto', '//cdn.jsdelivr.net/jquery.scrollto/2.1.0/jquery.scrollTo.min.js','','',true);
    wp_register_script('jquery-easing', '//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js','','',true);
    wp_register_script( 'pushy', get_stylesheet_directory_uri() . '/assets/js/pushy.min.js', array(), '1.0', true );
    wp_register_script( 'itemSlide', get_stylesheet_directory_uri() . '/assets/js/itemSlide.js', array(), '1.0', true );
    wp_register_script( 'scripts', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), '1.0', true );

    wp_enqueue_script('jquery');
    wp_enqueue_script('scrollto');
    wp_enqueue_script('jquery-easing');
    wp_enqueue_script('modernizr');
    wp_enqueue_script('pushy');
    wp_enqueue_script('itemSlide');
    wp_enqueue_script('scripts');

    // Main Stylesheet
    wp_register_style( 'styles', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), '1.1', 'all' );
    wp_enqueue_style('styles');

  }
}

add_action('wp_enqueue_scripts', 'scripts_and_styles', 100);


// Remove Emojis
// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Enable uploading vCards
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
    // add your extension to the array
    $existing_mimes['vcf'] = 'text/x-vcard';
    return $existing_mimes;
}
