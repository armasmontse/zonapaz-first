<?php

get_header();

$description = get_post(get_post_thumbnail_id())->post_excerpt;


$family_tree = specialPage('arbol-genealogico', true);

if( $family_tree ):
	// override $post
	$post = $family_tree;
    setup_postdata( $post );
    ?>

    <!-- Banner principal -->
		<section class="banner-op">

		    <div class="banner-op__contenedor">
		        <div class="contenido">
		            <h1 class="contenido__titulo"><?php the_title(); ?></h1>
		            <div class="contenido__wysiwyg">
	                    <?php the_content(); ?>
	                </div>
		        </div>

		        <div class="galeria genealogico">
		            <div class="box-aspect genealogico">
                        <img class="box-aspect--imagen" src="<?php echo get_thumbnail_image_url(); ?>" alt="">

                        <p class="creditos genealogico">
                            <?php if(has_post_thumbnail() ) : ?>
                                <?php echo $description ?>
                            <?php endif;?>
                        </p>

		            </div>
		        </div>
		    </div>
        </section>

		<section class="arbol-op">
			<div class="arbol-op__contenedor">
				<?php

					$image = get_field('imagen-arbol');

					if( !empty($image) ): ?>

						<img class="arbol-op__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>

			</div>
		</section>

    <?php
    wp_reset_postdata();
endif;

?>

<?php get_footer(); ?>
