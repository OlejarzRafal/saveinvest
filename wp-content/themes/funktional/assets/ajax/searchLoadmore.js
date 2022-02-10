/* THIS CODE IS NOT INCLUDED IN INDEX.JS AND MAIN.JS*/
$(document).ready(function(){
    if ( $('.searchResults').length){
        function news_filtration(){
            var pageVal = $('#pageCheck').val() * 1;
            var s = $('#checkSearchVal').val();
            var noPosts = $('.searchResults__noPosts');
            var newUrl = '?s=' + s + '&page=' + pageVal;
            window.history.replaceState(null, null, newUrl);

            var data = { 
                'action': 'searchLoadmore',
                's' : s,
                'page' : pageVal,
            };
            $.ajax({ 
                url : funktional_searchLoadmore_params.ajaxurl, // AJAX handler
                data : data,
                type : 'GET',
                beforeSend : function ( xhr ) {
                    //$('.pageLoader').fadeIn();
                    $('.searchResults__postList').addClass('searchResults__postList--loading');
                   
                },
                success : function( data ){
                    $('#max_page_number').remove();
                    //$('.pageLoader').fadeOut();
                    $('.searchResults__postList').removeClass('searchResults__postList--loading');

                    //check if post that meet the criteria exist
                    if( data ) { 
                        noPosts.hide();
                        $('.searchResults__postList').append(data); // append posts
                        //check for loadmore input
                        var maxPage = $('#max_page_number').val() * 1;
                            if( pageVal == maxPage || maxPage == 1 ){            
                                loadmore.hide();
                            }
                            else{
                                loadmore.show();
                            }
                            
                            if( $('.searchResults__post').length == false ){
                                noPosts.show();
                                loadmore.hide();
                            }
                            else{
                                noPosts.hide();
                            }

                    } else {
                        $('.searchResults__post').remove();
                        loadmore.hide();
                        noPosts.show();
                    }
                }
            });
        }
        var loadmore = $('.searchResults__loadMore');
        loadmore.click(function(){
            var currentPage = $('#pageCheck').val() * 1;
            $('#pageCheck').val( currentPage + 1 );
            news_filtration();
        });

        /* SCRIPTS THAT SHOULD RUN ON LOAD */
        news_filtration();
    } 
});