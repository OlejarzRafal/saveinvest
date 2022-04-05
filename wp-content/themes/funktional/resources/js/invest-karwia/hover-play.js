var cip = $(".video-hover").hover( hoverVideo, hideVideo );

function hoverVideo(e) {  
    $('video-hover', this).get(0).play(); 
}

function hideVideo(e) {
    $('video-hover', this).get(0).pause(); 
}