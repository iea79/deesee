$(document).ready(function() {
    if ($('.archiveReviewSlider__item').length === 1) {
        $('.archiveReviewSlider__footer').hide();
    }

    $('.archiveReviewSlider').slick({
        dots: false,
        nextArrow: $('.archiveReviewSlider__next'),
        prevArrow: $('.archiveReviewSlider__prev'),
    }).on('beforeChange', function(event, slick, currentSlide, nextSlide){
        let slideCount = nextSlide + 1 + '';
        if (slideCount.length === 1) {
            slideCount = '0' + slideCount;
        }
        $('.archiveReviewSlider__count').html(slideCount);
    });

    sortingProject();

});

function sortingProject() {
    const tab = $('.archiveList__cat');
    replaceItem('webdev');

    tab.on('click', function() {
        const cat = $(this).data('cat');
        tab.removeClass('active');
        $(this).addClass('active');
        replaceItem(cat);
    });

    function replaceItem(cat) {
        $('.projectsList__item').each(function(index, el) {
            if ($(el).hasClass(cat)) {
                $(el).addClass('active');
                $(el).prependTo('.projectsList');
            } else {
                $(el).removeClass('active');
            }
        });
    }
}
