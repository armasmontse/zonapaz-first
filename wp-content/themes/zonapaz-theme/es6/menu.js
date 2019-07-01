import {$, w} from './constants';

$(document).ready(function() {

    // - - - M e n ú   r e s p o n s i v e - - -
	const btnAbrir = $(".header__menu.open");
	const btnCerrar = $(".header__menu.close");
	const menu = $(".menu-mobile");

	// Abrir menu lateral
	btnAbrir.click(function() {
	    menu.addClass('show');
    	btnCerrar.addClass('show');
        btnAbrir.addClass('hide');
        $('#boton-fixed').css('opacity', '0');
    });

    // Cerrar menu lateral
	btnCerrar.click(function() {
		menu.removeClass('show');
		btnCerrar.removeClass('show');
        btnAbrir.removeClass('hide');
        $('#boton-fixed').css('opacity', '1');
	});



	// - - - M e n ú   B i o - - -
	const open = $(".boton--menu.show");
	const close = $(".boton--menu.close");
	const submenu = $(".submenu-hover");

	// Abrir menu lateral
	open.click(function() {
	    open.hide();
    	close.css({
            'display': 'flex',
        });
	    submenu.css({
            'display': 'flex',
        });
    });

    // Cerrar menu lateral
	close.click(function() {
		close.hide();
		open.css({
            'display': 'flex',
        });
		submenu.hide();
	});

	// - - - L e e r   m á s   s i n g l e - - -
	const leer = $(".contenido__leer-mas");
	const menos = $(".contenido__leer-menos");
	const parrafos = $(".contenido__extracto--full");

	if (parrafos.children().length == 0){
		leer.hide();
	}

	// Leer más
    leer.click(function() {
		parrafos.show();
		leer.hide();
		menos.show();
	});

	// Leer menos
	menos.click(function(){
		parrafos.hide();
		leer.show();
		menos.hide();
	});

});
