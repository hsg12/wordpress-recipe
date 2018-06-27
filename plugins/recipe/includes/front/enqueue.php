<?php

function r_enqueue() {
    wp_register_style( 'r_rateit_css', plugins_url( '/site/vendor/rateit/css/rateit.css', RECIPE_PLUGIN_URL ) );
    wp_register_style( 'r_recipe_front_css', plugins_url( '/site/css/recipe-front.css', RECIPE_PLUGIN_URL ) );
    
    wp_enqueue_style( 'r_rateit_css' );
    wp_enqueue_style( 'r_recipe_front_css' );
    
    wp_register_script( 'r_rateit_js', plugins_url( '/site/vendor/rateit/js/jquery.rateit.min.js', RECIPE_PLUGIN_URL ), array(), false, true );
    wp_register_script( 'r_main_js', plugins_url( '/site/js/main.js', RECIPE_PLUGIN_URL ), array(), false, true );
    
    wp_enqueue_script( 'r_rateit_js' );
    wp_enqueue_script( 'r_main_js' );
    
    wp_localize_script( 'r_main_js', 'recipe_obj', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
