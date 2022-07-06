$(document).ready(function(){
    if($('.pageLandingCharts').length){
        var markerColor = $('.pageLandingCharts__inner ul').data('markercolor');
        $('.pageLandingCharts__inner ul li svg').each(function(){
            $(this).find('path').css('stroke',markerColor);
        });
    }
});