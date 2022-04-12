if ($(window).width() > 767) {
    $(".video").hover(
        function () {
            $(this).find($('.video__box__hover')).get(0).play();
        },
        function () {
            $(this).find($('.video__box__hover')).get(0).pause();
        }
    );

} else {
    $('.video__box__hover').each(function () {
        $(this).get(0).play();
    });
}