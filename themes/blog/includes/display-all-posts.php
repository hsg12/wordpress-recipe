<?php

function display_all_posts( $query ) {
    if ( !is_admin() && $query->is_main_query() ) {
        if ( $query->is_home() || $query->is_category() ) {
            // 'recipe' custom post types
            $query->set( 'post_type', array( 'post', 'recipe' ) );
        }
    }
}
