$(document).ready(function () {
    const testimonialHomeSeaGolf = new Swiper(".sec9-testimonial__box .swiper", {
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
            el: ".sec9-testimonial__box__nav .swiper-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: ".sec9-testimonial__box__nav  .swiper-button-next",
            // prevEl: ".front-slider-content-swiper .swiper-button-prev",
        },
    });
});

$(document).ready(function () {
    const testimonialContactSeaGolf = new Swiper(".sec4-testimonial .swiper", {
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
            el: ".sec4-testimonial__box__nav .swiper-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: ".sec4-testimonial__box__nav  .swiper-button-next",
            // prevEl: ".front-slider-content-swiper .swiper-button-prev",
        },
    });
});
