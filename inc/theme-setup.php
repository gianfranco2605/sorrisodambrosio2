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

if( !function_exists( 'sorrisodambrosio_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sorrisodambrosio_setup() :void {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on sorrisodambrosio, use a find and replace
		* to change 'sorrisodambrosio' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'sorrisodambrosio', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'sorrisodambrosio' ),
            'social' => esc_html__( 'Social Menu', 'sorrisodambrosio' )
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'sorrisodambrosio_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

    //Add support for editor styles
    add_editor_style( '/dist/css/editor-styles.css' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 50,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
            'header-text' => array( 'site-title', 'site-description' ),
		)
	);

    add_theme_support( 'post-formats', array (
        'aside',
        'gallery',
        'quote',
        'video',
        'audio',
        'image',
        'link',
        'status',
        'chat'
    ) );
}
add_action( 'after_setup_theme', 'sorrisodambrosio_setup' );
endif;

if ( ! function_exists( 'sorrisodambrosio_content_width' ) ) :

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sorrisodambrosio_content_width() : void {
	$GLOBALS['content_width'] = apply_filters( 'sorrisodambrosio_content_width', 640 );
}
add_action( 'after_setup_theme', 'sorrisodambrosio_content_width', 0 );
endif;
