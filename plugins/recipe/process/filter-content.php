<?php

function r_filter_recipe_content( $content ) {
    
    if ( ! is_singular('recipe') ) {
        return $content;
    }
    
    global $post, $wpdb;
    
    $recipe_data = get_post_meta( $post->ID, 'recipe_data', true );
    
    //$recipe_html = file_get_contents( 'recipe-template.php', true );
    
    // We can use this instead of file_get_contents
    $recipe_tpl_res = wp_remote_get( plugins_url( 'process/recipe-template.php', RECIPE_PLUGIN_URL ) );
    $recipe_html = wp_remote_retrieve_body( $recipe_tpl_res );
    
    $recipe_html = str_replace( 'INGREDIENTS_PH',  $recipe_data['ingredients'],  $recipe_html );
    $recipe_html = str_replace( 'COOKING_TIME_PH', $recipe_data['time'],         $recipe_html );
    $recipe_html = str_replace( 'UTENSILS_PH',     $recipe_data['utensils'],     $recipe_html );
    $recipe_html = str_replace( 'LEVEL_PH',        $recipe_data['level'],        $recipe_html );
    $recipe_html = str_replace( 'TYPE_PH',         $recipe_data['meal_type'],    $recipe_html );
    $recipe_html = str_replace( 'RATING_COUNT',    $recipe_data['rating_count'], $recipe_html );
    $recipe_html = str_replace( 'RECIPE_RATING',   $recipe_data['rating'],       $recipe_html );

    $recipe_html = str_replace( 'INGREDIENTS_I18N',  __( 'Ingredients', 'blog' ),   $recipe_html );
    $recipe_html = str_replace( 'COOKING_TIME_I18N', __( 'Cooking Time', 'blog' ),  $recipe_html );
    $recipe_html = str_replace( 'UTENSILS_I18N',     __( 'Utensils', 'blog' ),      $recipe_html );
    $recipe_html = str_replace( 'LEVEL_I18N',        __( 'Cooking Level', 'blog' ), $recipe_html );
    $recipe_html = str_replace( 'TYPE_I18N',         __( 'Meal Type', 'blog' ),     $recipe_html );
    $recipe_html = str_replace( 'RATE_I18N',         __( 'Rating', 'blog' ),        $recipe_html );
    
    $recipe_html = str_replace( 'RECIPE_ID', $post->ID, $recipe_html );
    
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $response = array( 'status' => 1 );
    
    $sql  = "SELECT COUNT(*) FROM ";
    $sql .= $wpdb->prefix . 'recipe_ratings';
    $sql .= " WHERE recipe_id = %d";
    $sql .= " AND user_ip = %s";
    
    $rating_count = $wpdb->get_var( $wpdb->prepare( $sql, $post->ID, $user_ip ) );
    
    if ( $rating_count > 0 ) {
        $recipe_html = str_replace( 'READONLY_PLACEHOLDER', 'data-rateit-readonly="true"', $recipe_html );
    } else {
        $recipe_html = str_replace( 'READONLY_PLACEHOLDER', '', $recipe_html );
    }
      
    return $recipe_html . $content;
}
