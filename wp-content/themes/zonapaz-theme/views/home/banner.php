<?php

global $term;

$gallery = get_field('gallery', $term);

?>
<div class="banner">
    <div class="row">
        <div class="grid__container--fluid">
            <div class="franja-blanca">
                <div class="contenedor home__slider">
                    <?php if($gallery): ?>
                        <?php foreach($gallery as $image): ?>
                            <div>
                                <div class="box__aspect">
                                    <img class="box__aspect--imagen" src="<?php echo esc_url( $image['url'] ); ?>" alt="">
                                </div>
                                <div class="box__creditos">
                                    <?php echo wpautop( $image['caption'] ); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="franja-amarilla">
                <div class="franja-amarilla__contenedor">
                    <h3 class="banner__titulo"><?php echo esc_html( $term->name ); ?></h3>
                </div>
            </div>

        </div>
    </div>
</div>
