<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 my-4">

            <?php if ( have_posts() ) : ?>
                <?php the_post() ?>

                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title"><?php the_title(); ?></h2>
                        <div class="card-text"><?php the_content() ?></div>                       
                    </div>
                </div>

            <?php endif; ?>
            
        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>
