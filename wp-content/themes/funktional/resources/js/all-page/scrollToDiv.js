if ($(window).width() > 767) {
  $("a[href*=\\#]:not([href=\\#])").click(function () {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      if (target.length) {
        $("html,body").animate(
          {
            scrollTop: target.offset().top - 150,
          },
          3000
        );
        return false;
      }
    }
  });
}else{
  $("a[href*=\\#]:not([href=\\#])").click(function () {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      if (target.length) {
        $("html,body").animate(
          {
            scrollTop: target.offset().top - 50,
          },
          3000
        );
        return false;
      }
    }
  });
}
$(document).ready(function () {
  var backtotop = $("#backtotop");
  var backtotopHeight = $("#backtotop").innerHeight() + 400;
  $(window).scroll(function () {
    if ($(window).scrollTop() > backtotopHeight) {
      backtotop.addClass("backtotop--show");
    } else {
      backtotop.removeClass("backtotop--show");
    }
  });
});
