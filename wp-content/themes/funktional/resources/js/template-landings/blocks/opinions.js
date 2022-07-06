$(document).ready(function(){
    if( $('.landingPageOpinions').length ){
        const landingPageOpinions = new Swiper(".opinionBox__inner", {
            effect: "fade",
            fadeEffect: {
                crossFade: true,
            },
            pagination: {
                el: ".opinionBox__pagNav .swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".opinionBox__pagNav .swiper-button-next",
                prevEl: ".opinionBox__pagNav .swiper-button-prev",
            },
        });
        
        var quotecolor = $('.opinionBox').data('quotecolor');
        var arrowscolor = $('.opinionBox').data('arrowscolor');
        var activecolor = $('.opinionBox').data('activecolor');
        var textcolor = $('.opinionBox').data('textcolor');
        var opinionbgcolor = $('.opinionBox').data('opinionbgcolor');
        var opinionbgtransparency = $('.opinionBox').data('opinionbgtransparency');

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
        var opiniongbg = hexToRgbA(opinionbgcolor, opinionbgtransparency);

        $('.opinionBox__quote svg path').css('fill', quotecolor)
        $('.opinionBox__bg').css('background-color', opiniongbg);
        $('.opinionBox__nav svg path').css('fill', activecolor);
        $('.opinionBox__pag .swiper-pagination-current').css('color', activecolor);
        $('.opinionBox__nav .swiper-button-disabled svg path').css('fill', arrowscolor);
        $('.opinionBox__pag').css('color', arrowscolor);
        $('.opinionBox__opinion').css('color', textcolor);
        $('.opinionBox__authorBox').css('color', textcolor);
        $('.opinionBox__lineUnder').css('background', activecolor)
    }
});