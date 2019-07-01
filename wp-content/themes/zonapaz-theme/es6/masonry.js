import {$, w} from './constants';
import Masonry from 'masonry-layout';

w.load(() => {

	var cards = $(".cards");
	var list = $(".list");

	var init_masonry = $('#init_masonry');


    // Si está abierto hay que cerrarlo.
    // Se inicializa masonry al dar click en cards
	cards.on("click", function() {
		init_masonry.removeClass('list');
		list.removeClass('order-active');
        cards.addClass('order-active');

        const masonry = document.querySelectorAll('.masonry');

        if (masonry) {
            masonry.forEach(element => {
                new Masonry(element, {
                    itemSelector: '.masonry-item',
                    columnWidth: '.masonry-sizer',
                    percentPosition: true
                });
            });
        }
	});

	list.on("click", function() {
		init_masonry.addClass('list');
		cards.removeClass('order-active');
		list.addClass('order-active');
    });



    // Masonry Fototeca
    $('.grid-fototeca').masonry({
        // options
        itemSelector: '.grid-item-fototeca',
        columnWidth: 200
      });
    







});
