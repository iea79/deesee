(function () {
    const anchor = document.querySelectorAll('.devAnchore');
    const anchorName = document.querySelectorAll('.devAnchore > span');
    const list = document.querySelector('.devFirst__anchor')

    anchor.forEach((item, i) => {
        let a = document.createElement('a');
        a.href = `#${item.id}`;
        a.setAttribute('dataset-scroll-to', false);
        a.innerHTML = anchorName[i].innerHTML;
        list.append(a);
    });

    $('.devReviews__slider').slick({
        dots: true,
        infinite: true,
        arrows: true,
        nextArrow: '<button class="slick-next"></button>',
        prevArrow: '<button class="slick-prev"></button>',
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    arrows: false,
                    dots: true
                }
            }
        ]
    });

    $('[data-form]').on('click', function() {
        const modal = $('.orderModal');
        const title = $(this).data('form');
        const subject = modal.find('[name=subject]');
        const modalTitle = modal.find('.modal-title');

        subject.val(title);
        modalTitle.html(`Do you want to order <br>a ${title} service?`);
    });

    toggleDevList();
    checkOnResize();

    $(window).resize(function(event) {
        var windowWidth = $(window).width();
        // Запрещаем выполнение скриптов при смене только высоты вьюпорта (фикс для скролла в IOS и Android >=v.5)
        if (app.resized == windowWidth) { return; }
        app.resized = windowWidth;

    	checkOnResize();
    });

    function checkOnResize() {
        replaceTitle();
    }

})();

function replaceTitle() {
    const right = $('.devFirst__right');
    const h1 = $('.devFirst h1');
    const h2 = $('.devFirst h2');
    const left = $('.devFirst__left');
    if (window.width > 767) {
        h2.appendTo(right);
    } else {
        h2.insertAfter(h1);
    }
}

function toggleDevList() {
    const list = $('.devProcess__list');
    const item = $('.devProcess__item');
    const visibled = $('.devProcess__visibled');
    const itemInit = $('.devProcess__item:first-child');

    itemInit.addClass('active');
    renderActive();

    item.on('click', function() {
        item.removeClass('active');
        $(this).addClass('active');
        renderActive();
    });

    function renderActive() {
        item.each((i, item) => {
            if ($(item).hasClass('active')) {
                const content = $(item).find('.devProcess__content');
                visibled.html('');
                content.clone().appendTo(visibled);
            }
        });
    }
}
