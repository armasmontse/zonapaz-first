<?php

get_header();

// $title = get_post(get_the_post_thumbnail())->post_title; //The Title

$bibliography = specialPage('cronologia', true);



if( $bibliography ):
	// override $post
	$post = $bibliography;
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
                            Cronología por lustro
                        </p>
                        <p class="boton--menu close">
                            Cerrar
                        </p>
                        <div class="submenu-hover">
                            <?php

                            $args = [
                                'posts_per_page' => -1,
                                'post_type' => 'bibliography',
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
    <section class="bio-wysiwyg cronologia">

        <div class="bio-wysiwyg__contenedor cronologia__contenedor">

            <div class="contenido">

                <?php $term_list = wp_get_post_terms( $post->ID, 'chronology_lustrum', array( 'fields' => 'all' ) ); ?>

                    <div class="contenido__boton--contenedor">
                        <a class="contenido__boton" href="<?php echo BLOGURL ?>/cronologia/<?php echo $term_list[0]->slug ?>">Explora el archivo de este lustro</a>
                    </div>

                <h1 class="contenido__titulo cronologia__titulo"><?php the_title(); ?></h1>

                <div class="contenido__wysiwyg footnote-cronologia">
                    <?php the_content(); ?>
                </div>

            </div>

        </div>

        <div class="contenido-to-top" id="nav_up">
            <img class="" src="<?php echo THEMEURL ?>images/iconos/top.png" alt="">
        </div>

        <div class="contenido__footnote--contenedor">        
            <div class="contenido__footnote footnote-cronologia-citas">
                <?php $footnote = get_field('footnote_cronologia'); ?>
                <?php echo $footnote; ?>
            </div>
        </div>


    </section>

<?php get_footer(); ?>
