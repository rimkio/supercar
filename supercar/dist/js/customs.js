(function ($) {
    "use strict";



    jQuery(document).ready(function ($) {

        $('a.vehicle__tab-link.js-vehicle-enquiry-canvas').click(function(e) {
            e.preventDefault();
            if ($('.single-product').length) {
                var title = $(this).data('car');
                $('[name="titleproduct"]').val(title);
            }
        });

        // Enable Magnific Popup
        $('.single-product .vehicle__slider .swiper-slide a').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });

    });

    jQuery(window).load(function () {


    });

})(jQuery);