<?php $theme_opts = get_option( 'bg_opts' ); ?>

        <footer class="py-5 bg-dark footer">
            <div class="container text-white">
                <ul class="list-inline text-center social-buttons">

                    <?php if ( ! empty( $theme_opts['twitter'] ) ) : ?>
                        <li class="list-inline-item">
                            <a href="https://twitter.com/<?php echo $theme_opts['twitter']; ?>" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>&nbsp;
                    <?php endif; ?>

                    <?php if ( ! empty( $theme_opts['facebook'] ) ) : ?>
                        <li class="list-inline-item">
                            <a href="https://facebook.com/<?php echo $theme_opts['facebook']; ?>" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>&nbsp;
                    <?php endif; ?>

                    <?php if ( ! empty( $theme_opts['youtube'] ) ) : ?>
                        <li class="list-inline-item">
                            <a href="https://youtube.com/<?php echo $theme_opts['youtube']; ?>" target="_blank">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>
                    <?php endif; ?>

                </ul>

                <?php if ( isset($theme_opts['footer']) && ! empty($theme_opts['footer']) ) : ?>
                    <div class="m-0 text-center "><?php echo $theme_opts['footer']; ?></div>
                <?php endif; ?>

            </div>
        </footer>

        <a id="back-to-top" 
            href="#" 
            class="btn btn-primary btn-sm" 
            role="button"                       
            data-placement="left">
            <i class="fa fa-arrow-up fa-2x"></i>
        </a>

        <?php wp_footer(); ?>

    </body>
</html>
