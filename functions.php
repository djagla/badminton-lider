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