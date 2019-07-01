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
            </div>
        <?php endif; ?>
        <div class="col">
            <?php if($query->posts): ?>
                <div class="search__content-order">
                    <div class="search__arrows">
                        <a href="<?php echo esc_url( build_order_filter_permalink('asc') ); ?>"><img src="<?php echo THEMEURL?>images/arrow-top.svg" alt=""></a>
                        <a href="<?php echo esc_url( build_order_filter_permalink('desc') ); ?>"><img src="<?php echo THEMEURL?>images/arrow-bottom.svg" alt=""></a>
                    </div>
                    <div class="search__order">
                        <p><?php esc_html_e('Ordenar por:', TRANSDOMAIN); ?></p>
                        <a href="<?php echo build_orderby_filter_permalink('date', true); ?>"><?php esc_html_e('Fecha', TRANSDOMAIN); ?></a>
                        <a class="ordenar-title" href="<?php echo build_orderby_filter_permalink('title'); ?>"><?php esc_html_e('Titulo', TRANSDOMAIN); ?></a>
                    </div>
                    <div class="search__buttons-order">
                        <div class="cards search__buttons-order--icons <?php if (is_tax('chronology_lustrum')): echo 'cronologia--none' ?><?php endif ?>" >
                            <?php include get_stylesheet_directory() . '/images/cards.php' ?>
                        </div>
                        <div class="list search__buttons-order--icons order-active ">
                            <?php include get_stylesheet_directory() . '/images/list.php' ?>
                        </div>
                    </div>
                </div>
                <div class="search__content-order search__order-alphabetic">
                    <?php foreach (range('A', 'Z') as $letter): ?>
                        <a href="<?php echo esc_url( build_starts_with_filter_permalink($letter) ); ?>"><?php echo $letter; ?></a>
                    <?php endforeach; ?>
                </div>


                <div class="search__buttons--xs">
                    <?php if(!isset($hide_sidebar_filters)): ?>
                        <div class="search__order-xs">
                            <button class="search__button" id="search-filter"><?php esc_html_e('Filtros', TRANSDOMAIN); ?></button>
                        </div>
                    <?php endif; ?>

                    <div class="search__order-xs">
                        <button class="search__button" id="search-order"><?php esc_html_e('Ordenar por:', TRANSDOMAIN); ?></button>
                    </div>
                </div>


            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <?php if(!isset($hide_sidebar_filters)): ?>
            <div class="col col-1-4 search__filters-container">
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
        <div class="col <?php if (is_tax('chronology_lustrum')): echo 'cronologia__col' ?><?php endif ?>">
            <?php if($query->posts): ?>

                <div class="masonry__container sm">
                    <div class="masonry list <?php if (is_tax('chronology_lustrum')): echo 'list' ?><?php endif ?> " id="init_masonry">
                        <div class="masonry-sizer"></div>
                        <?php foreach($query->posts as $post): ?>
                            <div class="masonry-item search__table <?php if (is_tax('medios')): echo '100' ?><?php endif ?>">

                                <?php $thumbnail = get_the_post_thumbnail();?>
                                <a href="<?php echo esc_url( get_permalink($post) ); ?>">
                                    <?php if($thumbnail): ?>
                                        <?php echo $thumbnail ?>
                                    <?php else: ?>
                                        <div class="masonry-image-vacio">
                                            <div></div>
                                        </div>
                                    <?php endif; ?>
                                </a>

                                <div class="search__table-cards view-cards">
                                    <a class="title" class href="<?php echo esc_url( get_permalink($post) ); ?>">
                                        <div class="search__table-title cards"><h3><?php echo $post->post_title; ?></h3></div>
                                    </a>
                                    <?php the_typology(0, 'search__table-type'); ?>
                                    <a class="date" href="<?php echo esc_url( get_permalink($post) ); ?>">
                                        <div class="search__table-date"><?php echo get_field('date', $post->ID); ?></div>
                                    </a>
                                    <a class="autor" href="<?php echo esc_url( get_permalink($post) ); ?>">
                                        <div class="search__table-date autor"><?php echo get_field('author', $post->ID); ?></div>
                                    </a>
                                </div>

                                <a href="<?php echo esc_url( get_permalink($post) ); ?>" class="search__table-title"><h3><?php echo $post->post_title; ?></h3></a>
                                <a href="<?php echo esc_url( get_permalink($post) ); ?>" class="search__table-date autor hide-list"><?php echo get_field('author', $post->ID); ?></a>
                                <div class="search__table-date hide-list"><?php the_typology(0, ''); ?></div>
                                <a href="<?php echo esc_url( get_permalink($post) ); ?>" class="search__table-date hide-list"><?php echo get_field('date', $post->ID); ?></a>

                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            <?php else: ?>
                <?php if(count($query_args) != 0): ?>
                    <div class="search__withoutResults">

                        <?php if(isset($query_args['s'])): ?>
                            <?php esc_html_e('Palabra buscada no encontrada, intenta de nuevo.', TRANSDOMAIN); ?>
                        <?php else: ?>
                            <?php esc_html_e('Por el momento no hay archivos en esta sección.', TRANSDOMAIN); ?>
                        <?php endif; ?>

                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <?php

            $paginate_links = build_paginate_links([
                'total' => $query->max_num_pages
            ]);

            ?>

            <?php if($paginate_links['pages']): ?>
                <div class="search__pagination">
                    <?php foreach($paginate_links['pages'] as $page): ?>
                        <a href="<?php echo $page['url']; ?>"><?php echo $page['page']; ?></a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
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
