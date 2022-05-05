$(document).ready(function () {

    if ($(window).width() > 767) {
        $('.area-click__sector .plot-status--sprzedana path').css({
            "opacity": "0.6"
        });
        $('.area-click__sector .plot-status--zarezerwowana path').css({
            "opacity": "0.6"
        });
        $('.area-click__sectors path').css({
            "opacity": "0"
        });
        $('.area-click__sector path').css({
            "opacity": "0"
        });
        $(".area-hover").hover(
            function () {
                $('.area-click__sectors path').css({
                    "opacity": "1"
                });
                $(".area-click__sectors path").hover(
                    function () {
                        $(this).css('opacity', '1');
                    },
                    function () {
                        $(this).css('opacity', '0');
                    }
                );

                $('.area-click__sector path').css({
                    "opacity": "0.9"
                })
                $(".area-click__sector path").hover(
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
                $('.area-click__sectors path').css({
                    "opacity": "0"
                });

                $('.area-click__sector path').css({
                    "opacity": "0"
                });
                $('.area-click__sector .plot-status--sprzedana path').css({
                    "opacity": "0.6"
                });
                $('.area-click__sector .plot-status--zarezerwowana path').css({
                    "opacity": "0.6"
                });

            }
        );
    }



    // var elemhalf = ($('.plot-sectors__all .plot-sectors__all__mobile').width() / 4);
    // console.log(elemhalf);
    // $('.plot-sectors__all [data-plots-sectors]').scrollLeft(220);
});