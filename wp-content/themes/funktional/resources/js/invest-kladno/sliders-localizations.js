$(document).ready(function () {
    const Localisation = new Swiper(".icon-localization__content", {
        slidesPerView: 1,
        // spaceBetween: 15,
        speed: 500,
        // If we need pagination
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        // },
        breakpoints: {
            900: {
                slidesPerView: 2,
                // slidesPerGroup: 4,
                // spaceBetween: 20,
                // speed: 1200,
            },

            // when window width is >= 320px
            1100: {
                slidesPerView: 3,
                // slidesPerGroup: 4,
                // spaceBetween: 20,
                // speed: 1200,
            },
            // when window width is >= 480px
            1400: {
                slidesPerView: 4,
                // slidesPerGroup: 6,
                // spaceBetween: 30,
                // speed: 1500,
            },
        },
        navigation: {
            nextEl: ".icon-localization .swiper-contenet-nav .swiper-button-next",
            prevEl: ".icon-localization .swiper-contenet-nav .swiper-button-prev",
        },
    });
    /* MATCH HEIGHT */
    // $(" .awards__content").matchHeight();
});
