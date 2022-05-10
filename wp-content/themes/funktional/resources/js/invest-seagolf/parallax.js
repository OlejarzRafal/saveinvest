$(window).scroll(function () {
    $(".footer-top").each(function () {
        // only put top value if the window scroll has gone beyond the top of the image
        if ($(this).offset().top  < $(window).scrollTop() + 950) {
            // Get ammount of pixels the image is above the top of the window
            var difference = $(window).scrollTop() - $(this).offset().top;
            // Top value of image is set to half the amount scrolled
            // (this gives the illusion of the image scrolling slower than the rest of the page)
            var half = difference / 2 + "px",
                transform = "translate3d( 0, " + half + ",0)";

            $(this).find("img").css("transform", transform);
        } else {
            // if image is below the top of the window set top to 0
            $(this).find("img").css("transform", "translate3d(0,0,0)");
        }
    });
    $(".sg-gallery-seagolf").each(function () {
        // only put top value if the window scroll has gone beyond the top of the image
        if ($(this).offset().top  < $(window).scrollTop()) {
            // Get ammount of pixels the image is above the top of the window
            var difference = $(window).scrollTop() - $(this).offset().top;
            // Top value of image is set to half the amount scrolled
            // (this gives the illusion of the image scrolling slower than the rest of the page)
            var half = difference / -2.5 + "px",
                transform = "translate3d( 0, " + half + ",0)";

            $(this).find(".sg-gallery-seagolf__title").css("transform", transform);
        } else {
            // if image is below the top of the window set top to 0
            $(this).find(".sg-gallery-seagolf__title").css("transform", "translate3d(0,0,0)");
        }
    });
    $(".header").each(function () {
        // only put top value if the window scroll has gone beyond the top of the image
        if ($(this).offset().top  < $(window).scrollTop()) {
            // Get ammount of pixels the image is above the top of the window
            var difference = $(window).scrollTop() - $(this).offset().top;
            // Top value of image is set to half the amount scrolled
            // (this gives the illusion of the image scrolling slower than the rest of the page)
            var half = difference / -4 + "px",
                transform = "translate3d( 0, " + half + ",0)";

            $(this).find(".header__text").css("transform", transform);
        } else {
            // if image is below the top of the window set top to 0
            $(this).find(".header__text").css("transform", "translate3d(0,0,0)");
        }
    });
});
