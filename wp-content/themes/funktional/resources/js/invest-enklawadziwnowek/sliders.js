$(document).ready(function () {
    const carousellocalization = new Swiper(".ek-fadein-dziwnowek", {
        loop: true,
        autoplay: {
        delay: 5000,
        },

        speed: 500,
        slidesPerView: 1,

        breakpoints: {
            900: {
                slidesPerView: 3,
            },

            1100: {
                slidesPerView: 4,
            },

            1400: {
                slidesPerView: 6,
            },
        },

        navigation: {
            nextEl: ".container-fluid-slider-nav .slick-prev",
            prevEl: ".container-fluid-slider-nav .slick-next",
        },
    });


     const testimonialContactEnklDziw = new Swiper(".carousel-opinion.swiper", {
        loop: true,
         // autoplay: {
         //     delay: 5000,
         // },
         effect: "fade",
         fadeEffect: {
             crossFade: true,
         },
         speed: 200,
         // If we need pagination
         pagination: {
             el: ".carousel-opinion .swiper-pagination",
             clickable: true,
         },
     });
});