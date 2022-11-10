(function () {
    const homeSlider = $('.webdisHome__images');
    const homeLinks = $('.webdisHome__links span');

    homeSlider.slick({
        fade: true,
        dots: true,
        infinite: false,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    homeLinks.on('mouseenter', function() {
        const index = $(this).index();
        homeSlider.slick('slickGoTo', index);
    });
})();
