<?php

function r_rate_recipe() {
    global $wpdb;
    
    $post_id = absint($_POST['rid']);
    $rating  = round($_POST['rating'], 1);
    $user_ip = $_SERVER['REMOTE_ADDR'];
    
    $response = array( 'status' => 1 );
    
    $sql  = "SELECT COUNT(*) FROM ";
    $sql .= $wpdb->prefix . 'recipe_ratings';
    $sql .= " WHERE recipe_id = %d";
    $sql .= " AND user_ip = %s";
    
    $rating_count = $wpdb->get_var( $wpdb->prepare( $sql, $post_id, $user_ip ) );
    
    if ( $rating_count > 0 ) {
        wp_send_json( $response );
    }
    
    $wpdb->insert( 
        $wpdb->prefix . 'recipe_ratings',
        array(
            'recipe_id' => $post_id,
            'rating'    => $rating,
            'user_ip'   => $user_ip,
        ),
        array( '%d', '%f', '%s' )
    );
    
    $sql  = "SELECT AVG(rating) FROM ";
    $sql .= $wpdb->prefix . 'recipe_ratings';
    $sql .= " WHERE recipe_id = %d";
    
    $recipe_data = get_post_meta( $post_id, 'recipe_data', true );
    $recipe_data['rating_count']++;
    $recipe_data['rating'] = $wpdb->get_var( $wpdb->prepare( $sql, $post_id ) );
    
    update_post_meta( $post_id, 'recipe_data', $recipe_data );
    
    /* This block of code allows to extend our plugin */
    do_action( 'recipe_rating', array(
        'id'     => $post_id,
        'rating' => $rating,
        'ip'     => $user_ip,
    ) );
    /* End block */
    
    $response['status'] = 2;
    wp_send_json( $response );
}
