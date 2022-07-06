$(document).ready(function () {
    var stickyNav = function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > 0) {
            $(".dziwnowek-nav").addClass("dziwnowek-nav--sticky");
            $(".dziwnowek-nav").addClass("dziwnowek-nav__home--sticky");
            $(".logo-karwia").addClass("logo-karwia--sticky");
            $(".btn-nav").addClass("btn-nav--sticky")
            $(".nav-sticky").addClass("nav-sticky--sticky")
            $(".logo-karwia-sticky").addClass("logo-karwia-sticky--sticky")
            $(".logo-test").addClass("active")
            $(".dziwnowek-nav__container__burger").addClass("dziwnowek-nav__container__burger--sticky")
        } else {
            $(".dziwnowek-nav").removeClass("dziwnowek-nav--sticky");
            $(".dziwnowek-nav").removeClass("dziwnowek-nav__home--sticky");
            $(".logo-karwia").removeClass("logo-karwia--sticky");
            $(".btn-nav").removeClass("btn-nav--sticky")
            $(".nav-sticky").removeClass("nav-sticky--sticky")
            $(".logo-karwia-sticky").removeClass("logo-karwia-sticky--sticky")
            $(".logo-test").removeClass("active")
            $(".dziwnowek-nav__container__burger").removeClass("dziwnowek-nav__container__burger--sticky")
        }
    };
    stickyNav();
    $(window).scroll(function () {
        stickyNav();
    });
});