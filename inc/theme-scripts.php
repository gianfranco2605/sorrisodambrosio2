<?php
/**
 * Our various scripts and styles
 * 
 * @package sorrisodambrosio
 */

//Exist if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if( !function_exists ( 'sorrisodambrosio_scripts' ) ) :
    // Enqueue scripts and styles

function sorrisodambrosio_scripts() : void {
	wp_enqueue_style( 'sorrisodambrosio-style-min', get_stylesheet_uri(), array(), SORRISODAMBROSIO_VERSION );

	wp_style_add_data( 'sorrisodambrosio-style', 'rtl', 'replace' );

	wp_enqueue_script( 'sorrisodambrosio-navigation', get_theme_file_uri( '/dist/js/sorrisodambrosio.min.js' ), array( 'jquery' ), SORRISODAMBROSIO_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sorrisodambrosio_scripts' );
endif;

if ( ! function_exists( 'sorrisodambrosio_admin_scripts' ) ) :
    /**
     * Scripts and styles for the admin area
    */
    function sorrisodambrosio_admin_scripts() :void {

        wp_enqueue_script( 'sorrisodambrosio-admin_js', get_theme_file_uri( '/dist/js/admin.js' ), array(), SORRISODAMBROSIO_VERSION, true );
        wp_enqueue_style( 'sorrisodambrosio-admin', get_theme_file_uri( '/dist/css/admin.css' ), array(), SORRISODAMBROSIO_VERSION, true );
    }

    add_action( 'admin_enqueue_scripts', 'sorrisodambrosio_admin_scripts' );
endif;

