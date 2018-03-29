<?php
/**
 * Enqueue scripts and styles.
 */
function portfolio_front_scripts() {

    // Enqueue the main Styles.
    wp_enqueue_style( 'portfolio-style', get_template_directory_uri() . '/dist/styles/main.css', array(), '2.0.0', 'all' );
    // Deregister the jquery version bundled with WordPress.
    wp_deregister_script( 'jquery' );

    // CDN hosted jQuery placed in the header.
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', false );
    wp_enqueue_script( 'portfolio-script', get_template_directory_uri() . '/dist/scripts/main.js', array(), '4.6.0', true );
}
add_action( 'wp_enqueue_scripts', 'portfolio_front_scripts' );


/*function portfolio_login_scripts() {
    wp_enqueue_style( 'portfolio-style', get_template_directory_uri() . '/dist/styles/main.css', array(), '2.0.0', 'all' );
}
add_action( 'login_enqueue_scripts', 'portfolio_login_scripts' );*/