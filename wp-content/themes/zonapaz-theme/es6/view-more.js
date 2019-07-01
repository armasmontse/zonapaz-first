import {$, w} from './constants';

w.load(() => {

    var more = $(".search-more");
    var open = false;
    var listContent = $('.search__filters-content.desktopFilterCount');
    var numDivs = listContent.length;

    var i;
    for (i = 1; i < numDivs + 1; i++) {

        var listFilters = $('.search__filters-content-' + i + ' ul');

        function countFilters() {
            if (listFilters.children().length > 6) {
            } else {
                $('#search_more_' + i ).hide();
            }
        }
        countFilters();
    }



    function OpenButton (index) {

        if (open) {
            $('#search_more_' + index).html("Ver más");
            $('#search_more_' + index).removeClass('viewFilters');
            $('.search__filters-content-' + index).removeClass('viewFiltersContent');
            open = false;

        } else {
            $('#search_more_' + index).html("Ver menos");
            $('#search_more_' + index).addClass('viewFilters');
            $('.search__filters-content-' + index).addClass('viewFiltersContent');
            open = true;
        }
    }


    more.click(function () {

        let index = $(this).data('index');
        OpenButton(index);

    });



});
