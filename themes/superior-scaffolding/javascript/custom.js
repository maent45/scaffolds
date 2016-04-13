$(document).ready(function() {

    function sortResidentialLayout() {
        $('div.inner_wrapper').each(function() {
            // if element's index is odd then sort
            if($(this).index() % 2 !== 0) {

                var content_wrapper = $(this).find('div.residential_content');
                var img_wrapper = $(this).find('div.residential_img');

                $(content_wrapper).css('float','right');
                $(img_wrapper).css('float','left');
            }
        });
    }

    sortResidentialLayout();

});