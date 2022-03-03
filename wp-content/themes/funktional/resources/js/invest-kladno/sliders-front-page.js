$(document).ready(function () {
    const Contact = new Swiper(".front-slider", {
        autoplay: {
            delay: 5000,
        },
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        // slidesPerView: 1,
        // spaceBetween: 100,
        speed: 500,
        // If we need pagination
        pagination: {
            el: ".front-slider-pagination .swiper-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: ".front-slider-content-swiper .swiper-button-next",
            prevEl: ".front-slider-content-swiper .swiper-button-prev",
        },
    });
    /* MATCH HEIGHT */
    // $(" .awards__content").matchHeight();
});
