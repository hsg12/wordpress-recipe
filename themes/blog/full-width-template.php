<?php
/**
 * Template Name: Full width template
 */
?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 my-4">

            <?php if ( have_posts() ) : ?>
                <?php the_post() ?>

                <div class="card mb-4">
                    <div class="card-body">
                        <?php the_post_thumbnail( 'full', array( 'class' => 'card-img-top img-fluid', 'alt' => 'image' ) ) ?>
                        <div class="row my-3">
                            <div class="col-sm-6">
                                <h2 class="card-title"><?php the_title(); ?></h2>
                            </div>
                            <div class="col-sm-6 text-right facebook-like">
                                <?php echo do_shortcode( '[bgfb]<strong>[bgi icon="twitter"] Like us on Facebook</strong>[/bgfb]' ); ?>
                            </div>
                        </div>
                        <div class="card-text"><?php the_content() ?></div>                       
                    </div>
                </div>

            <?php endif; ?>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>
