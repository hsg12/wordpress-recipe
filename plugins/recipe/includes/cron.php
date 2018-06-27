<?php

function r_generate_daily_recipe() {
    global $wpdb;
    
    $sql  = "SELECT ID FROM ";
    $sql .= $wpdb->posts;
    $sql .= " WHERE post_status = 'publish' ";
    $sql .= "AND post_type = 'recipe' ";
    $sql .= "ORDER BY rand() LIMIT 1";
    
    $recipe_id = $wpdb->get_var( $sql );
    set_transient( 'r_daily_recipe', $recipe_id, 60 * 60 * 24 );
}
