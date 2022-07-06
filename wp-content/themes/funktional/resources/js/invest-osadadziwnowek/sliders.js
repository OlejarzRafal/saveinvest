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


$(document).ready(function () {
    const Contact = new Swiper(".sec7__opinions", {
        loop: true,
        autoplay:{
            delay: 5000,
        },
        // effect: "fade",
        // fadeEffect: {
        //     crossFade: true,
        // },
        slidesPerView: 1,
        spaceBetween: 150,
        speed: 800,
        // If we need pagination
        pagination: {
            el: ".opinion-swiper-pagination .swiper-pagination",
            clickable: true,
        },

        // navigation: {
        //     nextEl: ".dziwnowek-swiper-content-swiper .swiper-button-next",
        //     prevEl: ".dziwnowek-swiper-content-swiper .swiper-button-prev",
        // },
    });
    /* MATCH HEIGHT */
    // $(" .awards__content").matchHeight();
});

$(document).ready(function () {
    const Contact = new Swiper(".contact-opinion-sec5", {
        loop: true,
        autoplay:{
            delay: 5000,
        },
        slidesPerView: 1,
        spaceBetween: 150,
        speed: 800,

            // If we need pagination
            pagination: {
                el: ".contact-opinion-swiper-pagination .swiper-pagination",
                clickable: true,
            },
    });

});

$(document).ready(function () {
    const Contact = new Swiper(".localization-dziwnowek", {
        loop: true,
        autoplay:{
            delay: 5000,
        },
        slidesPerView: 5,
        spaceBetween: 30,
        speed: 800,

        breakpoints: {
            0: {
                slidesPerView: 2
              },
            576: {
              slidesPerView: 3
            },
            992: {
              slidesPerView: 4
            },
            // when window width is >= 640px
            1200: {
              slidesPerView: 5
            }
          },



         navigation: {
            nextEl: ".dziwnowek-localization-swiper .swiper-button-next",
            prevEl: ".dziwnowek-localization-swiper .swiper-button-prev",
        },

    });

});

