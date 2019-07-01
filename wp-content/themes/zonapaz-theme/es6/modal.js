import {$, w} from './constants';

w.load(() => {

    // Modal que abre una galería
    const modalGallery = $('.modal-gallery')

    if(modalGallery.length) {

        modalGallery.slick({
            autoplay: false,
            arrows: true,
            dots: true,
            prevArrow: $('.galeria-prev'),
            nextArrow: $('.galeria-next'),
        })

        const modal = $('#modal')

        $('.modalOpen').click(function() {
            modal.css('display', 'flex')
            modalGallery.slick('setPosition', 0)
        });

        $('.close').click(function() {
            modal.css('display', 'none')
        })

        modalGallery.click(function () {
            modal.css('display', 'none')
        })

    }


    //Modal de Iframe de Single
    const modalCont = $('.modal-iframe');
    const modalIframe = $('#modalIframe');
    const video = $('.galeria__video');


    video.click(function () {
        modalIframe.css('display', 'flex')
        modalCont.slick('setPosition', 0)
    });

    $('.close').click(function () {
        modalIframe.css('display', 'none');
    })

    modalIframe.click(function () {
        modalIframe.css('display', 'none');
    })



    //Modal que abre el order de Search
    const abrirSearch = $('#search-order');
    const close = $('.search__close');
    const modalSearch = $('.search');

    const abrirFilter = $('#search-filter');
    const modalFilter = $('.filter');


    abrirSearch.click(function() {
        modalSearch.addClass('view');
    });

    close.click(function() {
        modalSearch.removeClass('view');
    })


    abrirFilter.click(function() {
        modalFilter.addClass('view');
    });

    close.click(function() {
        modalFilter.removeClass('view');
    })


    // Modal fototeca single
    const modalFototeca = $('.modal-fototeca')

    if(modalFototeca.length) {

        modalFototeca.slick({
            autoplay: false,
            arrows: true,
            dots: false,
            prevArrow: $('.galeria-prev'),
            nextArrow: $('.galeria-next'),
        })

        const modal = $('#modal-fototeca')

        
        $('.modalOpenFototeca').click(function() {
            // modal.css('display', 'flex')
            modal.css('width', '100%');
            modalFototeca.slick('setPosition', 0);
            
            let index = $(this).data('index');
            console.log(index);
            
            
            modalFototeca.slick('slickGoTo', index - 1);
        });

        $('.close').click(function() {
            modal.css('width', '1px')
            // $('.modal-fototeca').slick('unslick');
        })

        modalFototeca.click(function () {
            modal.css('display', 'none')
        })

        
    }
    
    // const item = $('.grid-item');

    // item.click(function() {

    //     let index = $(this).data('index');

    //     console.log(index);

    //     modalFototeca.slick('refresh');

    //     modalFototeca.slick('slickGoTo', index);
        
    // })

});
