<?php

function bg_widgets() {
    register_sidebar( array(
        'name'          => __( 'Blog sidebar', 'blog' ),
	'id'            => 'bg_blog_sidebar',
	'description'   => __( 'Sidebar for the theme Blog', 'blog' ),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="card my-4 %2$s">',
	'after_widget'  => '</div></div>',
	'before_title'  => '<h5 class="card-header">',
	'after_title'   => '</h5><div class="card-body">'
    ) );
}
