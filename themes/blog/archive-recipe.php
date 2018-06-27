<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 mt-4">
            
            <article class="card mb-3">
                <div class="card-content">
                    <h1 class="ml-3">Recipes</h1>
                </div>
            </article>
            
            <?php
            
            $query = new WP_Query(array(
                'post_type'      => 'recipe',
                'posts_per_page' => 2,
                'orderby'        => 'rand',
            ));
            
            ?>

            <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : ?>

                <?php $query->the_post() ?>

                <div class="card mb-4">
                    <?php the_post_thumbnail( 'full', array( 'class' => 'card-img-top img-fluid', 'alt' => 'image' ) ) ?>
                    <div class="card-body">
                        <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="card-text"><?php the_excerpt() ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on <?php the_time( 'F j, Y' ); ?> by
                        <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a>
                    </div>
                </div>
            
                <?php wp_reset_postdata(); ?>

                <?php endwhile; ?>
            
            <?php endif; ?>

            <ul class="pagination justify-content-center mb-4">           
                <li class="page-item"><?php previous_posts_link( '<i class="page-link">&larr; Newer</i>' ); ?></li>
                <li class="page-item"><?php next_posts_link( '<i class="page-link">Older &rarr;</i>' ); ?></li>
            </ul>

        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>
