<?php

get_header();

if (have_posts()) : while (have_posts()) : the_post(); ?>



    <section class="semblanza">

        <div class="grid__row">
            <div class="grid__container--fluid">
                <div class="grid__col-1-1">
                    <div class="semblanza__container">

                        <div class="banner">
                            <div class="box__aspect">
                                <img class="box__imagen" src="<?php echo get_thumbnail_image_url(); ?>" alt="">
                            </div>
                        </div>

                        <div class="semblanza__content">
                            <div class="banner__creditos">
                                <?php echo wp_get_attachment_caption(get_post_thumbnail_id()); ?>
                            </div>
                            <div class="titulo"><?php the_title(); ?></div>
                            <div class="contenido"><?php the_content(); ?></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

	<!-- P a g e  S e m b l a n z a -->


<?php

endwhile; endif;

get_footer();
