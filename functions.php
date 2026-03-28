<?php

function wpb_add_google_fonts() {
        wp_enqueue_style( 'wpb-google-fonts1', 'https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap', false ); 
        wp_enqueue_style( 'wpb-google-fonts2', 'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap', false ); 
}
  
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );


function myblocks_init() {
        register_block_type( __DIR__ . '/build/myheader' );
        register_block_type( __DIR__ . '/build/myfooter' );
}

add_action( 'init', 'myblocks_init' );


function add_tailwind() {
        wp_enqueue_style('tailwind_output', get_template_directory_uri() . '/src/output.css'); 
}
  
add_action('wp_enqueue_scripts', 'add_tailwind');

add_theme_support( 'post-thumbnails' );


function theme_scripts() {

  // GSAP
  wp_enqueue_script(
    'gsap',
    'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js',
    [],
    null,
    true
  );

  // GSAP TextPlugin
  wp_enqueue_script(
    'text-plugin',
    'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/TextPlugin.min.js',
    ['gsap'],
    null,
    true
  );

  // Navbar animation
  wp_enqueue_script(
    'navbar',
    get_template_directory_uri() . '/assets/js/navbar.js',
    ['gsap'],
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'theme_scripts');