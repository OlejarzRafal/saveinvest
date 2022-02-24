$(document).ready(function () {
    if ( $('.aktualnosci_cpt-template').length || $('.pytania_cpt-template').length) {
        if ($(window).width() > 991) {
            function sticky_relocate() {
                var window_top = $(window).scrollTop();
                var footer_top = $(".sticky-anchor-stop").offset().top;
                var div_top = $(".sticky-anchor").offset().top;
                var div_height = $(".news-filter").height();
                var stickitLeft = $(".news-filter").offset.left;
                var stickitWidth = $(".news-filter").width() + "px";
                var stickitHeight = $(".news-filter").height() + "px";
                var padding_bottom = 0; // tweak here or get from margins etc
                if (window_top + div_height > footer_top - padding_bottom) {
                    $(".news-filter").css({
                        top: (window_top + div_height - footer_top + padding_bottom) * -1,
                        position: "fixed",
                        left: stickitLeft,
                        width: stickitWidth,
                        height: stickitHeight,
                    });
                } else if (window_top > div_top) {
                    $(".news-filter").css({
                        position: "fixed",
                        left: stickitLeft,
                        width: stickitWidth,
                        height: stickitHeight,
                    });
                    $(".news-filter").css({
                        top: 0
                    });
                } else {
                    $(".news-filter").removeAttr("style");
                }
            }
            $(window).scroll(sticky_relocate);
            sticky_relocate();
        }
    }
});