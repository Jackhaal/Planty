<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-style.css', array( 'font-awesome','simple-line-icons','oceanwp-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );


function add_extra_item_to_nav_menu( $items, $args ) {
    /*
    echo("<br>");
    echo("<br>");
    echo("<br>");
    echo("<br>");
    echo("<br>");
    
    echo('<pre style="position: absolute;top:0;left:0">');
    var_dump($args->menu);
    echo("</pre>");  */ 
    if (is_user_logged_in() && $args->menu_id == "menu-1-4894065") {
        $items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="/wp-Admin" class="hfe-menu-item">Admin</a></li>';
    }
   
    return $items;
}
