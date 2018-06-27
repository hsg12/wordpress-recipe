<?php

function r_add_dashboard_widgets() {
    wp_add_dashboard_widget(
        'r_latest_recipe_rating_widget',   
        __( 'Latest Recipe Ratings', 'recipe' ),   
        'r_latest_recipe_rating_display'  
    );
}

function r_latest_recipe_rating_display() {
    global $wpdb;
    
    $sql  = "SELECT * ";
    $sql .= "FROM " . $wpdb->prefix . "recipe_ratings ";
    $sql .= "ORDER BY id DESC ";
    $sql .= "LIMIT 5";
    
    $latest_ratings = $wpdb->get_results( $sql );
    
    echo '<ul>';
    foreach ( $latest_ratings as $rating ) {
        $title     = get_the_title( $rating->recipe_id );
        $permalink = get_the_permalink( $rating->recipe_id );
        
        ?>
        <li>
            <a href="<?php echo $permalink ?>"><?php echo $title ?></a>
            received a rating of <?php echo $rating->rating ?>
        </li>
        <?php
        
        echo '<li></li>';
    }
    echo '</ul>';
}
