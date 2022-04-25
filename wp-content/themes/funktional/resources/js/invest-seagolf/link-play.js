if ($(window).width() > 767) {
    $(".sec8-links__video-link").hover(
        function () {
            $(this).find($('.sec8-links__video-link__box__hover')).get(0).play();
        },
        function () {
            $(this).find($('.sec8-links__video-link__box__hover')).get(0).pause();
        }
    );

} else {
    $('.sec8-links__video-link__box__hover').each(function () {
        $(this).get(0).play();
    });
}