/* THIS CODE IS NOT INCLUDED IN INDEX.JS AND MAIN.JS*/
$(document).ready(function(){
    if ( $('.ekspertRadzi').length){
        function experts_filtration(){
            var subjectVal = $('.ekspertRadzi__subjectsTerm.active').data('subject');
            var expertVal = $('.ekspertRadzi__expertsTerm.active').data('expert');
            var pageVal = $('#pageCheck').val() * 1;
            var loadmore = $('.ekspertRadzi .ekspertRadzi__loadMore');
            var noPosts = $('.ekspertRadzi__noPosts');
            var newUrl = '?subject=' + subjectVal + '&expert=' + expertVal + '&page=' + pageVal;
            window.history.replaceState(null, null, newUrl);

            var data = { 
                'action': 'ekspertRadzi_Filtration',
                'subject' : subjectVal,
                'expert' : expertVal,
                'page' : pageVal,
            };
            $.ajax({ 
                url : funktional_ekspertRadzi_Filtration_params.ajaxurl, // AJAX handler
                data : data,
                type : 'GET',
                beforeSend : function ( xhr ) {
                    //$('.pageLoader').fadeIn();
                    $('.ekspertRadzi__postList').addClass('ekspertRadzi__postList--loading');
                   
                },
                success : function( data ){
                    $('#max_page_number').remove();
                    $('#resoultCount').remove();
                    //$('.pageLoader').fadeOut();
                    $('.ekspertRadzi__postList').removeClass('ekspertRadzi__postList--loading');

                    //check if post that meet the criteria exist
                    if( data ) { 
                        noPosts.hide();
                        if( pageVal == 1){
                            $('.ekspertRadzi__post').remove();
                        }
                        $('.ekspertRadzi__postList').append(data); // append posts
                        //check for loadmore input
                        var maxPage = $('#max_page_number').val() * 1;
                            if( pageVal == maxPage || maxPage == 1 ){            
                                loadmore.hide();
                            }
                            else{
                                loadmore.show();
                            }
                            
                            if( $('.ekspertRadzi__post').length == false ){
                                noPosts.show();
                                loadmore.hide();
                            }
                            else{
                                noPosts.hide();
                            }

                    } else {
                        $('.ekspertRadzi__post').remove();
                        loadmore.hide();
                        noPosts.show();
                    }
                }
            });
        }
        function experts_check_start_GET_values(){
               
            var subjectCheck = $('#subjectCheck').val();

            if ( subjectCheck != 'all'){
                var newsubjectCheckVal = $('#subjectCheck').val();
                $('.ekspertRadzi__subjectsTerm').removeClass('active');
                $('.ekspertRadzi__subjectsTerm[data-subject="'+newsubjectCheckVal+'"]').addClass('active');
            }
            else{
                $('.ekspertRadzi__subjectsTerm:nth-child(1)').addClass('active');
            }

            var expertCheck = $('#expertCheck').val();

            if ( expertCheck != 'all'){
                var newexpertCheckVal = $('#expertCheck').val();
                $('.ekspertRadzi__expertsTerm').removeClass('active');
                $('.ekspertRadzi__expertsTerm[data-expert="'+newexpertCheckVal+'"]').addClass('active');
            }
            else{
                $('.ekspertRadzi__expertsTerm:nth-child(1)').addClass('active');
            }

        }

        var termSubjectClick = $('.ekspertRadzi__subjectsTerm');
        termSubjectClick.click(function(){
            termSubjectClick.removeClass('active');
            $(this).addClass('active');
            $('#pageCheck').val('1');
            experts_filtration();
        });

        var termExpertClick = $('.ekspertRadzi__expertsTerm');
        termExpertClick.click(function(){
            termExpertClick.removeClass('active');
            $(this).addClass('active');
            $('#pageCheck').val('1');
            experts_filtration();
            $('html,body').animate({
                scrollTop: $(".ekspertRadzi__postList").offset().top - 120},
                'slow');
        });

        var loadmore = $('.ekspertRadzi__loadMore');
        loadmore.click(function(){
            var currentPage = $('#pageCheck').val() * 1;
            $('#pageCheck').val( currentPage + 1 );
            experts_filtration();
        });

        /* SCRIPTS THAT SHOULD RUN ON LOAD */
        experts_check_start_GET_values();
        experts_filtration();
    } 
});