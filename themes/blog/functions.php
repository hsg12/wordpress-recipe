<?php

// Set Up
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-formats', array( 'link', 'quote', 'video' ) );

// Includes
include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );
include( get_template_directory() . '/includes/bootstrap-navwalker.php' );
include( get_template_directory() . '/includes/widgets.php' );
include( get_template_directory() . '/includes/activate.php' );
include( get_template_directory() . '/includes/admin/menus.php' );
include( get_template_directory() . '/includes/admin/options-page.php' );
include( get_template_directory() . '/includes/admin/init.php' );
include( get_template_directory() . '/process/save-options.php' );
include( get_template_directory() . '/includes/shortcodes/facebook.php' );
include( get_template_directory() . '/includes/theme-customizer.php' );
include( get_template_directory() . '/includes/front/head.php' );
require_once( get_template_directory() . '/includes/libs/class-tgm-plugin-activation.php' );
include( get_template_directory() . '/includes/register-plugins.php' );
include( get_template_directory() . '/includes/display-all-posts.php' );

// Action And Filter Hooks
add_action( 'wp_enqueue_scripts', 'bg_enqueue' );
add_action( 'after_setup_theme',  'bg_setup' );
add_action( 'widgets_init',       'bg_widgets' );
add_action( 'after_switch_theme', 'bg_activate' );
add_action( 'admin_menu',         'bg_admin_menus' );
add_action( 'admin_init',         'bg_admin_init' );
add_action( 'customize_register', 'bg_customize_register' );
add_action( 'wp_head',            'bg_head' );
add_action( 'tgmpa_register',     'bg_register_required_plugins' );
add_action( 'pre_get_posts',      'display_all_posts' );

// Short Codes
add_shortcode( 'bgfb', 'bg_facebook_shortcode' );
add_shortcode( 'bgi',  'bg_icon_shortcode' );
