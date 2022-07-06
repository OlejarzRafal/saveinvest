$(document).ready(function () {
    var bikes = $('.bikes');
    var pool = $('.pool');
    var playground = $('.playground');

    $(".plot-sectors__svg #pool").hover(function () {
        pool.addClass("elements__item--open"); 
    }, function () {
        pool.removeClass("elements__item--open");
    });

    $(".plot-sectors__svg #bikes").hover(function () {
        bikes.addClass("elements__item--open"); 
    }, function () {
        bikes.removeClass("elements__item--open");
    });

    $(".plot-sectors__svg #playground").hover(function () {
        playground.addClass("elements__item--open"); 
    }, function () {
        playground.removeClass("elements__item--open");
    });
});
