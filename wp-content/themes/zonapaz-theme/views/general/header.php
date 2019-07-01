<header class="header">
	<div class="grid__container">
		<div class="logo">
			<a href="<?php echo BLOGURL ?>">
				<img class="logo__imagen" src="<?php echo THEMEURL ?>images/logo/logo.png  " alt="">
			</a>
		</div>
		<div class="header__collapse">
            <button class="header__menu open">
            	MENÚ
            </button>
            <button class="header__menu close">
                Cerrar
            </button>
        </div>
		<div class="menu">
			<?php
                wp_nav_menu(array(
                    'menu'           => "main",
                    'theme_location' => 'header_menu',
                    'menu_class'     => 'lista',
            	));
            ?>
		</div>

        <div class="menu-mobile">
            <?php
                wp_nav_menu(array(
                    'menu'           => "main",
                    'theme_location' => 'sidebar_menu',
                    'menu_class'     => 'lista-responsive',
                ));
            ?>
        </div>
	</div>
</header>