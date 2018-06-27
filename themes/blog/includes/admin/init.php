<?php

function bg_admin_init() {
    // Includes
    include( 'enqueue.php' );
    
    // Hooks
    add_action( 'admin_enqueue_scripts', 'bg_admin_enqueue' );
    add_action( 'admin_post_bg_save_options', 'bg_save_options' );
}
