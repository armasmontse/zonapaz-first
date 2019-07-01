<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="categoria">

            <?php 

            get_template_part('views/category/banner');

            get_template_part('views/category/filtros-header');

            get_template_part('views/category/filtros-lista');

            ?>

        </div>

    <?php endwhile; endif; ?>

<?php get_footer();