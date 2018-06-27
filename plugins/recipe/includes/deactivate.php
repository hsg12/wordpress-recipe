<?php

function recipe_deactivate() {
    wp_clear_scheduled_hook( 'r_daily_recipe_hook' );
}
