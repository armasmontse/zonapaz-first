<?php

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php

// Tema destacado.
global $term;
$term = get_term(get_field('theme'));

?>

<div class="home">

    <?php

    get_template_part('views/home/banner');

    get_template_part('views/home/intro');

    get_template_part('views/home/imagen');
    
    ?>

</div>

<?php endwhile; endif; ?>

<?php

get_footer();
