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
    playPause();
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


function playPause() {
    const playBtns = document.querySelectorAll('.archiveReview .archiveReview__play');
    const videos = document.querySelectorAll('.archiveReview video');

    videos.forEach((video, i) => {
        video.addEventListener("playing", ({target}) => {
            if (target.style.width !== '100%' && target.offsetWidth > target.offsetHeight) {
                target.classList.add('cover');
            }
            target.style.width = '100%';
            target.parentNode.querySelector('.archiveReview__poster').style.display = 'none';
            target.dataset.play = "true"
            playBtns[i].classList.add('paused');
        });
        video.addEventListener("pause", ({target}) => {
            target.dataset.play = "false";
            playBtns[i].classList.remove('paused');
        });
    });


    playBtns.forEach((btn, i) => {
        let played = false;
        btn.addEventListener('click', ev => {
            videos.forEach((video, k) => {
                if (i !== k && video.dataset.play === "true") {
                    video.pause();
                }
            });
            if (videos[i].dataset.play === "true") {
                videos[i].pause();
                videos[i].dataset.play = "false";
            } else {
                videos[i].play();
                videos[i].dataset.play = "true";
            }
        });
    });

}
