<?php

get_header();

global $wp_query;

if(isset($wp_query->query['post_type'])):

?>

    <?php

    $current_post_type = $wp_query->query['post_type'];

    $options_page_name = $current_post_type . '-options';

    $title = get_field('title', $options_page_name);
    $thumbnail = get_field('thumbnail', $options_page_name);
    $description = get_field('description', $options_page_name);

    ?>

    <section class="archive">

        <div class="archive__banner">
            <div class="archive__container">
                <div class="archive__content">
                    <h1 class="archive__content-title"><?php echo esc_html($title); ?></h1>
                    <div class="archive__content-text">
                        <?php echo ( $description ); ?>
                    </div>

                    <?php while(have_rows('subspaces', $options_page_name)): the_row(); ?>
                        <div class="archive__sub-spaces">
                            <h2 class="archive__sub-spaces--title"><?php echo esc_html( get_sub_field('title') ); ?></h2>
                            <div class="archive__sub-spaces--text">
                                <?php echo ( get_sub_field('description') ); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
                <div class="archive__box">
                    <?php if($thumbnail): ?>
                        <img class="archive__box-image" src="<?php echo esc_url($thumbnail['url']); ?>" alt="">
                        <p class="archive__box-description"><?php echo ($thumbnail['caption']); ?></p>
                    <?php endif; ?>
                </div>
            </div>

        </div>



        <div>

        </div>

        <div class="archive__search">

            <div class="archive__container">
                <div class="breadcrumbs__container">
                    <p style="display: inline;">En:</p>
                    <span><?php echo esc_html($title); ?></span>
                </div>
            </div>


            <div class="archive__container">
                <?php endif; ?>

                <?php include __DIR__ . '/query.php'; ?>
            </div>
        </div>

    </section>

<?php

get_footer();
