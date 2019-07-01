<div class="search__modal search">

    <div class="search__modal-header">
        <h6 class="title"><?php esc_html_e('Ordenar por:', TRANSDOMAIN); ?></h6>
        <button class="search__close" id="search-close"><?php esc_html_e('Cerrar', TRANSDOMAIN); ?></button>
    </div>
    <div class="search__container">

        <div class="search__buttons-order">
            <div class="cards search__buttons-order--icons">
                <?php include get_stylesheet_directory() . '/images/cards.php' ?>
            </div>
            <div class="list search__buttons-order--icons order-active">
                <?php include get_stylesheet_directory() . '/images/list.php' ?>
            </div>
        </div>

        <form class="search__check">
            <div class="date-check">
                <a href="<?php echo build_orderby_filter_permalink('date', true, 'asc'); ?>">
                    <input class="" type="radio" name="date" value="asc">
                    <span><?php esc_html_e('Fecha ascendente', TRANSDOMAIN); ?></span>
                </a>
            </div>
            <div class="date-check">
                <a href="<?php echo build_orderby_filter_permalink('date', true, 'desc'); ?>">
                    <input class="" type="radio" name="date" value="asc">
                    <span><?php esc_html_e('Fecha descendente', TRANSDOMAIN); ?></span>

                </a>
            </div>
            <hr>
            <div class="date-check title">
                <a href="<?php echo build_orderby_filter_permalink('title'); ?>">
                    <input class="" type="radio" name="date" value="asc">
                    <span></span><?php esc_html_e('Titulo', TRANSDOMAIN); ?></span>
                </a>
            </div>
        </form>

    </div>

</div>
