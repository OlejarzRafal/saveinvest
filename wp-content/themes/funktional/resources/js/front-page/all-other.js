$(document).ready(function () {
  // blog to menu
  // if ($(window).width() < 991) {
  //   var link_blog = $(".nav__menu-blog ul li").html();
  //   $(".nav__menu ul").append("<li>" + link_blog + "</li>");
  // }

  $("form input").on("change keyup", function () {
    $(this).addClass("value-true");
  });

  // PLOTS FRONTPAGE
  $(".home .plots-wrap .col-md-6").hide();
  $(".home .plots-wrap .col-md-6:nth-child(n+1):nth-child(-n+6)").show();

  $(".plots__se-more .btn").click(function (e) {
    e.preventDefault();
    $(this)
      .closest(".home .plots-wrap ")
      .find(".col-md-6:not(:visible):lt(6)")
      .show();
    if ($(".home .plots-wrap .col-md-6:hidden").length === 0) {
      $(".plots__se-more .btn").hide();
    }
  });

  
  
});
// $(window).on("load", function () {
//   $(".fullpage-loader").delay(1500).fadeOut("slow");
// });
