import { $, w} from './constants';

w.load(() => {

    var moreMobile = $(".search-more-mobile");
    var openMobile = false;
    var listContentMobile = $('.search__filters-content.mobileFilterCount');
    var numDivsMobile = listContentMobile.length;

    var i;
    for (i = 1; i < numDivsMobile + 1; i++) {

        var listFiltersMobile = $('.search__filters-content-mobile-' + i + ' ul');

        function countFiltersMobile() {
            if (listFiltersMobile.children().length > 6) {
                console.log('Hay mas de 5 list');
            } else {
                $('#search_more_mobile_' + i).hide();
            }
        }
        countFiltersMobile();
    }



    function OpenButtonMobile(indexMobile) {

        if (openMobile) {

            $('#search_more_mobile_' + indexMobile).html("Ver más");
            $('#search_more_mobile_' + indexMobile).removeClass('viewFilters');
            $('.search__filters-content-mobile-' + indexMobile).removeClass('viewFiltersContent');
            openMobile = false;

        } else {

            $('#search_more_mobile_' + indexMobile).html("Ver menos");
            $('#search_more_mobile_' + indexMobile).addClass('viewFilters');
            $('.search__filters-content-mobile-' + indexMobile).addClass('viewFiltersContent');
            openMobile = true;
        }
    }


    moreMobile.click(function () {

        let indexMobile = $(this).data('index-mobile');
        OpenButtonMobile(indexMobile);

    });



});
