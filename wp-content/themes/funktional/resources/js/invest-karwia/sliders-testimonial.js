$(document).ready(function () {
    const testimonialHome = new Swiper(".sec5-testimonial__content__entry", {
       loop: true,
        // autoplay: {
        //     delay: 5000,
        // },
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        // slidesPerView: 1,
        // spaceBetween: 100,
        speed: 200,
        // If we need pagination
        pagination: {
            el: ".sec5-testimonial__content__nav .swiper-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: ".sec5-testimonial__content__nav .swiper-button-next",
            // prevEl: ".front-slider-content-swiper .swiper-button-prev",
        },
    });
});


$(document).ready(function () {
    const testimonialContact = new Swiper(".sec4-testimonial__content__entry", {
       loop: true,
        // autoplay: {
        //     delay: 5000,
        // },
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        // slidesPerView: 1,
        // spaceBetween: 100,
        speed: 200,
        // If we need pagination
        pagination: {
            el: ".sec4-testimonial__content__nav .swiper-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: ".sec4-testimonial__content__nav .swiper-button-next",
            // prevEl: ".front-slider-content-swiper .swiper-button-prev",
        },
    });
});
