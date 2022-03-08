$(document).ready(function () {
  /** ===========================================
      Hide / show the master navigation menu
  ============================================ */

  var previousScroll = 0;

  $(window).scroll(function () {
    var currentScroll = $(this).scrollTop();
    if (
      currentScroll > 0 &&
      currentScroll < $(document).height() - $(window).height()
    ) {
      if (currentScroll > previousScroll) {
        window.setTimeout(hideNav, 50);
      } else {
        window.setTimeout(showNav, 50);
      }
      previousScroll = currentScroll;
    } else {
      window.setTimeout(hideNav2, 50);
    }
  });
  function hideNav2() {
    $("nav").removeClass("is-visible");
  }
  function hideNav() {
    $("nav").removeClass("is-visible").addClass("is-hidden");
  }
  function showNav() {
    $("nav").removeClass("is-hidden").addClass("is-visible");
  }

 
});

$(window).on("load", function () {
  var navoffsetTop = $("nav").offset().top;
  console.log(navoffsetTop);
  if (navoffsetTop > 0) {
    $("nav").addClass("is-hidden");
  }
});
