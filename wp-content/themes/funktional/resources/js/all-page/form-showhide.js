$(".form-showhide__btn").click(function (e) {
    e.preventDefault();
    $(this).parent().parent().find(".form-showhide__information").slideToggle();
});


