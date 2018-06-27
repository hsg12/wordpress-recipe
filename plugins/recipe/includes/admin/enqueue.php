<?php

function r_admin_enqueue() {
    global $typenow;
    
    if ( $typenow !== 'recipe' ) {
        return;
    }
    
    wp_register_style( 'r_admin_bootstrap_css', plugins_url( '/site/vendor/bootstrap/css/bootstrap.min.css', RECIPE_PLUGIN_URL ) );
    wp_register_style( 'r_admin_recipe_css', plugins_url( '/site/css/recipe-admin.css', RECIPE_PLUGIN_URL ) );
    
    wp_enqueue_style( 'r_admin_bootstrap_css' );
    wp_enqueue_style( 'r_admin_recipe_css' );
    
}
