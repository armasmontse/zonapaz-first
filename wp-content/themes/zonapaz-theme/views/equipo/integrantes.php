<!-- E q u i p o -->
<div class="espacios">
    <div class="espacios__contenedor">
        <div class="grid__container">
            <?php if( have_rows('integrantes_equipo') ): ?>

                <?php while( have_rows('integrantes_equipo') ): the_row(); 

                    // vars
                    $nombre = get_sub_field('nombre');
                    $escuela = get_sub_field('escuela');
                    $descripcion = get_sub_field('descripcion');

                    ?>                    
                        <div class="grid__col-1-2">
                            <div class="espacios__box">
                                
                                <?php if( $nombre ): ?>
                                    <h4 class="espacios__titulo"><?php echo $nombre; ?></h4>
                                <?php endif; ?>
                                    
                                <?php if( $escuela ): ?>
                                    <div class="espacios__totales">
                                        <p><?php echo $escuela; ?></p>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if( $descripcion ): ?> 
                                    <div class="espacios__descripcion">
                                        <?php echo $descripcion; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                
                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
</div>