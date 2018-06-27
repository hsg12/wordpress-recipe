<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 mt-4">
            
            <h4>
                <?php _e( 'Search Results for', 'blog' ); ?>
                <span class="text-info">'<?php the_search_query(); ?>'</span>
            </h4>
            <hr>
            <br>

            <?php if (!get_search_query() || !have_posts()) : ?>
                <h2 class="card-title">No results found</h2>
            <?php else : ?>
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : ?>

                    <?php the_post() ?>

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

                    <?php endwhile; ?>
                <?php endif; ?>

                <ul class="pagination justify-content-center mb-4">           
                    <li class="page-item"><?php previous_posts_link( '<i class="page-link">&larr; Newer</i>' ); ?></li>
                    <li class="page-item"><?php next_posts_link( '<i class="page-link">Older &rarr;</i>' ); ?></li>
                </ul>

            <?php endif; ?>

        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>
