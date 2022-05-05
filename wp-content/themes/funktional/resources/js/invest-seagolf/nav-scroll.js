$(document).ready(function () {
    var stickyNav = function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > 0) {
            $(".seagolf-nav").addClass("seagolf-nav--sticky");
            $(".seagolf-nav__container").addClass("seagolf-nav__container--sticky");
            $(".logo-seagolf").addClass("logo-seagolf--sticky");
            $(".btn-nav").addClass("btn-nav--sticky")
            $(".nav-sticky").addClass("nav-sticky--sticky")
            $(".logo-seagolf-sticky").addClass("logo-seagolf-sticky--sticky")
            $(".seagolf-nav__container__burger").addClass("seagolf-nav__container__burger--sticky")
        } else {
            $(".seagolf-nav").removeClass("seagolf-nav--sticky");
            $(".seagolf-nav__container").removeClass("seagolf-nav__container--sticky");
            $(".logo-seagolf").removeClass("logo-seagolf--sticky");
            $(".btn-nav").removeClass("btn-nav--sticky")
            $(".nav-sticky").removeClass("nav-sticky--sticky")
            $(".logo-seagolf-sticky").removeClass("logo-seagolf-sticky--sticky")
            $(".seagolf-nav__container__burger").removeClass("seagolf-nav__container__burger--sticky")
        }
    };
    stickyNav();
    $(window).scroll(function () {
        stickyNav();
    });
});