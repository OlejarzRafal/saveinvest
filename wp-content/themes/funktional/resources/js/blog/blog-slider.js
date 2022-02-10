$(document).ready(function () {
  const sliderExpert = new Swiper(".slider-expert-loop.swiper", {
    slidesPerView: "auto",
    spaceBetween: 30,
    allowTouchMove: true,
    slidesPerGroup: 2,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  const sliderAktualnosci = new Swiper(".slider-aktualnosci-loop.swiper", {
    slidesPerView: "auto",
    spaceBetween: 30,
    allowTouchMove: true,
    slidesPerGroup: 2,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  const sliderPytania = new Swiper(".slider-pytania-loop.swiper", {
    slidesPerView: "auto",
    spaceBetween: 30,
    allowTouchMove: true,
    slidesPerGroup: 2,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  const sliderAutorzy = new Swiper(".slider-authors-loop.swiper", {
    slidesPerView: "auto",
    spaceBetween: 30,
    allowTouchMove: true,
    slidesPerGroup: 2,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
});
