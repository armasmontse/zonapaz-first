<?php

// Variable set on header.php
global $featured_edition;

if (!empty($featured_edition)): 
	
	$post = $featured_edition;
	setup_postdata($post);

    add_to_global_query();

	$images = get_field('gallery');
	$size = 'large'; // (thumbnail, medium, large, full or custom size)

	?>

<!-- E d i c i ó n   -   s l i d e r -->
	<div class="edicion">
		<div class="grid__row">
			<div class="grid__container">
				<div class="grid__col-1-8">
					<div class="edicion__box-slider">
					
						<?php if($images): ?>
							<div class="slider-edicion">

								<?php foreach( $images as $image ): ?>
			
									<img src="<?php echo $image['sizes']['large']; ?>" alt="">
										
								<?php endforeach; ?>

							</div>

						<?php endif; ?>

					</div>
				</div>
				<div class="grid__col-1-3">
					<div class="edicion__box-contenido">
						<h4 class="edicion__titulo"><?php the_title(); ?></h4>
						<div class="edicion__subtitulo"><?php the_content(); ?></div>
						<a class="edicion__suscribete" href="<?php echo BLOGURL ?>/puntos-de-venta">suscríbete</a>
					</div>
				</div>	
			</div>
		</div>
	</div>
			
	<?php wp_reset_postdata(); ?>
	
<?php endif; ?>