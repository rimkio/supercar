(function ($) {
    "use strict";



    jQuery(document).ready(function ($) {

        var mySwiperSingle = new Swiper('.swiper-container.c-coverflow__slider.js-coverflow__slider', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            // touchStartPreventDefault: true,
            grabCursor: false,
            initialSlide: 4,
            slidesPerView: 1,
            centeredSlides: true,
            speed: 1000,
            autoplay: false,
            slideToClickedSlide: false,
            effect: "coverflow",
            coverflowEffect: {
                rotate: 0
            },
            lightbox: true,
            breakpoints: {
                640: {
                    slidesPerView: 1.7
                },
                992: {
                    touchStartPreventDefault: false,
                    grabCursor: false,
                    slidesPerView: 1.5,
                    centeredSlides: true,
                    spaceBetween: 20,
                    speed: 1000,
                    autoplay: {
                        delay: 3000
                    },
                    effect: "coverflow",
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 70,
                        depth: 90,
                        modifier: 2,
                        scale: 1,
                        slideShadows: false
                    }
                },
                1280: {
                    touchStartPreventDefault: false,
                    grabCursor: false,
                    slidesPerView: 3.1,
                    centeredSlides: true,
                    speed: 1000,
                    autoplay: {
                        delay: 3000
                    },
                    effect: "coverflow",
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 95,
                        depth: 90,
                        modifier: 2,
                        scale: 1,
                        slideShadows: false
                    }
                }
            }
        });

        $('li.c-gallery-nav__li .c-gallery-nav__link[data-section-link="interior"]').on('click', function () {
            var filter = $(this).attr('data-section-link');
            console.log(filter);
            var numberEx = $('.swiper-container.single-slider .swiper-wrapper').attr('data-exterior');
            var numberIn = $('.swiper-container.single-slider .swiper-wrapper').attr('data-interior');
            if( filter == 'interior' ) {
                mySwiperSingle.slideTo(numberIn);
            }

            // $('li.c-gallery-nav__li .c-gallery-nav__link').removeClass('is-active');
            // $(this).addClass('is-active');
            //
            // return false;
        });


    });

    jQuery(window).load(function () {


    });

})(jQuery);