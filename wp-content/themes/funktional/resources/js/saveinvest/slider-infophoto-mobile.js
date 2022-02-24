$(document).ready(function () {
    const specialist = new Swiper(".swiper.sec6-guarantee-mobile", {
      slidesPerView: 'auto',
      spaceBetween: 30,
      speed: 100,
      autoplay: {
        delay: 3000,
      },
      // If we need pagination
      pagination: {
        el: ".sec6-guarantee-mobile .swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        // when window width is >= 320px

      }
    });
    /* MATCH HEIGHT */
    // $(" .awards__content").matchHeight();
  });