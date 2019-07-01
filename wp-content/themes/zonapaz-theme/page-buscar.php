<?php

get_header();

?>

<div class="search">
    <div class="grid__row">
        <div class="grid__container">
            <div class="grid__col-1-1">
                <div class="search__container">
                    <h3 class="search__title"><?php esc_html_e('Inicia una búsqueda por palabra, título, autor, fecha, etc.', TRANSDOMAIN); ?></h3>
                    <div class="search__form">
                        <?php get_template_part('custom-searchform'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="search__results">
    <div class="grid__row">
        <div class="grid__container">
            <div class="grid__col-1-1">
                <div class="search__post">
                    <?php
                    $hide_custom_searchform = true;
                    $hide_sidebar_filters = true;
                    include __DIR__ . '/query.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
