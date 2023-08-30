

const swiper = new Swiper('.js-trustpilot-slider__slider_api', { 
    loop: true,
    centeredSlides: true,
    slidesPerView: 3,
    loopFillGroupWithBlank: true,
    spaceBetween: 0,
    autoHeight: false,
    speed: 1e3,
    touchStartPreventDefault: false,
    roundLengths: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 35
        },
        500: {
            slidesPerView: 1,
            spaceBetween: 60
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 35
        }
    }
});
