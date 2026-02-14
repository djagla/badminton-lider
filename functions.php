<?php

function wpb_add_google_fonts() {
        wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap', false ); 
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