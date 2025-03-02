<?php

function enqueue_scripts() {
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.7.1.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );
}