<?php

global $term;

// Galeria y archivos destacados del tema.
$theme_featured = get_field('featured', $term);

// Archivos destacados.
$featured = get_field('featured');

$post_types_titles = [
    'media' => '',
	'bibliography' => '',
	'work' => '',
	'correspondence' => '',
	'conversation' => '',
	'invention' => ''
];

$author = get_field('author');

// Seteamos los titulos de cada post_type
foreach($post_types_titles as $post_type => $title) {
    $options_page_name = $post_type . '-options';
    $post_types_titles[$post_type] = get_field('title', $options_page_name);
}

?>
<!-- I n t r o -->
<div class="intro-home">
	<div class="row">
		<div class="grid__container--fluid">
			<div class="franja-gris">
				<div class="franja-gris__contenedor">
					<h2 class="titulo">
						<span>Zona</span><span class="titulo--amarillo">Paz</span>
					</h2>

					<!--D e s c r i p c i ó n -->
					<div class="descripcion">
						<?php the_content(); ?>
					</div>

					<!-- F o t o -->
					<div class="foto">
						<div class="foto__box--aspect">
							<img class="foto__box--imagen" src="<?php echo esc_url( get_thumbnail_image_url() ); ?>" alt="">
						</div>
						<span class="foto__creditos"><?php echo esc_html( wp_get_attachment_caption(get_post_thumbnail_id()) ); ?></span>
					</div>

					<!-- D e s t a c a d o s -->
                    <?php if($featured): ?>
					<div class="destacados">
						<h4 class="destacados__titulo">
							Destacados
						</h4>
						<?php foreach($featured as $post): ?>
                            <a class="destacados__box" href="<?php echo esc_url( get_permalink($post) ); ?>">
                                <p class="destacados__nombre"><?php echo esc_html( $post->post_title ); ?></p>
                                <p class="destacados__autor"><?php echo get_field('author', $post->ID); ?></p>
                            </a>
                        <?php endforeach; ?>
					</div>
                    <?php endif; ?>
				</div>

			</div>

			<div class="franja-amarilla">
				<div class="franja-amarilla__contenedor">
					<?php if($theme_featured): ?>
                        <?php foreach($theme_featured as $post): ?>
                            <a class="temas__hover" href="<?php echo esc_url( get_permalink($post) ); ?>">
                                <div class="temas">
                                    <h4 class="temas__espacio"><?php echo esc_html( $post_types_titles[$post->post_type] ); ?></h4>
                                    <p class="temas__titulo"><?php echo esc_html( $post->post_title ); ?></p>
                                    <p class="temas__autor"><?php echo esc_html( $post->author ); ?></p>

                                    <div class="temas__extracto">
                                        <?php echo esc_html( get_the_excerpt($post) ); ?>
                                    </div>
                                    <p class="temas__link">Leer mas</p>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php endif; ?>
				</div>
			</div>

		</div>
	</div>
</div>
