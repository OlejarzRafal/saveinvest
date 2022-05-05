// // Hamburger menu
const button = document.getElementById("hamburger");
const menu = document.getElementById("nav-menu");
const headersubpage = document.querySelector(".header__subpage");
button.addEventListener("click", function () {
  if (button.classList.contains("hamburger--opened") == false) {
    button.classList.add("hamburger--opened");
    menu.classList.add("nav__menu--opened");
    headersubpage.classList.add("header__subpage--opened");
    document.body.style.overflow = "hidden";
  } else {
    button.classList.remove("hamburger--opened");
    menu.classList.remove("nav__menu--opened");
    headersubpage.classList.remove("header__subpage--opened");
    document.body.style.overflow = "unset";
  }
});

if ($(window).width() < 767) {
  $(".nav__menu ul li a").click(function () {
    console.log('test');
    button.classList.remove("hamburger--opened");
    menu.classList.remove("nav__menu--opened");
    document.body.style.overflow = "unset";
  });
}
