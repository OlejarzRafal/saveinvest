$(document).ready(function () {
        $(".dziwnowek-nav__container__burger").click(function () {
            window.setTimeout(function() {
                $('.klasa li a').toggleClass('visibility');
              }, 200);
        $(this).toggleClass("open");
        $(".dziwnowek-nav ").toggleClass("active");
        $(".dziwnowek-nav__container__mobile").toggleClass("active");
        $(".logo-dziwnowek").toggleClass("active");
        $(".mobile-logo-href").toggleClass("mobile-main-href-none");
        $(".dziwnowek-nav__container__box").toggleClass("none");
    });
});
