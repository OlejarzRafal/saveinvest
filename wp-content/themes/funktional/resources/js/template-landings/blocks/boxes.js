$(document).ready(function(){
    if ($('.pageLandingBoxes').length){
        
        function hexToRgbA(hex, transparecy){
            var c;
            if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
                c= hex.substring(1).split('');
                if(c.length== 3){
                    c= [c[0], c[0], c[1], c[1], c[2], c[2]];
                }
                c= '0x'+c.join('');
                return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+','+transparecy+')';
            }
            throw new Error('Bad Hex');
        }

        $('.landingBox').each(function(){
            var borderColor = $(this).data('bordercolor');
            var iconColor = $(this).data('iconcolor');
            var plusColor = $(this).data( 'pluscolor');

            var borderColorRGBA = hexToRgbA(borderColor, 0.3);
            $(this).find('.landingBox__outner').css('outline','1px solid' + borderColor);
            $(this).find('.landingBox__inner').css('border','1px solid ' + borderColorRGBA);
            $(this).find('.landingBox__icon svg path').css('fill', iconColor);
            $(this).find('.landingBox__plus svg path, .landingBox__plus svg rect').css('fill', plusColor);

            if ( $(this).find('.landingBox__icon').hasClass('landingBox__icon--0') ){
                $(this).addClass('landingBox--iconPosition-0');
            }
            else{
                $(this).addClass('landingBox--iconPosition-1');
            }
        });
        $('.landingBox').hover(function(){
            $(this).toggleClass('landingBox--active');
        });
    }
});