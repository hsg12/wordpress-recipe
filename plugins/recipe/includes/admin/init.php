<?php

function recipe_admin_init() {
    // Includes
    include( 'create-metaboxes.php' );
    include( 'recipe-options.php' );
    include( 'enqueue.php' );
    include( 'columns.php' );
    
    // Hooks
    add_action( 'add_meta_boxes',             'r_admin_create_mb' );
    add_action( 'admin_enqueue_scripts',      'r_admin_enqueue' );
    
    add_filter( 'manage_edit-recipe_columns', 'r_add_new_recipe_columns' );
    //add_filter( 'manage_recipe_posts_columns', 'r_add_new_recipe_columns' );
    
    add_action( 'manage_recipe_posts_custom_column', 'r_manage_recipe_columns', 10, 2 );
}
