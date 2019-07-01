<?php 

$content = get_the_content();

$array_content = array_filter(explode("\r\n", $content));

?>
<!-- E x t r a c t o -->
<div class="extracto">
	<div class="grid__container">
		<div class="extracto__contenedor">
			<?php echo apply_filters('the_content', array_shift($array_content)); ?>
		</div>
	</div>
</div>

<!-- C o n t e n i d o  -->
<div class="contenido">
	<div class="grid__container">
		<div class="contenido__contenedor">
			<?php echo apply_filters('the_content', implode("\r\n", $array_content)); ?>
		</div>
	</div>
</div>