$(document).ready(function () {
    $(".seagolf-nav__container__burger").click(function () {
        $(this).toggleClass("open");
        // $(".kladno-nav-container__box").slideToggle();
        // $(".kladno-nav-container").toggleClass("active");

        // $(".kladno-nav-container__box").slideToggle();
        $(".seagolf-nav").toggleClass("active");
        $(".seagolf-nav__container__mobile").toggleClass("active");
        $(".seagolf-nav__container__box").toggleClass("none");
        $(".seagolf-nav__container").toggleClass("active");
    });
});
