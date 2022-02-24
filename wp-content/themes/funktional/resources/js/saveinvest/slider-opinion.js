$(document).ready(function () {
  const opinion = new Swiper(".sec8-opinion.swiper", {
    speed: 1500,
    autoplay: {
      delay: 10000,
    },
    loop: true,
    navigation: {
      nextEl: ".sec8-opinion .swiper-button-next",
      prevEl: ".sec8-opinion .swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
  });
  /* MATCH HEIGHT */
  // $(" .awards__content").matchHeight();
});
