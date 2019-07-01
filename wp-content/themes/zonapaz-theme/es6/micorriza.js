import {$, w} from './constants';
import './slider'
import './menu'
import './masonry'
import './modal'
import './page-top'
import './view-more'
import './view-more-xs'
import { renderYoutube } from './video'
import './scrollit'
w.load(() => {
    $('.contenido__full a:has(strong)').addClass('single-post__full-super');
    $('.contenido__wysiwyg a:has(strong)').addClass('single-post__full-super');
    $('.footnote-cronologia a:has(strong)').addClass('single-post__full-super');

    renderYoutube();

    // $('div.contenido__footnote:has(p)').addClass('single-post__full-super');
    // $("div.contenido__footnote").children().css("background-color", "red");
    // $(element).attr('id', 'newID');

    // Single post
    var i = 1;
    $("div.contenido__footnote p").each(function (i) {
        i++;
        $(this).attr('id', 'note' + i);
    });
    $("div.contenido__full p a.single-post__full-super").each(function (i) {
        i++;
        $(this).attr('id', 'text' + i);
    });

    // Escrito por OctavioPaz
    var j = 1;
    $("div.escrito-op p").each(function (j) {
        j++;
        $(this).attr('id', 'note-op' + j);
    });
    $("div.contenido__wysiwyg p a.single-post__full-super").each(function (j) {
        j++;
        $(this).attr('id', 'text-op' + j);
    });

    // Cronología
    var k = 1;
    $("div.footnote-cronologia-citas p").each(function (k) {
        k++;
        $(this).attr('id', 'note-cronologia' + k);
    });
    $("div.footnote-cronologia p a.single-post__full-super").each(function (k) {
        k++;
        $(this).attr('id', 'text-cronologia' + k);
    });

});

$(document).ready(function() {
    console.log('Hello world from El Cultivo!')

    // Enviar formulario.
    $("#contactForm").validate({
        submitHandler: function(form, event) {
            event.preventDefault()
            let submit = $('#sendContactForm')
            submit.prop('disabled', true)
            $.post(cltvo_js_vars.ajax_url, $(form).serializeArray()).done(() => {
                form.reset()
                submit.prop('disabled', false)
                alert('Hemos recibido tu mensaje, gracias por contactarnos.')
            });
        }
    })


    // Botón Biografía

    function myFunction(x) {
        if (x.matches) {
            function fixedMobile() {
                var $fixed = $('#boton-fixed');
                var $submenu = $('.submenu-hover');

                if ($(window).scrollTop() > 260)
                    $fixed.css({
                        'position': 'fixed',
                        'top': '0px',
                    });

                else
                    $fixed.css({
                        'position': 'relative',
                        'top': 'auto'
                    });
            }
            $(window).scroll(fixedMobile);

        } else {
            function fixedDesktop() {
                var $fixed = $('#boton-fixed');
                var $submenu = $('.submenu-hover');

                if ($(window).scrollTop() > 430)
                    $fixed.css({
                        'position': 'fixed',
                        'top': '0px',
                    });

                else
                    $fixed.css({
                        'position': 'relative',
                        'top': 'auto'
                    });
            }
            $(window).scroll(fixedDesktop);


        }
    }

    var x = window.matchMedia("(max-width: 650px)")



    $(window).scroll(myFunction(x));

    // Prueba Zoom Arbol

    //CRONOLOGIA
    var dropdown = $(".boton");
    var lista = $(".listado-hover");
    var open = false;

    dropdown.on("click", function() {

        // Si está abierto hay que cerrarlo.
        if(open) {
            lista.removeClass('opacidad');
            console.log('REMOVE OPACCITY')
            open = false;
        }else {
            lista.addClass('opacidad');
            console.log('ADD OPACCITY')
            open = true;
        }

    });

})
