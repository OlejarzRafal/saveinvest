
$(document).ready(function () {
   var stickyNavTop = $(".kladno-nav").offset().top;
   var stickyNav = function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > stickyNavTop) {
            $(".kladno-nav").addClass("kladno-nav--sticky");
        } else {
            $(".kladno-nav").removeClass("kladno-nav--sticky");
        }
    };
    stickyNav();
    $(window).scroll(function () {
        stickyNav();
    });
});
