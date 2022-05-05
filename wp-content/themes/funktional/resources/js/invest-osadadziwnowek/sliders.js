$(document).ready(function () {
    const Contact = new Swiper(".dziwnowek-swiper", {
        loop: true,
        autoplay:{
            delay: 5000,
        },
        // effect: "fade",
        // fadeEffect: {
        //     crossFade: true,
        // },
        // slidesPerView: 1,
        // spaceBetween: 100,
        speed: 800,
        // If we need pagination
        pagination: {
            el: ".dziwnowek-swiper-pagination .swiper-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: ".dziwnowek-swiper-content-swiper .swiper-button-next",
            prevEl: ".dziwnowek-swiper-content-swiper .swiper-button-prev",
        },
    });
    /* MATCH HEIGHT */
    // $(" .awards__content").matchHeight();
});
