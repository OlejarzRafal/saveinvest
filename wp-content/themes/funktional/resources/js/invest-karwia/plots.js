$(document).ready(function () {

    $(".area-hover").hover(
        function () {
            $('.area-click path').css({"opacity": "0.9"})
            $(".area-click path").hover(
                function () {
                    $(".area-click path").css('opacity', '0.9');
                    $(this).css('opacity', '0.7');
                },
                function () {
                    $(".area-click path").css('opacity', '0');
                }
            );
        },
        function () {
            $('.area-click path').css('opacity', '0');

        }
    );
});