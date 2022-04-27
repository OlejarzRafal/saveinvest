$(document).ready(function () {
    const SeaGolfAbout = new Swiper(".sec4-slider__slider", {
        // loop: true,
        // autoplay: {
        // delay: 5000,
        // },

        speed: 500,
        slidesPerView: 1,

        breakpoints: {
            900: {
                slidesPerView: 2,
            },

            1100: {
                slidesPerView: 3,
            },

            1400: {
                slidesPerView: 4,
            },
        },

        navigation: {
            nextEl: ".sec4-slider__slider-nav .swiper-button-next",
            prevEl: ".sec4-slider__slider-nav .swiper-button-prev",
        },
    });
});