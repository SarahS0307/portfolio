<?php

function enqueue_styles() {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', false, '1.0', 'all' );
    wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/assets/css/tailwind.css', false, '1.0', 'all' );
}