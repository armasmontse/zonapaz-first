<!-- B a n n e r -->
<div class="banner">
	<div class="box__aspect">
		<img class="box__imagen" src="<?php echo get_thumbnail_image_url(); ?>" alt="">
	</div>
	<div class="grid__container">
		<div class="banner__creditos">
			<?php echo wp_get_attachment_caption(get_post_thumbnail_id()); ?>
		</div>
	</div>
</div>