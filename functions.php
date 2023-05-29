<?php 
add_action('init', 'my_register_styles');

function my_register_styles() {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/dist/main.css' );
    wp_enqueue_script( 'jsmain', get_template_directory_uri() . '/assets/dist/main.js' ); 
}

