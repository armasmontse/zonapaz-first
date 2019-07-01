
<?php $title = get_field('titulo_de_colaboradores'); ?>
<!-- E q u i p o -->
<div class="equipo-colaboradores">
    <div class="equipo-colaboradores__contenedor">
        <div class="grid__container">


            <?php if( $title ): ?>
                <h3 class="equipo-colaboradores__title">
                    <?php echo $title; ?>
                </h3>
            <?php endif; ?>

            <?php if( have_rows('integrantes_equipo') ): ?>

                <?php while( have_rows('colaboradores_equipo') ): the_row();

                    // vars
                    $area = get_sub_field('area');
                    $descripcion = get_sub_field('descripcion');

                    ?>

                    <div class="equipo-colaboradores__box">

                        <?php if( $area ): ?>
                            <h4 class="equipo-colaboradores__area"><?php echo $area; ?></h4>
                        <?php endif; ?>

                        <?php if( $descripcion ): ?>
                            <div class="equipo-colaboradores__descripcion">
                                <?php echo $descripcion; ?>
                            </div>
                        <?php endif; ?>
                    </div>


                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
</div>
