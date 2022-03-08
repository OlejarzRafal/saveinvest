$(document).ready(function () {
  const specialist = new Swiper(".swiper.spec-slider", {
    slidesPerView: 'auto',
    spaceBetween: 15,
    speed: 100,
    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      // when window width is >= 320px
      768: {
        slidesPerView: 4,
        slidesPerGroup: 4,
        spaceBetween: 20,
        speed:1200
      },
      // when window width is >= 480px
      992: {
        slidesPerView: 6,
        slidesPerGroup: 6,
        spaceBetween: 30,
        speed:1500
      }
    }
  });
  /* MATCH HEIGHT */
  // $(" .awards__content").matchHeight();
});
