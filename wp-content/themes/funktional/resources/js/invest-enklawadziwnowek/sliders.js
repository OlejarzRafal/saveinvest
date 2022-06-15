$(document).ready(function () {
    $('.slider').slick({
        arrows: false,
        dots: true,
    });

    $('.slider-2').slick({
        arrows: true,
        dots: false,
        prevArrow: "<div class=\"slick-prev\"></div>",
        nextArrow: "<div class=\"slick-next\"></div>",
        speed: 2000,
        responsive: [
            {
                breakpoint: 2000,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    centerPadding: '1px',
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.testimonials-view').slick({
        arrows: false,
        dots: true,
        responsive: [
            {
                breakpoint: 2000,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});