$(document).ready(function(){
    if ($('.pageLandingHero').length){
        var form =  $('.formBox__form');
        var buttonbgcolor = form.data('buttonbgcolor');
        var buttoncolor = form.data('buttoncolor');
        var buttonstyle = form.data('buttonstyle');
        var color = form.data('color');
        var font = form.data('font');

        $('.formDescUnder').css('color', color).addClass('font--'+font);
        $('.preExpand').css('color', color).addClass('font--'+font);
        $('.expand').css('color', color).addClass('font--'+font);
        $('.postExpand').css('color', color).addClass('font--'+font);
        $('.formInfo').css('color', color).addClass('font--'+font);
        $('.pageLandingHero__formBox input[type=submit]').css('background', buttonbgcolor).css('color', buttoncolor).css('outline','4px solid'+buttonbgcolor).addClass('font--'+font + ' buttonStyle--' + buttonstyle);


        if( $('.weAreForU').length ){
            $('.formBox').clone().appendTo($('.weAreForU__row'));
        }

        
        $('.expand').click(function(){
            $(this).siblings('.postExpand').slideToggle();
            
            if( $(this).hasClass('expand--active') ){
                $(this).text('Rozwiń *');
            }
            else{
                $(this).text('Zwiń *');
            }
            $(this).toggleClass('expand--active');
        });
        
    }
});