<?php 
/**
 * Register widget area
 * 
 * @package sorrisodambrosio
*/

// PHP technique used to prevent direct file access when wordpress isn't loaded, and prevent direct-template attacks

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'sorrisodambrosio_widgets_init' ) ) :

    function sorrisodambrosio_widgets_init() : void {
        register_sidebar(
            array(
                'name'          => esc_html__( 'Right Sidebar', 'sorrisodambrosio' ),
                'id'            => 'right-sidebar',
                'description'   => esc_html__( 'Add widgets here.', 'sorrisodambrosio' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );

        register_sidebar(
            array(
                'name'          => esc_html__( 'Below Content', 'sorrisodambrosio' ),
                'id'            => 'below-content',
                'description'   => esc_html__( 'Display Widgets below you code', 'sorrisodambrosio' ),
                'before_widget' => '<div id="%1$s" class="widget mt-3 %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );

        register_sidebar(
            array(
                'name'          => esc_html__( 'Footer', 'sorrisodambrosio' ),
                'id'            => 'footer',
                'description'   => esc_html__( 'Add Widgets here', 'sorrisodambrosio' ),
                'before_widget' => '<div class="col-lg pt-3"<section id="%1$s" class="widget %2s">',
                'after_widget'  => '</section></div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
    }
    add_action( 'widgets_init', 'sorrisodambrosio_widgets_init' );
endif;

    
