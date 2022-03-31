$(document).ready(function () {
    $(".karwia-nav__container__burger").click(function () {
        $(this).toggleClass("open");
        // $(".kladno-nav-container__box").slideToggle();
        // $(".kladno-nav-container").toggleClass("active");

        // $(".kladno-nav-container__box").slideToggle();
        $(".karwia-nav").toggleClass("active");
        $(".karwia-nav__container__mobile").toggleClass("active");
        $(".karwia-nav__container__box").toggleClass("none");
    });
});
