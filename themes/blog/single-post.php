<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 my-4">

            <?php if ( have_posts() ) : ?>
                <?php the_post() ?>

                <div class="card mb-4">
                    <?php the_post_thumbnail( 'full', array( 'class' => 'card-img-top img-fluid', 'alt' => 'image' ) ) ?>
                    <div class="card-body">
                        <h2 class="card-title"><?php the_title(); ?></h2>                        
                        <div class="card-text"><?php the_content() ?></div>                       
                    </div>
                    <?php 
                        wp_link_pages( array(
                            'before' => '<p class="text-center">' . __( 'Pages:', 'blog' ),
                            'after'  => '</p>',
                        ) ); 
                    ?>
                    <div class="card-footer text-muted">
                        Posted on <?php the_time( 'F j, Y' ); ?> by
                        <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a>
        
                        <div class="mt-2"><?php the_tags(); ?></div>
                    </div>

                </div>
            
                <ul class="pagination justify-content-center mb-4">           
                    <li class="page-item">
                        <?php previous_post_link( '%link', '<i class="page-link">&larr; %title</i>' ); ?>
                    </li>
                    <li class="page-item">
                        <?php next_post_link( '%link', '<i class="page-link">%title &rarr;</i>' ); ?>
                    </li>
                </ul>
                <hr class="mb-5">
            
                <?php comments_template(); ?>
            <?php endif; ?>
            
        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>
