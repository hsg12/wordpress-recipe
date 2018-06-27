<?php

function bg_head() {
    ?>
    <style type="text/css">
        .navbar.navbar-expand-lg, .card .card-header, footer.bg-dark {
            background-color: <?php echo get_theme_mod( 'header_bg_color', '#343A40' ); ?> !important;
        }
        .card .card-header, footer.bg-dark div a {
            color: #ffffff !important;
        }
    </style>
    <?php
}
