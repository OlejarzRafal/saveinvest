$(document).ready(function () {
    const Contact = new Swiper(".testimonial-kladno__container .box", {
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        // slidesPerView: 1,
        spaceBetween: 100,
        speed: 500,
        // If we need pagination
        pagination: {
            el: ".swiper-contenet-pagination .swiper-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: ".testimonial-kladno .swiper-contenet-testimonial .swiper-button-next",
            prevEl: ".testimonial-kladno .swiper-contenet-testimonial .swiper-button-prev",
        },
    });
    /* MATCH HEIGHT */
    // $(" .awards__content").matchHeight();
});
