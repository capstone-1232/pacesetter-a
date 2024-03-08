<?php 

if(!defined('ABSPATH')) {
    exit;
}

function acf_carousel_block() {
    register_block_type( __DIR__ . '/blocks/carousel');
}
add_action('init', 'acf_carousel_block');


?>