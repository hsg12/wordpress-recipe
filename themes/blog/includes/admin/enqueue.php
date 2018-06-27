<?php

function bg_admin_enqueue() {
    if ( ! isset($_GET['page']) || $_GET['page'] !== 'bg_theme_opts' ) {
        return;
    }
    
    wp_enqueue_media();
    
    wp_register_style( 'bg_bootstrap_css', get_template_directory_uri() . '/site/vendor/bootstrap/css/bootstrap.min.css' );
    wp_register_style( 'bg_admin_blog_css', get_template_directory_uri() . '/site/css/blog-admin.css' );
    
    wp_enqueue_style( 'bg_bootstrap_css' );
    wp_enqueue_style( 'bg_admin_blog_css' );
    
    wp_register_script( 'bg_bootstrap_js', get_template_directory_uri() . '/site/vendor/bootstrap/js/bootstrap.min.js', array(), false, true );
    wp_register_script( 'bg_options_js', get_template_directory_uri() . '/site/js/options.js', array(), false, true );
    
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bg_bootstrap_js' );
    wp_enqueue_script( 'bg_options_js' );
}
