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
