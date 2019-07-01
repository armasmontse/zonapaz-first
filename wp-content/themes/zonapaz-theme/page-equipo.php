<?php get_header(); ?>

<?php

if (have_posts()) : while (have_posts()) : the_post();

?>

<section class="about">

	<?php get_template_part('views/about/banner'); ?>

    <?php get_template_part('views/equipo/introduccion'); ?>

    <?php get_template_part('views/equipo/integrantes'); ?>

    <div class="grid__container">

        <div class="equipo__gif">
            <img src="<?php echo THEMEURL ?>/images/zonapaz.gif" alt="">
        </div>

    </div>


    <?php get_template_part('views/equipo/colaboradores'); ?>

</section>

<?php

endwhile; endif;

get_footer();
