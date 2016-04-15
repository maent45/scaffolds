$(document).ready(function() {

    // lightbox gallery
    var gallery = $('.gallery a').simpleLightbox({
        // shows fullscreen overlay
        overlay:    true,
        // shows loading spinner
        spinner:    true,
        // shows navigation arrows
        nav:      true,
        // text for navigation arrows
        navText:    ['&larr;','&rarr;'],
        // shows image captions
        captions:   true,
        captionSelector:  'img',
        captionType:    'attr',
        captionPosition:  'bottom',
        // captions attribute (title or data-title)
        captionsData: 'title',
        // shows close button
        close:      true,
        // text for close button
        closeText:    'X',
        // show counter
        showCounter:  true,
        // file extensions
        fileExt:    'png|jpg|jpeg|gif',
        // animation speed in ms
        animationSpeed: 250,
        // image preloading
        preloading:   true,
        // keyboard navigation
        enableKeyboard: true,
        // endless looping
        loop:     true,
        // closes the lightbox when clicking outside
        docClose:     true,
        // how much pixel you have to swipe
        swipeTolerance: 50,
        // lightbox wrapper Class
        className:    'simple-lightbox',
        // width / height ratios
        widthRatio:   0.8,
        heightRatio:  0.9,
        // disable right click
        disableRightClick:  false
    });

    // sort residential div layout
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

    // generate iframe map based on db value
    $("address").each(function(){
        var embed ="<iframe width='100%' height='350' frameborder='0' scrolling='no'  marginheight='0' marginwidth='0'   src='https://maps.google.com/maps?&amp;q="+ encodeURIComponent( $(this).text() ) +"&amp;output=embed'></iframe>";
        $(this).html(embed);

    });

    // remove other divs from login page
    $('.Page div').each(function() {
        if ($(this).hasClass('map_wrapper')) {
            $(this).remove();
        }
    });

});

