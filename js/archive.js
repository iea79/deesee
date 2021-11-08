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

});
