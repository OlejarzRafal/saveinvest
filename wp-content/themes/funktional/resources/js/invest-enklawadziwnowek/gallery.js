$(document).ready(function () {
    $('#filter').on('click', 'a', function () {
        let filterValue = $(this).attr('data-filter');

        $('#grid').find('[data-category]').removeClass('hide');
        if (filterValue === 'allItem') {
            $(".pictures").removeClass("active");
            $(".visual").removeClass("active");
            $(".movies").removeClass("active");
            $(".all").addClass("active");
        }
        if (filterValue === 'visualizations') {
            $('#grid').find('[data-category="pictures"]').addClass('hide');
            $('#grid').find('[data-category="movies"]').addClass('hide');
            $(".pictures").removeClass("active");
            $(".visual").addClass("active");
            $(".movies").removeClass("active");
            $(".all").removeClass("active");
        }
        if (filterValue === 'pictures') {
            $('#grid').find('[data-category="visualizations"]').addClass('hide');
            $('#grid').find('[data-category="movies"]').addClass('hide');
            $(".pictures").addClass("active");
            $(".visual").removeClass("active");
            $(".movies").removeClass("active");
            $(".all").removeClass("active");
        }
        if (filterValue === 'movies') {
            $('#grid').find('[data-category="visualizations"]').addClass('hide');
            $('#grid').find('[data-category="pictures"]').addClass('hide');
            $(".pictures").removeClass("active");
            $(".visual").removeClass("active");
            $(".movies").addClass("active");
            $(".all").removeClass("active");
        }
    });
});

