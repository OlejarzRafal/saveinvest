/* THIS CODE IS NOT INCLUDED IN INDEX.JS AND MAIN.JS*/

$(document).ready(function(){
    if ( $('.referencesFiltration').length){

        function hoverBox(){
            $('.referencesPost__title').hover(function(){
                $(this).parent().toggleClass('referencesPost--hover');
            });
            $('.referencesPost__readMore').hover(function(){
                $(this).parent().parent().toggleClass('referencesPost--hover');
            });
            $('.referencesPost__bottom__btn').hover(function(){
                $(this).parent().parent().toggleClass('referencesPost--hover');
            });
        }

        function countReferencesPosts(){
            var sum = 0;
            $('.referencesFiltration__count').each(function(){
                var count = $(this).find('var').text();
                sum += parseInt(count);
                $('.referencesFiltration__all var').text(sum);
            });
            return sum;
        }
        countReferencesPosts();

        
        function productSets_filtration(){
            var postType = $('.referencesFiltration__checkPostType--active').data('type');
            var sortBy = $('.sortBox__sortByItemActive var').attr('data-sortby');
            var pageVal = $('.referencesFiltration__loadmore').attr('data-page') * 1;
            var exclude = $('#newestPost').val();
            var newUrl = '?type=' + postType + '&sortby=' + sortBy + '&exclude=' + exclude;
            var cta = $('.referencesFiltration__cta');
            window.history.replaceState(null, null, newUrl);


            
            setTimeout(function(){            
                var data = { 
                    'action': 'references_filtration',
                    'type': postType,
                    'sortby': sortBy,
                    'page': pageVal,
                    'exclude' : exclude,
                };
                $.ajax({ 
                    url : funktional_materials_filtraiton_params.ajaxurl, // AJAX handler
                    data : data,
                    type : 'GET',
                    beforeSend : function ( xhr ) {
                        $('.referencesFiltration').addClass('referencesFiltration--loading');
                    },
                    success : function( data ){
                        $('.referencesFiltration').removeClass('referencesFiltration--loading');
                        $('#max_page_number').remove();
                        //check if post that meet the criteria exist
                        if( data ) { 

                            if ( pageVal == 1){
                                $('.referencesFiltration__posts .referencesFiltration__post').remove();
                                $('.referencesFiltration__posts').append(data); // append posts
                            }
                            else{
                                $('.referencesFiltration__posts').append(data); // append posts
                            }

                            var maxPage = $('#max_page_number').val();
                            if( pageVal == maxPage || maxPage == 1 ){            
                                $('.referencesFiltration__loadmoreRow').hide();
                            }
                            else{
                                $('.referencesFiltration__loadmoreRow').show();
                            }
                            if (cta.length){
                                $('.referencesFiltration__post:eq(0)').after(cta);
                            }
                            
                            hoverBox();
                        } else {
                            $('.referencesFiltration__posts').text('Nie znaleziono wpisow');
                            $('.referencesFiltration__posts .referencesFiltration__post').remove();
                            $('.referencesFiltration__loadmoreRow').hide();
                        }
                        
                    }
                });
            }, 2);
            if (cta.length){
                var textColor = cta.data('textcolor');
                var bgColor = cta.data('bgcolor');
                cta.css('background', bgColor);
                cta.find('p').css('color', textColor);
            }
        }
        function filterClick(){
            $('.referencesFiltration__checkPostType').click(function(){
                $('.referencesFiltration__checkPostType').removeClass('referencesFiltration__checkPostType--active');
                $(this).addClass('referencesFiltration__checkPostType--active');
                $('.referencesFiltration__loadmore').attr('data-page', '1');
                productSets_filtration();
            });
        }

        function sortBySelect(){
            var sortBox = $('.sortBox');
            var sortBoxActive = sortBox.find('var');
            var sortBoxListItem = sortBox.find('.sortBox__listItem');
            var selectClick = $('.sortBox__sortByItemActive');
           
            if( !$('.sortBox__listItem--active').length ){
                $('.sortBox__listItem[data-tosort="DESC"]').addClass('sortBox__listItem--active');
            }

            sortBoxActive.text( $('.sortBox__listItem--active').text() );
            sortBoxActive.attr('data-sortby', $('.sortBox__listItem--active').data('tosort') );

            selectClick.click(function(){
                sortBox.toggleClass('sortBox--active');
            });

            sortBoxListItem.click(function(){
                sortBoxListItem.removeClass('sortBox__listItem--active');
                $(this).addClass('sortBox__listItem--active');

                sortBoxActive.text($(this).text());
                sortBoxActive.attr('data-sortby', $(this).data('tosort'));

                sortBox.removeClass('sortBox--active');
                $('.referencesFiltration__posts .referencesFiltration__post').remove();
                productSets_filtration();
            });

        }
        function loadmoreClick(){
            $('.referencesFiltration__loadmore').click(function(){
                var currentPage = $(this).attr('data-page') * 1;
                var newPage = currentPage + 1;
                $(this).attr('data-page', newPage);
                productSets_filtration();
            });

        }

        /* SCRIPTS THAT SHOULD RUN ON LOAD */
        sortBySelect();
        filterClick();
        loadmoreClick();
        productSets_filtration();
    } 



    if($(window).width() < 767)
    {
        $( "#sort-static" ).appendTo( "#sortbox-mobile" );
    }
});