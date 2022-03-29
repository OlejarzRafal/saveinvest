$(document).ready(function () {
    const about = new Swiper(".sec2-comfort__slider", {
       loop: true,
        // autoplay: {
        //     delay: 5000,
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
            nextEl: ".sec2-comfort__slider-nav .swiper-button-next",
            prevEl: ".sec2-comfort__slider-nav .swiper-button-prev",
        },
    });
});