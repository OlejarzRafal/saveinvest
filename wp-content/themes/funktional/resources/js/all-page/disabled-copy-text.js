$(document).ready(function () {
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
    // document.addEventListener('contextmenu', event => event.preventDefault());
});
