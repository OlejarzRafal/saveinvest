// // Hamburger menu
// const button = document.getElementById("navbar-toggler-icon");
// const menu = document.getElementById("nav-menu");
// const headersubpage = document.querySelector(".header__subpage");
// button.addEventListener("click", function () {
//   if (button.classList.contains("navbar-toggler-icon--opened") == false) {
//     button.classList.add("navbar-toggler-icon--opened");
//     menu.classList.add("nav__menu--opened");
//     headersubpage.classList.add("header__subpage--opened");
//     document.body.style.overflow = "hidden";
//   } else {
//     button.classList.remove("navbar-toggler-icon--opened");
//     menu.classList.remove("nav__menu--opened");
//     headersubpage.classList.remove("header__subpage--opened");
//     document.body.style.overflow = "unset";
//   }
// });

// if ($(window).width() < 767) {
//   $(".nav__menu ul li a").click(function () {
//     console.log('test');
//     button.classList.remove("navbar-toggler-icon--opened");
//     menu.classList.remove("nav__menu--opened");
//     document.body.style.overflow = "unset";
//   });
// }


$(document).ready(function () {
    $(".enkalwa-dziwnowek-nav__container__burger").click(function () {
        $(this).toggleClass("open");
        // $(".kladno-nav-container__box").slideToggle();
        // $(".kladno-nav-container").toggleClass("active");

        // $(".kladno-nav-container__box").slideToggle();
        $(".navbar-collapse").toggleClass("show");
        // $(".seagolf-nav__container__mobile").toggleClass("active");
        // $(".seagolf-nav__container__box").toggleClass("none");
        // $(".seagolf-nav__container").toggleClass("active");
    });
});
