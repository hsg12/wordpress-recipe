<?php

function r_admin_create_mb() {
    add_meta_box(
        'r_recipe_opts_mb',
        __( 'Recipe options', 'recipe' ),
        'r_recipe_opts_mb',
        'recipe',
        'normal',
        'high'   
    );
}
