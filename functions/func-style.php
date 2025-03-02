<?php

function enqueue_styles() {
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/css/main.css', false, '1.0', 'all' );
}