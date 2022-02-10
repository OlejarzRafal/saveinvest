/* THIS CODE IS NOT INCLUDED IN INDEX.JS AND MAIN.JS*/
$(document).ready(function(){
    if ( $('.customerQuestions').length){
        function customerQuestions_filtration(){
            var questionVal = $('.customerQuestions__questionsTerm.active').data('question');
            var pageVal = $('#pageCheck').val() * 1;
            var loadmore = $('.customerQuestions .customerQuestions__loadMore');
            var noPosts = $('.customerQuestions__noPosts');
            var newUrl = '?question=' + questionVal + '&page=' + pageVal;
            window.history.replaceState(null, null, newUrl);

            var data = { 
                'action': 'questionFiltration',
                'question' : questionVal,
                'page' : pageVal,
            };
            $.ajax({ 
                url : funktional_questionFiltration_params.ajaxurl, // AJAX handler
                data : data,
                type : 'GET',
                beforeSend : function ( xhr ) {
                    //$('.pageLoader').fadeIn();
                    $('.customerQuestions__postList').addClass('customerQuestions__postList--loading');
                   
                },
                success : function( data ){
                    $('#max_page_number').remove();
                    $('#resoultCount').remove();
                    //$('.pageLoader').fadeOut();
                    $('.customerQuestions__postList').removeClass('customerQuestions__postList--loading');

                    //check if post that meet the criteria exist
                    if( data ) { 
                        noPosts.hide();
                        if( pageVal == 1){
                            $('.customerQuestions__post').remove();
                        }
                        $('.customerQuestions__postList').append(data); // append posts
                        //check for loadmore input
                        var maxPage = $('#max_page_number').val() * 1;
                            if( pageVal == maxPage || maxPage == 1 ){            
                                loadmore.hide();
                            }
                            else{
                                loadmore.show();
                            }
                            
                            if( $('.customerQuestions__post').length == false ){
                                noPosts.show();
                                loadmore.hide();
                            }
                            else{
                                noPosts.hide();
                            }

                    } else {
                        $('.customerQuestions__post').remove();
                        loadmore.hide();
                        noPosts.show();
                    }
                }
            });
        }
        function customerQuestions_check_start_GET_values(){
               
            var questionCheck = $('#questionCheck').val();

            if ( questionCheck != 'all'){
                var newquestionCheckVal = $('#questionCheck').val();
                $('.customerQuestions__questionsTerm').removeClass('active');
                $('.customerQuestions__questionsTerm[data-question="'+newquestionCheckVal+'"]').addClass('active');
            }
            else{
                $('.customerQuestions__questionsTerm:nth-child(1)').addClass('active');
            }

        }

        var termClick = $('.customerQuestions__questionsTerm');
        termClick.click(function(){
            termClick.removeClass('active');
            $(this).addClass('active');
            $('#pageCheck').val('1');
            customerQuestions_filtration();
            $('html,body').animate({
                scrollTop: $(".customerQuestions__postList").offset().top - 120},
                'slow');
        });

        var loadmore = $('.customerQuestions__loadMore');
        loadmore.click(function(){
            var currentPage = $('#pageCheck').val() * 1;
            $('#pageCheck').val( currentPage + 1 );
            customerQuestions_filtration();
        });

        /* SCRIPTS THAT SHOULD RUN ON LOAD */
        customerQuestions_check_start_GET_values();
        customerQuestions_filtration();
    } 
});