jQuery(document).ready(function ($) {
    if ($(document).width() > 992) {
        $('#nav .dropdown').removeClass("open");
    }
    if ($(document).width() < 992) {
        $('#nav .dropdown').addClass("open");
    }

    $(window).resize(function () {
        if (window.innerWidth < 992) {
            $('.dropdown').addClass("open");
        } else if (window.innerWidth > 992) {
            $('.dropdown').removeClass("open");
        }
    });
});
(function () {
    let topSection = $('.navbar');
    let topSectionHeight = topSection.height();
    let main = document.querySelector(".mainSection");

    if (document.querySelector(".mainSection") === null) {
        main = document.querySelector(".headerSection");
    }
    if (window.innerWidth > 992) {
        $(document).on('scroll', function () {

            var top_of_screen = $(window).scrollTop();

            if (topSectionHeight > top_of_screen + 15) {
                topSection.removeClass("animated slideInDown fixed");
                main.classList.remove("jsFix");
            } else {
                topSection.addClass("animated slideInDown fixed");
                main.classList.add("jsFix");
            }
        });
    }

})();

