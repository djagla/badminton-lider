<?php

function myblocks_init() {
        register_block_type( __DIR__ . '/build/myheader' );
        register_block_type( __DIR__ . '/build/myfooter' );
}
add_action( 'init', 'myblocks_init' );