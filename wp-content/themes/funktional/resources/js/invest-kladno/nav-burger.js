$(document).ready(function () {
    $(".kladno-nav-container__burger").click(function () {
        $(this).toggleClass("open");
        // $(".kladno-nav-container__box").slideToggle();
        // $(".kladno-nav-container").toggleClass("active");

        // $(".kladno-nav-container__box").slideToggle();
        $(".kladno-nav").toggleClass("active");
    });
});
