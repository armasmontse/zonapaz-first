import {$, w} from './constants';

w.load(() => {
	
	$('.galeria-single__slider').slick({
		dots: true,
        prevArrow: $('.galeria-prev'),
		nextArrow: $('.galeria-next'),
    });

    $('.home__slider').slick({
    	autoplay: true,
		dots: false,
        prevArrow: $('.galeria-prev'),
		nextArrow: $('.galeria-next'),
    }); 
    
});