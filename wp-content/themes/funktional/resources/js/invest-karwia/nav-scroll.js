
$(document).ready(function () {
 var stickyNav = function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > 0) {
            $(".karwia-nav").addClass("karwia-nav--sticky");
            $(".logo-karwia").addClass("logo-karwia--sticky");
            $(".btn-nav").addClass("btn-nav--sticky")
            $(".nav-sticky").addClass("nav-sticky--sticky")
            $(".logo-karwia-sticky").addClass("logo-karwia-sticky--sticky")
        } else {
            $(".karwia-nav").removeClass("karwia-nav--sticky");
            $(".logo-karwia").removeClass("logo-karwia--sticky");
            $(".btn-nav").removeClass("btn-nav--sticky")
            $(".nav-sticky").removeClass("nav-sticky--sticky")
            $(".logo-karwia-sticky").removeClass("logo-karwia-sticky--sticky")
        }

    };
    stickyNav();
    $(window).scroll(function () {
        stickyNav();
    });
});

