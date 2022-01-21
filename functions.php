<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'optimizepress_local_css' ) ):
    function optimizepress_local_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'optimizepress_local_css' );

if ( !function_exists( 'optimizepress_parent_css' ) ):
    function optimizepress_parent_css() {
        wp_enqueue_style( 'optimizepress_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'optimizepress_parent_css', 10 );
         
if ( !function_exists( 'child_optimizepress_configurator_css' ) ):
    function child_optimizepress_configurator_css() {
        wp_enqueue_style( 'optimizepress_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'optimizepress_parent' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_optimizepress_configurator_css', 10 );

// END ENQUEUE PARENT ACTION
?>