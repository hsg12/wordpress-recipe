<?php

function bg_save_options() {
    if ( ! current_user_can( 'edit_theme_options' ) ) {
        wp_die( __( 'Not allowed!', 'blog' ) );
    }
    
    check_admin_referer( 'bg_options_verify' );
    
    $opts = get_option( 'bg_opts' );
    
    $opts['favicon']    = esc_url_raw( $_POST['bg_inputFaviconImg'] );
    $opts['twitter']    = sanitize_text_field( $_POST['bg_inputTwitter'] );
    $opts['facebook']   = sanitize_text_field( $_POST['bg_inputFacebook'] );
    $opts['youtube']    = sanitize_text_field( $_POST['bg_inputYouTube'] );
    $opts['logo_type']  = absint( $_POST['bg_inputLogoType'] );
    $opts['logo_image'] = esc_url_raw( $_POST['bg_inputLogoImg'] );
    $opts['footer']     = $_POST['bg_inputFooter'];
    
    update_option( 'bg_opts', $opts );
    wp_redirect( admin_url( 'admin.php?page=bg_theme_opts&status=1' ) );
}
