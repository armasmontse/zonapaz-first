<!-- H e a d e r   l i s t a d o -->
<div class="header-filtros">
	<div class="grid__container">
		<div>
			<h3 class="titulo-espacio">
				Zona paz: Medios
			</h3>
		</div>

		<div class="flex-contenedor">
			<div class="col-1">
				<div class="search">
					<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
					    <input type="search" class="" placeholder="<?php echo __('Buscar en Medios', TRANSDOMAIN); ?>" value="<?php echo get_search_query(); ?>" name="s">
					</form>
				</div>
			</div>
			<div class="col-11">
				<div class="orden__row">
					
					<div class="left">
						<span>Ordenar por:</span>
						<span>Fecha</span>
						<span>Título</span>
					</div>
					
					<div class="right">
						<span>
							<img class="logo__imagen" src="<?php echo THEMEURL ?>images/medios/cuadricula.png" alt="">
						</span>
						<span>
							<img class="logo__imagen" src="<?php echo THEMEURL ?>images/medios/lista-hover.png" alt="">
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>