<?php

function bg_admin_menus() {
    add_menu_page(
        __( 'Blog Theme Options', 'blog' ),
        __( 'Theme Options', 'blog' ),
        'edit_theme_options',
        'bg_theme_opts',
        'bg_theme_opts_page'
    );
}
