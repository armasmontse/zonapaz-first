<?php

get_header();

// $title = get_post(get_the_post_thumbnail())->post_title; //The Title

$biography = specialPage('escrita-por-op', true);



if( $biography ):
	// override $post
	$post = $biography;
    setup_postdata( $post );
    ?>

    <!-- Banner principal -->
    <section class="banner-op">
        <div class="banner-op__contenedor">
            <div class="contenido">
                <h1 class="contenido__titulo"><?php the_title(); ?></h1>
                <div class="contenido__wysiwyg">
                    <?php the_content(); ?>
                </div>
            </div>

            <div class="galeria">
                <div class="box-aspect">
                    <img class="box-aspect--imagen" src="<?php echo get_thumbnail_image_url(); ?>" alt="">
                </div>
                <p class="creditos">
                    <?php if(has_post_thumbnail() ) : ?>
                        <?php echo get_the_post_thumbnail_caption(); ?>
                    <?php endif;?>
                </p>
                <div class="boton_mobile">
                    <div class="boton" id="boton-fixed">
                        <p class="boton--menu show">
                            Contenido biografía
                        </p>
                        <p class="boton--menu close">
                            Cerrar
                        </p>
                        <div class="submenu-hover">
                            <?php

                            $args = [
                                'posts_per_page' => -1,
                                'post_type' => 'biography',
                                'order' => 'ASC',
                                'orderby' => 'title'
                            ];

                            $query = new WP_Query($args);

                            ?>

                            <?php if($query->found_posts != 0): ?>
                                <ul>
                                    <?php foreach($query->posts as $post): ?>
                                        <li><a href="<?php echo esc_url( get_permalink($post) ); ?>"><?php echo esc_html( $post->post_title); ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php
    wp_reset_postdata();
endif;

?>
    <!-- Último post de Biografía -->
    <section class="bio-wysiwyg">

        <div class="bio-wysiwyg__contenedor">

            <div class="contenido">

                <h1 class="contenido__titulo"><?php the_title(); ?></h1>

                <div class="contenido__wysiwyg">
                    <?php the_content(); ?>
                </div>

            </div>

        </div>

        <div class="contenido-to-top" id="nav_up">
            <img class="" src="<?php echo THEMEURL ?>images/iconos/top.png" alt="">
        </div>

        <div class="contenido__footnote--contenedor">        
            <div class="contenido__footnote escrito-op">
                <?php $footnote = get_field('footnote_op'); ?>
                <?php echo $footnote; ?>
            </div>
        </div>


    </section>

<?php get_footer(); ?>
