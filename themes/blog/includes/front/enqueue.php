<?php

function bg_enqueue() {
    wp_register_style( 'bg_blog_home_css', get_template_directory_uri() . '/site/css/blog-home.css' );
    wp_enqueue_style( 'bg_blog_home_css' );
    
    wp_register_script( 'bg_bootstrap_js', get_template_directory_uri() . '/site/vendor/bootstrap/js/bootstrap.min.js', array(), false, true );
    wp_register_script( 'bg_bootstrap.bundle_js', get_template_directory_uri() . '/site/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), false, true );
    wp_register_script( 'bg_app_script', get_template_directory_uri() . '/site/js/app-script.js', array(), false, true );
    
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bg_bootstrap_js' );
    wp_enqueue_script( 'bg_bootstrap.bundle_js' );
    wp_enqueue_script( 'bg_app_script' );
}
