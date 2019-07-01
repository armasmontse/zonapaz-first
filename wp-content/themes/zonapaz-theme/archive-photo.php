<?php

get_header();

global $wp_query;

// Query post type 'photo'
$query_args = array(
    'post_type'         => 'photo',
    'post_status'       => 'publish',
    'posts_per_page'    => -1,
);

$query = new WP_Query( $query_args );

?>
    <section class="fototeca">

        <div class="fototeca__container">

            <div class="">

                <?php

                    $filters = getFilters();

                    $custom_args = [];

                    if(get_query_param('q')){
                        $custom_args['s'] = get_query_param('q');
                    }

                    if(get_query_param('pag')){
                        $custom_args['paged'] = get_query_param('pag');
                    }

                    $query_args = array_merge($wp_query->query, $custom_args);

                    // Eliminamos los queries que no nos interesan.
                    unset($query_args['page']);
                    unset($query_args['pagename']);

                    $query = new WP_Query($query_args);

                    ?>

                    <style>

                        .row {
                            display: flex;
                        }
                        .col {
                            padding: 20px;
                            width: 100%;
                        }
                        .col-1-4 {
                            width: 25%;
                        }


                    </style>

                    <div class="query__search" id="query">
                        <div class="row">
                            <?php if(!isset($hide_custom_searchform)): ?>
                                <div class="col col-1-4 search__small">
                                    <?php get_template_part('custom-searchform'); ?>

                                    <?php if(!isset($hide_sidebar_filters)): ?>
                                        <div class="col search__filters-container">
                                            <div class="search__filters">
                                                <h2>FILTROS</h2>
                                                
                                                <a class="search__clean" href="<?php echo BLOGURL ?>/fototeca">Mostrar todo</a>
                                                
                                            </div>
                                            

                                            <?php $i = 1; foreach($filters as $filter): ?>

                                                <div class="search__filters-content desktopFilterCount search__filters-content-<?php echo $i ?>">
                                                    <h2 class="title"><?php echo $filter['name']; ?></h2>

                                                    <ul>
                                                        <?php foreach($filter['terms'] as $term): ?>
                                                            <li class="link-filter <?php echo $term['active'] ? 'active' : ''; ?>">
                                                                <a href="<?php echo $term['permalink']; ?>">
                                                                    <!-- <span class="circle "></span> -->
                                                                    <input onclick="window.location='<?php echo $term['permalink']; ?>';" class="<?php echo $term['active'] ? 'active' : ''; ?>" type="radio" name="date" value="asc">
                                                                    <span><?php echo $term['name']; ?></span>
                                                                </a>
                                                            </li>

                                                        <?php endforeach; ?>

                                                    </ul>
                                                    <p id="search_more_<?php echo $i ?>" class="search-more " data-index="<?php echo $i ?>">Ver más</p>

                                                </div>
                                            <?php $i++; endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                    
                                </div>
                            <?php endif; ?>
                            <div class="col">

                                <div class="fototeca__cuadricula">

                                    <div class="grid masonry-sizer-fototeca" data-masonry='{ 
                                    
                                        "itemSelector": ".masonry-item",
                                        "columnWidth": .masonry-sizer-fototeca",
                                        "percentPosition": true,
                                    }'>
                                        <?php $k = 0 ?>
                                        <?php $j = 0 ?>

                                        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); $k++; $j++ ?>
                                                
                                            <div class="grid-item modalOpenFototeca <?php 

                                                if($k == 1 || $k == 8 || $k == 13 || $k == 20 || $k == 25 || $k == 32 || $k == 37 || $k == 44 || $k == 49 || $k == 56 || $k == 61 || $k == 68 || $k == 73 || $k == 80 || $k == 85 || $k == 92 || $k == 97 )

                                                    echo 'grande' ?>
                                                    
                                                <?php if($k == 9 || $k == 21 || $k == 33 || $k == 45 || $k == 57 || $k == 69 || $k == 81 || $k == 93 ) echo 'arriba' ?>" data-index="<?php echo $j;?>">

                                                <div class="box-aspect">
                                                    <?php the_post_thumbnail(); ?>
                                                </div>

                                            </div>

                                        <?php  endwhile; endif; ?>
                                    </div>
            
                                    <!-- The Modal Galery-->
                                    <div id="modal-fototeca" class="modal">
                                        <span class="close">&times;</span>

                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <div class="modal-fototeca">

                                                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); $i++; ?>

                                                    <div class="slide">

                                                        <div class="modal__image">
                                                            <?php the_post_thumbnail(); ?>
                                                        </div>
                                                        <div class="modal__info">
                                                            <div class="titulo"><?php the_title(); ?></div>
                                                            <div class="descripcion"><?php the_post_thumbnail_caption(); ?></div>
                                                            
            
                                                            <div class="year"><?php the_field('ano'); ?></div>
                                                        </div>

                                                    </div>

                                                <?php  endwhile; endif; ?>

                                            </div>
                                            <div class="galeria-prev"></div>
                                            <div class="galeria-next"></div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- modal search -->
                    <?php get_template_part('views/general/modal-search'); ?>


                    <!-- modal filters -->
                    <div class="search__modal filter">

                        <div class="search__modal-header">
                            <h6 class="title"><?php esc_html_e('Filtrar por por:', TRANSDOMAIN); ?></h6>
                            <button class="search__close" id="search-close"><?php esc_html_e('Cerrar', TRANSDOMAIN); ?></button>
                        </div>
                        <div class="search__container">

                            <?php if(!isset($hide_sidebar_filters)): ?>
                                <div class="col col-1-4 search__filters-container">
                                    <div class="search__filters">
                                        <h2><?php esc_html_e('FILTROS', TRANSDOMAIN); ?></h2>
                                    </div>

                                    <?php $j = 1; foreach($filters as $filter): ?>

                                        <div class="search__filters-content mobileFilterCount search__filters-content-mobile-<?php echo $j ?>">
                                            <h2 class="title"><?php echo $filter['name']; ?></h2>

                                            <ul>
                                                <?php foreach($filter['terms'] as $term): ?>
                                                    <li class="link-filter <?php echo $term['active'] ? 'active' : ''; ?>">
                                                        <a href="<?php echo $term['permalink']; ?>">
                                                            <!-- <span class="circle "></span> -->
                                                            <input class="<?php echo $term['active'] ? 'active' : ''; ?>" type="radio" name="date" value="asc">
                                                            <span><?php echo $term['name']; ?></span>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <p id="search_more_mobile_<?php echo $j ?>" class="search-more-mobile " data-index-mobile="<?php echo $j ?>">Ver más</p>

                                        </div>
                                    <?php $j++;endforeach; ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php // include __DIR__ . '/query.php'; ?>
            </div>
        </div>

    </section>

<?php

get_footer();