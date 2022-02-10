/* THIS CODE IS NOT INCLUDED IN INDEX.JS AND MAIN.JS*/
$(document).ready(function(){
    if ( $('.news-main').length){
        function news_filtration(){
            var locationVal = $('.news-main__locationsTerm.active').data('location');
            var pageVal = $('#pageCheck').val() * 1;
            var loadmore = $('.news-main .news-main__loadMore');
            var noPosts = $('.news-main__noPosts');
            var newUrl = '?location=' + locationVal + '&page=' + pageVal;
            window.history.replaceState(null, null, newUrl);

            var data = { 
                'action': 'aktualnosciFiltration',
                'location' : locationVal,
                'page' : pageVal,
            };
            $.ajax({ 
                url : funktional_aktualnosciFiltration_params.ajaxurl, // AJAX handler
                data : data,
                type : 'GET',
                beforeSend : function ( xhr ) {
                    //$('.pageLoader').fadeIn();
                    $('.news-main__postList').addClass('news-main__postList--loading');
                   
                },
                success : function( data ){
                    $('#max_page_number').remove();
                    $('#resoultCount').remove();
                    //$('.pageLoader').fadeOut();
                    $('.news-main__postList').removeClass('news-main__postList--loading');

                    //check if post that meet the criteria exist
                    if( data ) { 
                        noPosts.hide();
                        if( pageVal == 1){
                            $('.news-main__post').remove();
                        }
                        $('.news-main__postList').append(data); // append posts
                        //check for loadmore input
                        var maxPage = $('#max_page_number').val() * 1;
                            if( pageVal == maxPage || maxPage == 1 ){            
                                loadmore.hide();
                            }
                            else{
                                loadmore.show();
                            }
                            
                            if( $('.news-main__post').length == false ){
                                noPosts.show();
                                loadmore.hide();
                            }
                            else{
                                noPosts.hide();
                            }

                    } else {
                        $('.news-main__post').remove();
                        loadmore.hide();
                        noPosts.show();
                    }
                }
            });
        }
        function news_check_start_GET_values(){
               
            var locationCheck = $('#locationCheck').val();

            if ( locationCheck != 'all'){
                var newLocationCheckVal = $('#locationCheck').val();
                $('.news-main__locationsTerm').removeClass('active');
                $('.news-main__locationsTerm[data-location="'+newLocationCheckVal+'"]').addClass('active');
            }
            else{
                $('.news-main__locationsTerm:nth-child(1)').addClass('active');
            }

        }

        var termClick = $('.news-main__locationsTerm');
        termClick.click(function(){
            
            console.log('test');
            termClick.removeClass('active');
            $(this).addClass('active');
            $('#pageCheck').val('1');
            news_filtration();
            $('html,body').animate({
                scrollTop: $(".news-main__postList").offset().top - 120},
                'slow');
            
        });

        var loadmore = $('.news-main__loadMore');
        loadmore.click(function(){
            var currentPage = $('#pageCheck').val() * 1;
            $('#pageCheck').val( currentPage + 1 );
            news_filtration();
        });

        /* SCRIPTS THAT SHOULD RUN ON LOAD */
        news_check_start_GET_values();
        news_filtration();
    } 
});