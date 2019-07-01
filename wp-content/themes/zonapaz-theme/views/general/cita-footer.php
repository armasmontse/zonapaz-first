<?php 

$args = [
	'posts_per_page' => 1,
	'orderby' => 'rand',
	'post_type' => 'quote'
];

$query = new WP_Query($args);

?>
<!-- C i t a   f o o t e r -->
<?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
	<div class="cita">
		<div class="cita__contenedor">
			<div class="cita__contenido">
				<?php the_field('content'); ?>
			</div>
			<div class="cita__nombre">
				<?php the_field('author'); ?>
			</div>
			<div class="cita__fecha">
				<?php the_field('reference'); ?>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>
<?php 

wp_reset_postdata();