<?php

/**
 * Für jede Funktion ein eigenes file in dem Ordner functions anlegen
*/

if ( !function_exists( 'basisTheme_setup' ) ) :
    
    function basisTheme_setup() {
        require_once 'functions/func-admin.php';
        require_once 'functions/func-debug.php';
        require_once 'functions/func-menu.php';
        require_once 'functions/func-script.php';
        require_once 'functions/func-style.php';

        add_theme_support('editor-styles');
        add_editor_style('style.css');

        add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
        add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

        // require_once ( get_stylesheet_directory() . '/inc/wp-bem-menu.inc.php' );
        // require_once ( get_stylesheet_directory() . '/inc/gutenberg-blocks.inc.php' );
        // require_once ( get_stylesheet_directory() . '/inc/customizer.inc.php' );

        add_theme_support( 'align-wide' );
    }
endif;

add_action( 'after_setup_theme', 'basisTheme_setup' );