if ($(window).width() > 767) {
    var movieHover = $(".video").hover(hoverVideo, hideVideo);

    function hoverVideo(e) {
        $(".video", this).get(0).play();
    }

    function hideVideo(e) {
        $(".video", this).get(0).pause();
    }
} else {
    $(".video", this).get(0).play();
}
