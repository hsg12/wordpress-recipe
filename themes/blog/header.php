<?php $theme_opts = get_option( 'bg_opts' ); ?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="My Blog">
        <meta name="author" content="Admin">
        
        <?php if ( isset($theme_opts['favicon']) ) : ?>      
            <link rel="icon" href="<?php echo $theme_opts['favicon']; ?>" type="image/x-icon" />
            <link rel="shortcut icon" href="<?php echo $theme_opts['favicon']; ?>" type="image/x-icon" />
        <?php endif; ?>

        <title><?php wp_title(); ?></title>

        <?php wp_head(); ?>
    </head>
    <body>

    
    