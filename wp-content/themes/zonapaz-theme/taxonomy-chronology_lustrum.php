<?php get_header(); ?>

	<?php

	$term = $wp_query->queried_object;
	$thumbnail = get_field('thumbnail', $term);

	?>

	<section class="archive">

        <div class="archive__banner">
            <div class="archive__container">
                <div class="archive__content">
                    <h1 class="archive__content-title"><?php echo esc_html($term->name); ?></h1>
                    <p class="archive__content-text"><?php echo ( $term->description ); ?></p>
                </div>
                <div class="archive__box">
                    <img class="archive__box-image" src="<?php echo esc_url($thumbnail['url']); ?>" alt="">
                    <p class="archive__box-description"><?php echo ($thumbnail['description']); ?></p>

                </div>
            </div>

        </div>



        <div class="archive__search">

            <div class="archive__container">
                <div class="breadcrumbs__container">
                    <p style="display: inline;">En:</p>
                    <a href="<?php echo BLOGURL ?>/cronologia">Cronología: </a>
                </div>
            </div>

            <div class="archive__container">

				<?php

					$hide_sidebar_filters = false;

					include __DIR__ . '/query.php';

				?>

            </div>
        </div>

    </section>



<?php get_footer(); ?>


