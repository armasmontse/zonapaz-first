<!-- F u l l   I m a g e n -->
<?php

    $full_img = get_field('full_image', specialPage('home'));

    // print_r($full_img);

    if( !empty($full_img) ): ?>

        <section class="full-image">
            <div class="row">
                <div class="full-image__container">
                    <img class="full-image__imagen" src="<?php echo $full_img['url']; ?>" alt="<?php echo $full_img['alt']; ?>" />
                </div>
            </div>
        </section>

    <?php endif;
?>
