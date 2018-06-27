<?php

function bg_activate() {
    if ( version_compare( get_bloginfo( 'version' ), '<', '4.2' ) ) {
        wp_die( __( 'You must have a minimum version of 4.2 to use this theme', 'blog' ) );
    }
        
    $theme_opts = get_option( 'bg_opts' );
    if ( ! $theme_opts ) {
        $opts = array(
            'favicon'    => '',
            'twitter'    => '',
            'facebook'   => '',
            'youtube'    => '',
            'logo_type'  => '1',
            'logo_image' => '',
            'footer'     => '',
        );

        add_option( 'bg_opts', $opts );
    }
}
