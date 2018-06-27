<?php

function bg_facebook_shortcode( $atts, $content = ' Like us on Facebook' ) {
    $bg_theme_opts = get_option( 'bg_opts' );
    
    $atts = shortcode_atts( array(
        'page' => $bg_theme_opts['facebook'],
    ), $atts );
    
    return '<a href="http://facebook.com/' . $atts['page'] . '" class="btn btn-primary">
                ' . do_shortcode( $content ) . ' </strong>
            </a>';
}

function bg_icon_shortcode( $atts ) {
    return '<i class="fa fa-' . $atts['icon'] . '"></i>';
}
