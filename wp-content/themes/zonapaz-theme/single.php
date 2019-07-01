<?php

get_header();

if (have_posts()) : while (have_posts()) : the_post();

    $obj = get_post_type_object( $post_type );


    $tags = get_the_tags() ?: [];

    if($tags) {
        $tags = array_map(function($tag) {
            return $tag->name;
        }, $tags);
    }

    $networks = [
    'facebook' => [
        'href' => 'https://www.facebook.com/sharer/sharer.php?u=' . get_the_permalink(),
        'name' => 'facebook'
    ],
    'twitter' => [
        'href' => 'https://twitter.com/intent/tweet?url=' . get_the_permalink() . '&text=' . get_the_title() . '&hashtags=' . implode(',', $tags),
        'name' => 'Twitter'
    ]
];

?>

<div class="single-post">
    <div class="breadcrumbs__container">
        <p style="display: inline;">En:</p>
        <a href="<?php echo get_post_type_archive_link( $post_type ) ?>">
            <?php echo $obj->labels->singular_name; ?>
        </a>
    </div>
</div>



<?php

// vars
$field = get_field_object('type_single');
$value = $field['value'];
// $label = $field['choices'][ $value ];

?>

<!-- <p>Color: <span class="color-<?php //echo $value; ?>"><?php //echo $label; ?></span></p> -->

<?php if( $value == 'short' ): ?>

    <!-- S I N G L E   S H O R T  -->
	<div class="single-post">
        <div class="archivo">
            <div class="contenido">
                <div class="contenido__contenedor">
                    <h1 class="contenido__titulo"><?php the_title(); ?></h1>
                    <?php $author = get_field('author'); ?>
                    <?php if( $author ): ?>
                        <small class="contenido__credito"><?php echo $author ?></small>
                    <?php endif; ?>

                    <div class="contenido__share">
                        <?php foreach($networks as $network): ?>
                            <a href="<?php echo esc_url($network['href']); ?>" target="_blank" onclick="window.open(this.href, '_blank','toolbar=no,resizable=no'); return false;">
                                <span><img src="<?php echo THEMEURL ?>images/<?php echo $network['name']; ?>.png" /></span> 
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <?php
                        $classes = get_body_class();
                        if (in_array('single-bibliography',$classes)) {
                    ?>

                        <?php $libro = get_field('titulo_libro'); ?>
                        <?php $capitulo = get_field('titulo_capitulo'); ?>
                        <?php $articulo = get_field('titulo_articulo'); ?>
                        <?php $lugar = get_field('lugar'); ?>
                        <?php $editorial = get_field('editorial_publicacion'); ?>
                        <?php $volumen = get_field('volumen_numero'); ?>
                        <?php $paginas = get_field('paginas'); ?>

                        <div class="contenido__detalles">
                            <?php if( $author ): ?>
                                <span ><?php echo $author; ?></span>,
                            <?php endif; ?>

                            <?php if( $capitulo ): ?>
                                <span >"<?php echo $capitulo; ?>"</span>,
                            <?php endif; ?>

                            <?php if( $libro ): ?>
                                <span class="cursiva"><?php echo $libro; ?></span>,
                            <?php endif; ?>

                            <?php if( $articulo ): ?>
                                <span>"<?php echo $articulo; ?>"</span>,
                            <?php endif; ?>

                            <?php if( $lugar ): ?>
                                <span>
                                    <?php echo $lugar; ?>,
                                </span>
                            <?php endif; ?>

                            <?php if( $editorial ): ?>
                                <span>
                                    <?php echo $editorial; ?>,
                                </span>
                            <?php endif; ?>

                            <?php if( $volumen ): ?>
                                <span>
                                    <?php echo $volumen; ?>,
                                </span>
                            <?php endif; ?>

                            <?php if( $paginas ): ?>
                                <span>
                                    <?php echo $paginas; ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    <?php } ?>

                    <div class="contenido__extracto" id="extracto">

                        <?php
                            $content = get_the_content();
                            $array_content = array_filter(explode("\r\n", $content));
                        ?>

                        <!-- P r i m e r   p a r r a f o -->
                        <div class="contenido__extracto--primer-parrafo">
                            <?php echo apply_filters('the_content', array_shift($array_content)); ?>
                        </div>

                        <!-- C o n t e n i d o  -->
                        <div class="contenido__extracto--full">
                            <?php echo apply_filters('the_content', implode("\r\n", $array_content)); ?>
                        </div>

                    </div>

                    <!-- L e e r   m á s -->
                    <p id="leer-mas" class="contenido__leer-mas">Leer más</p>
                    <p id="leer-menos" class="contenido__leer-menos">Leer menos</p>

                    <div class="enlaces">
                        <div class="descargas">

                            <?php $external_url = get_field('external_url'); ?>
                            <?php $download = get_field('download'); ?>
                            <?php if(($external_url) && ($download)): ?>

                                <?php if($external_url): ?>
                                    <a class="boton" href="<?php echo esc_url( $external_url ); ?>"><?php esc_html_e('Ver enlace', TRANSDOMAIN); ?></a>
                                <?php endif; ?>
                                <?php if($download): ?>
                                    <a class="boton" href="<?php echo esc_url( $download ); ?>"><?php esc_html_e('Descargar', TRANSDOMAIN); ?></a>
                                <?php endif; ?>

                            <?php endif; ?>
                        </div>

                        <div class="detalles">
                            <div class="detalles__fecha">
                                <?php $date = get_field('date'); ?>
                                <?php if($date): ?>
                                    <h4 class="detalles__titulo">Fecha</h4>
                                    <span class="detalles__contenido">
                                        <?php echo esc_html( $date ); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="detalles__tipo">
                                <?php $taxonomies = get_post_taxonomies($post); ?>
                                <?php foreach($taxonomies as $taxonomy): ?>
                                    <?php $taxonomy = get_taxonomy($taxonomy); ?>
                                    <?php $terms = get_terms_of_post(0, $taxonomy->name); ?>
                                    <?php if($terms): ?>
                                        <div>
                                            <h4 class="detalles__titulo"><?php echo esc_html( $taxonomy->label ); ?></h4>
                                            <ul class="detalles__contenido">
                                                <?php foreach($terms as $term): ?>
                                                    <li><?php echo esc_html( $term->name); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="galeria">
                <div class="galeria__contenedor">

                    <?php $gallery = get_field('gallery'); ?>
                    <?php if($gallery): ?>
                        <div class="galeria-single__slider">
                            <?php $i = 0; foreach($gallery as $image): ?>
                                <div class="">
                                    <div class="box__aspect modalOpen" onclick="console.log('Abrir modal <?php echo $i; ?>')">
                                        <img class="box__aspect--imagen" src="<?php echo esc_url( $image['url'] ); ?>" width="300" alt="">
                                    </div>
                                    <span class="galeria__slider--credito"><?php echo wpautop( $image['caption'] ); ?></span>
                                </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <?php $video = get_field('video'); ?>
                    <?php if($video && $video['url'] && $video['still'] || $video && $video['video_id'] && $video['still']): ?>
                        <div class="still__container">
                            <div>
                                <div class="still__box">
                                    <img class="still__image" src="<?php echo esc_url( $video['still']['url'] ); ?>" width="300" alt="">
                                </div>


                                <div class="galeria__video"><?php echo esc_html_e( 'Reproducir', TRANSDOMAIN); ?></div>
                            </div>

                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

<?php else: ?>

    <!-- S I N G L E   L A R G E  -->
    <div class="single-post single-post__full">
        <div class="archivo">
            <div class="contenido">
                <div class="contenido__contenedor">
                    <h1 class="contenido__titulo"><?php the_title(); ?></h1>
                    <?php $subtitle = get_field('subtitle'); ?>

                    <?php if( $subtitle ): ?>
                        <p class="contenido__subtitulo"> <?php echo $subtitle ?> </p>
                    <?php endif; ?>

                    <?php $author = get_field('author'); ?>
                    <?php if( $author ): ?>
                        <small class="contenido__credito"><?php echo $author ?></small>
                    <?php endif; ?>

                    <div class="contenido__share">
                        <?php foreach($networks as $network): ?>
                            <a href="<?php echo esc_url($network['href']); ?>" target="_blank" onclick="window.open(this.href, '_blank','toolbar=no,resizable=no'); return false;">
                                <span><img src="<?php echo THEMEURL ?>images/<?php echo $network['name']; ?>.png" /></span> 
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <!-- G a l e r y -->
                    <div class="galeria">
                        <div class="galeria__contenedor">

                            <?php $gallery = get_field('gallery'); ?>
                            <?php if($gallery): ?>
                                <div class="galeria-single__slider">
                                    <?php $i = 0; foreach($gallery as $image): ?>
                                        <div class="">
                                            <div class="box__aspect modalOpen" onclick="console.log('Abrir modal <?php echo $i; ?>')">
                                                <img class="box__aspect--imagen" src="<?php echo esc_url( $image['url'] ); ?>" width="300" alt="">
                                            </div>
                                            <span class="galeria__slider--credito"><?php echo wpautop( $image['caption'] ); ?></span>
                                        </div>
                                    <?php $i++; endforeach; ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>


                    <!-- C o n t e n i d o  -->
                    <div class="contenido__full">

                        <?php echo the_content(); ?>
                    </div>

                    <div class="contenido__footnote">
                        <?php $footnote = get_field('footnote'); ?>
                        <?php echo $footnote; ?>
                    </div>


                    <div class="contenido__share bottom">
                        <?php foreach($networks as $network): ?>
                            <a href="<?php echo esc_url($network['href']); ?>" target="_blank" onclick="window.open(this.href, '_blank','toolbar=no,resizable=no'); return false;">
                                <span><img src="<?php echo THEMEURL ?>images/<?php echo $network['name']; ?>.png" /></span>
                            </a>
                        <?php endforeach; ?>
                    </div>


                    <!-- E n l a c e s -->

                    <div class="enlaces">

                        <div class="descargas">

                            <?php $external_url = get_field('external_url'); ?>
                            <?php $download = get_field('download'); ?>
                            <?php if(($external_url) && ($download)): ?>

                                <?php if($external_url): ?>
                                    <a class="boton" href="<?php echo esc_url( $external_url ); ?>"><?php esc_html_e('Ver enlace', TRANSDOMAIN); ?></a>
                                <?php endif; ?>
                                <?php if($download): ?>
                                    <a class="boton" href="<?php echo esc_url( $download ); ?>"><?php esc_html_e('Descargar', TRANSDOMAIN); ?></a>
                                <?php endif; ?>

                            <?php endif; ?>
                        </div>

                        <div class="detalles">
                            <div class="detalles__fecha">
                                <?php $date = get_field('date'); ?>
                                <?php if($date): ?>
                                    <h4 class="detalles__titulo">Fecha</h4>
                                    <span class="detalles__contenido">
                                        <?php echo esc_html( $date ); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="detalles__tipo">
                                <?php $taxonomies = get_post_taxonomies($post); ?>
                                <?php foreach($taxonomies as $taxonomy): ?>
                                    <?php $taxonomy = get_taxonomy($taxonomy); ?>
                                    <?php $terms = get_terms_of_post(0, $taxonomy->name); ?>
                                    <?php if($terms): ?>
                                        <div>
                                            <h4 class="detalles__titulo"><?php echo esc_html( $taxonomy->label ); ?></h4>
                                            <ul class="detalles__contenido">
                                                <?php foreach($terms as $term): ?>
                                                    <li><?php echo esc_html( $term->name); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


<?php endif; ?>


<div class="paginador-post">
    <div class="paginador-post--flex">
        <div>
            <?php $prev_post = get_previous_post(); if (!empty( $prev_post )): ?>
                <a class="link" href="<?php echo esc_url( get_permalink( $prev_post ) ); ?>"><?php echo esc_html_e( 'Anterior', TRANSDOMAIN); ?></a>
            <?php endif; ?>
        </div>
        <div>
            <?php $next_post = get_next_post(); if (!empty( $next_post )): ?>
                <a class="link" href="<?php echo esc_url( get_permalink( $next_post ) ); ?>"><?php echo esc_html_e( 'Siguiente', TRANSDOMAIN); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Relacionados -->
<div class="relacionados">
    <div class="grid__container">
        <div class="relacionados__contenedor">
            <div class="archivos">
                <?php $related_posts = get_field('related_posts'); ?>
                <?php if($related_posts): ?>
                    <h2 class="archivos__titulo">Archivos relacionados</h2>
                    <ul class="archivos__lista">
                        <?php foreach($related_posts as $related_post): ?>
                            <li class="">
                                <a href="<?php esc_url( get_permalink($related_post) ); ?>"><?php echo esc_html( $related_post->post_title ); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="referencias">
                <?php if(have_rows('external_references')): ?>
                    <h2 class="referencias__titulo">Referencias enlaces externos</h2>
                    <ul class="referencias__lista">
                        <?php while( have_rows('external_references') ): the_row(); ?>
                            <li class="referencias__item">
                                <a href="<?php echo esc_url( get_sub_field('url') ); ?>" target="_blank"><?php echo esc_html( get_sub_field('title') ); ?></a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- The Modal Galery-->
<div id="modal" class="modal">
    <span class="close">&times;</span>

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-gallery">
            <?php $i = 0; foreach($gallery as $image): ?>
                <div class="slide">
                    <img class="box__aspect--imagen" src="<?php echo esc_url( $image['url'] ); ?>" alt="">
                    <span class="galeria__slider--credito"><?php echo wpautop( $image['caption'] ); ?></span>
                </div>
            <?php $i++; endforeach; ?>
        </div>
        <div class="galeria-prev"></div>
        <div class="galeria-next"></div>
    </div>

</div>

<!-- The Modal IFRAME -->
<div id="modalIframe" class="modal">
    <span class="close">&times;</span>

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-iframe">

            <?php if( ($video['url']) || ($video['video_id']) ): ?>

                <?php if($video['url']): ?>

                    <div class="iframe">
                        <iframe id="sc-widget" src="https://w.soundcloud.com/player/?url=<?php echo esc_url( $video['url'] ); ?>" width="100%" height="465" scrolling="no" allow="autoplay" frameborder="no"></iframe>
                    </div>

                <?php else:?>

                    <div class="container-video">
                        <div class="youtube-autoplay" data-video-id="<?php echo ( $video['video_id'] ); ?>" data-autoplay="1" >
                            <div class="iframe"></div>
                        </div>
                    </div>

                <?php endif; ?>

            <?php endif; ?>

        </div>
    </div>

</div>

<?php

endwhile; endif;

get_footer();
