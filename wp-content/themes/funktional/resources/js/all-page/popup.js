$(window).on("load", function () {
    // WIDGET TIME TO SHOW
    var widgetShowTime = $(".popup-wrap").attr("data-time");
    var widgetShowTimeSeconds = widgetShowTime * 1000;
    setTimeout(function () {
        $('.popup').addClass('popup--open');
        setTimeout(function () {
            if($('.popup').hasClass('popup--open')){
                $('body').addClass("popup-open");
            }
            $('.popup').css('opacity', '1');
        }, 300);
    }, widgetShowTimeSeconds);
    $('.popup-widget').addClass("popup-widget--close");
});
  
$(document).ready(function () {
    // show hide policy in popup
    $(".popup-wrap .form-showhide__btn").click(function (e) {
        e.preventDefault();
        $(this).parent().parent().find(".form-showhide__information").slideToggle();
    });


    // label animation
    $(".wpcf7-form .form-group input").focus(function() {
        $(this).parent().siblings('label').addClass('label-up');
        $(this).addClass('label-up');
    })
    .blur(function() {
    var text_val = $(this).val();
    if(text_val === "") {
        $(this).parent().siblings('label').removeClass('label-up');
        $(this).removeClass('label-up');
    }
    });


    // widget
    $('.popup-widget').click(function () {
        $(this).addClass("popup-widget--close");
        $('body').addClass("popup-open");
        var popup = $(this).parent().find('.popup');
        popup.addClass('popup--open');

        // delay for the fonts to be loaded on first time
        setTimeout(function () {
            popup.css('opacity', '1');
        }, 100);
    });

    // popup close 
    $('.popup__close').click(function () {
        $('body').removeClass("popup-open");
        $(this).parent().removeClass('popup--open');
        $(this).parent().parent().find('.popup-widget').removeClass('popup-widget--close');
    });

})