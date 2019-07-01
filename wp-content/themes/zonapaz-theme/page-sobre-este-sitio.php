<?php

get_header();

$spaces = [
	'media' => 0,
	'bibliography' => 0,
	'work' => 0,
	'correspondence' => 0,
    'conversation' => 0,
	'invention' => 0
];


foreach($spaces as $post_type => $count){
	$count_posts = wp_count_posts($post_type);
	if(property_exists($count_posts, 'publish')){
		$spaces[$post_type] = intval($count_posts->publish);
	}
}

$total = array_reduce($spaces, function($count, $next) {
	return $count + $next;
});

if (have_posts()) : while (have_posts()) : the_post();

?>

<section class="about">

	<?php get_template_part('views/about/banner'); ?>

	<?php get_template_part('views/about/introduccion'); ?>

	<!-- T o t a l   a r c h i v o s -->
	<div class="total-archivos">
		<div class="total-archivos__box">
			<span class="numero"><?php echo number_format($total); ?></span>
			<span class="texto">
				<?php esc_html_e('archivos en Zona Paz', TRANSDOMAIN); ?>
			</span>
		</div>
	</div>

	<!-- E s p a c i o s -->
	<div class="espacios">
		<div class="espacios__contenedor">
			<div class="grid__container">
				<?php foreach($spaces as $post_type => $count): $options_page_name = $post_type . '-options'; ?>
					<div class="grid__col-1-2">
						<div class="espacios__box">

                            <a href="<?php echo get_post_type_archive_link( $post_type ) ?>">


                                <h4 class="espacios__titulo"><?php the_field('title', $options_page_name); ?></h4>
                                <div class="espacios__totales">
                                    <?php echo number_format($count); ?> <?php esc_html_e('archivos', TRANSDOMAIN); ?>
                                </div>
                            </a>
							<div class="espacios__descripcion">
								<?php the_field('description', $options_page_name); ?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

	<?php get_template_part('views/about/contribuye'); ?>

</section>

<?php

endwhile; endif;

get_footer();
