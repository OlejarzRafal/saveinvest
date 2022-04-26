if ($(window).width() > 767) {
    $(".sec8-links__box__video-link").hover(
        function () {
            $(this).find($('.sec8-links__box__video-link__item__hover')).get(0).play();
        },
        function () {
            $(this).find($('.sec8-links__box__video-link__item__hover')).get(0).pause();
        }
    );

} else {
    $('.sec8-links__box__video-link__item__hover').each(function () {
        $(this).get(0).play();
    });
}