<?php
/**
 * sorrisodambrosio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sorrisodambrosio
 */

// PHP technique used to prevent direct file access when wordpress isn't loaded, and prevent direct-template attacks

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'SORRISODAMBROSIO_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SORRISODAMBROSIO_VERSION', '1.0.0' );
}

//sorrisodambrosio inc directory
$sorrissodambrosio_inc_dir = 'inc';

//Array of files to include
$sorrisodambrosio_includes = array (
    '/theme-setup.php',
	'/theme-scripts.php',
	'/sorrisodambrosio-includes.php',
);

foreach( $sorrisodambrosio_includes as $sorrisodambrosio_file ) {
	require_once get_theme_file_path( $sorrissodambrosio_inc_dir . $sorrisodambrosio_file );
}
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

