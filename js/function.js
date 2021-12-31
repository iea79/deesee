/*!
 *
 * Evgeniy Ivanov - 2018
 * busforward@gmail.com
 * Skype: ivanov_ea
 *
 */

var app = {
    pageScroll: '',
    lgWidth: 1200,
    mdWidth: 992,
    smWidth: 768,
    resized: false,
    iOS: function() { return navigator.userAgent.match(/iPhone|iPad|iPod/i); },
    touchDevice: function() { return navigator.userAgent.match(/iPhone|iPad|iPod|Android|BlackBerry|Opera Mini|IEMobile/i); }
};

jQuery(function ($) {
    $.fn.hScroll = function (amount) {
        amount = amount || 100;
        $(this).on("DOMMouseScroll mousewheel", function (event) {
            let oEvent = event.originalEvent,
                direction = oEvent.detail ? oEvent.detail * -amount : oEvent.wheelDelta,
                position = $(this).scrollLeft(), start, end,
                scrollWidth = $(this).get(0).scrollWidth,
                pageWidth = document.querySelector('body').offsetWidth;

            start = position;
            // console.log('scrollWidth', scrollWidth);
            // console.log('event', oEvent);
            // console.log('direction', direction);
            // console.log('start', start);
            position += direction > 0 ? -amount : amount;
            // console.log($(this).innerWidth());
            end = position;
            // console.log('end', position);
            // console.log(app.pageScroll);
            if (scrollWidth > pageWidth) {
                $(this).scrollLeft(position);
                event.preventDefault();
            }
            // if (app.pageScroll === 'down') {
                // if (pageWidth !== scrollWidth - start || start !== 0) {
                // }
            // } else {
                // if (start !== 0 ) {
                //     $(this).scrollLeft(position);
                //     event.preventDefault();
                // }
                // event.preventDefault();
            // }
        })
    };
});


function isLgWidth() { return $(window).width() >= app.lgWidth; } // >= 1200
function isMdWidth() { return $(window).width() >= app.mdWidth && $(window).width() < app.lgWidth; } //  >= 992 && < 1200
function isSmWidth() { return $(window).width() >= app.smWidth && $(window).width() < app.mdWidth; } // >= 768 && < 992
function isXsWidth() { return $(window).width() < app.smWidth; } // < 768
function isIOS() { return app.iOS(); } // for iPhone iPad iPod
function isTouch() { return app.touchDevice(); } // for touch device


$(document).ready(function() {
    // Хак для клика по ссылке на iOS
    if (isIOS()) {
        $(function(){$(document).on('touchend', 'a', $.noop)});
    }

	// Запрет "отскока" страницы при клике по пустой ссылке с href="#"
	$('[href="#"]').click(function(event) {
		event.preventDefault();
	});

    // Inputmask.js
    // $('[name=tel]').inputmask("+9(999)999 99 99",{ showMaskOnHover: false });
    // formSubmit();

    checkOnResize();

    // stikyMenu();

    $('.ideas__slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        arrows: true,
        adaptiveHeight: true,
        nextArrow: $('.ideas__next'),
        prevArrow: $('.ideas__prev'),
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 450,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots: true
                }
            }
        ]
    });

    // $('.review__slider').slick({
    //     dots: false,
    //     infinite: true,
    //     speed: 500,
    //     arrows: true,
    //     adaptiveHeight: true,
    //     nextArrow: $('.review__next'),
    //     prevArrow: $('.review__prev'),
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     responsive: [
    //         {
    //             breakpoint: 450,
    //             settings: {
    //                 arrows: false,
    //                 dots: true
    //             }
    //         }
    //     ]
    // });

    // $('.horizontallScroll').hScroll(0);

    let $hor = $(".horizontallScroll");

    // $("body").css('padding-bottom', $hor[0].scrollWidth - $hor.outerWidth());
    //
    // $(window).on('scroll', function () {
    //     let top = $(document).scrollTop(),
    //         lim = $hor.position().top - $hor[0].scrollLeft - ($(window).height() - $hor.outerHeight()) / 2,
    //         width = $hor[0].scrollWidth - $hor.outerWidth(),
    //         delta = Math.min(Math.max(top - lim, 0), width);
    //
    //     $hor[0].scrollLeft = delta;
    //     $("body").css({'padding-top': delta, 'padding-bottom': width - delta});
    // });

    selectStyler();

    $('#projectTypeToggle').on('change', function() {
        $('.form__pane').removeClass('active');
        $('#' + $(this).val()).addClass('active');
        $('[project-type]').val($(this).val());
    });

    showPlaceholderInDateField();
    // toggleRequiredEmail();

});

function showPlaceholderInDateField() {
    const date = $('[type=date]');
    date.attr('type', 'text');
    date.on('focus', function() {
        $(this).attr('type', 'date');
    });

    date.on('blur', function() {
        if (!$(this).val()) {
            $(this).attr('type', 'text');
        }
    });
}

function toggleRequiredEmail() {

    const form = $('.pageGetTouch__form'),
          email = form.find('[type=email]'),
          tel = form.find('[type=tel]');

    email.blur(function() {
        if ($(this).val()) {
            tel.removeAttr('aria-required').removeClass('wpcf7-validates-as-required');
        } else {
            tel.attr('aria-required', 'true').addClass('wpcf7-validates-as-required');
        }
    });
}

// $(window).on('scroll', function(){
//     let scrollPos = $(window).scrollTop();
//     console.log(scrollPos);
//     $('.panther__img').css({
//         transform: 'translate(0px, '+scrollPos+'px) scale('+scrollPos/1000+')',
//         // opacity: scrollPos/1000
//     });
// });

$(window).resize(function(event) {
    var windowWidth = $(window).width();
    // Запрещаем выполнение скриптов при смене только высоты вьюпорта (фикс для скролла в IOS и Android >=v.5)
    if (app.resized == windowWidth) { return; }
    app.resized = windowWidth;

	checkOnResize();
});

function checkOnResize() {
    replaceMenu();
    replaceDesignTabs();
}

function replaceMenu() {
    const subnav = $('#site-navigation-2');

    if (isXsWidth()) {
        subnav.appendTo('.nav');
    } else {
        subnav.appendTo('.header__right');

    }
}

function replaceDesignTabs() {
    $('[data-plate]').each(function(index, el) {
        let id = $(el).data('plate');
        if (isXsWidth()) {
            $(el).insertAfter('[data-tab='+id+']');
        } else {
            $(el).appendTo('.design__content');
        }
    });
}

// Stiky menu // Липкое меню. При прокрутке к элементу #header добавляется класс .stiky который и стилизуем
function stikyMenu() {
    let HeaderTop = $('header').offset().top + $(window).height();
    let currentTop = $(window).scrollTop();

    setNavbarPosition();

    $(window).scroll(function(){
        setNavbarPosition();
    });

    function setNavbarPosition() {
        currentTop = $(window).scrollTop();

        if( currentTop > HeaderTop ) {
            $('header').addClass('stiky');
        } else {
            $('header').removeClass('stiky');
        }

        $('.navbar__link').each(function(index, el) {
            let section = $(this).attr('href');

            if ($('section').is(section)) {
                let offset = $(section).offset().top;

                if (offset <= currentTop && offset + $(section).innerHeight() > currentTop) {
                    $(this).addClass('active');
                } else {
                    $(this).removeClass('active');
                }
            }
        });
    }
}

function toggleTabs() {
    let toggle = $('[data-tab]');
    toggle.on('click', (e) => {
        let self = e.target;
        $('[data-tab]').removeClass('active');
        $(self).addClass('active');
        $('[data-plate]').removeClass('active');
        $('[data-plate='+self.dataset.tab+']').addClass('active');
    });
}
toggleTabs();

function openMobileNav() {
    $('.menu__toggle').on('click', function() {
        var wrapp = $('.nav');

        wrapp.toggleClass('open');
        $(this).toggleClass('active');
        $('body').toggleClass('nav_open');
    });
}
openMobileNav();

// Scroll to ID // Плавный скролл к элементу при нажатии на ссылку. В ссылке указываем ID элемента
function srollToId() {
    $('[data-scroll-to]').click( function(){
        var scroll_el = $(this).attr('href');
        if ($(scroll_el).length != 0) {
            $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500);
        }
        return false;
    });
}


// Проверка направления прокрутки вверх/вниз
function checkDirectionScroll() {
    var tempScrollTop, currentScrollTop = 0;

    $(window).scroll(function(){
        currentScrollTop = $(window).scrollTop();

        if (tempScrollTop < currentScrollTop ) {
            app.pageScroll = "down";
        } else if (tempScrollTop > currentScrollTop ) {
            app.pageScroll = "up";
        }
        tempScrollTop = currentScrollTop;

    });
}
checkDirectionScroll();

// Видео youtube для страницы
function uploadYoutubeVideo() {
    let resolutionImg = 'maxresdefault';
    if (isXsWidth()) {
        resolutionImg = 'hqdefault';
    }
    if ($(".js-youtube")) {

        $(".js-youtube").each(function () {
            // Зная идентификатор видео на YouTube, легко можно найти его миниатюру
            $(this).css('background-image', 'url(http://i.ytimg.com/vi/' + this.id + '/'+resolutionImg+'.jpg)');

            // Добавляем иконку Play поверх миниатюры, чтобы было похоже на видеоплеер
            // $(this).append($('<img src="img/play.svg" alt="Play" class="video__play">'));

        });

        $('.video__play:not([data-video-id])').on('click', function () {
            // создаем iframe со включенной опцией autoplay
            let wrapp = $(this).closest('.js-youtube'),
                videoId = wrapp.attr('id'),
                url = "https://www.youtube.com/embed/" + videoId + "?autoplay=1&autohide=1&modestbranding=1&rel=0&playlist="+videoId+"&fs=0&showinfo=0&iv_load_policy=3";

            if (wrapp.data('params')) url += '&' + wrapp.data('params');

            // Высота и ширина iframe должны быть такими же, как и у родительского блока
            let iframe = $('<iframe/>', {
                'frameborder': '0',
                'src': url,
                'allow': "autoplay",
            });

            // Заменяем миниатюру HTML5 плеером с YouTube
            $(this).closest('.video__wrapper').append(iframe);

        });
    }
}

uploadYoutubeVideo();

function openVideoModal() {
    let modal = $('.videoReview'),
        modalBody = $('.videoReview .video__wrapper'),
        play = $('[data-video-id]');

    play.on('click', function() {
        let id = $(this).data('videoId'),
            iframe = $('<iframe/>', {
                'frameborder': '0',
                'src': "https://www.youtube.com/embed/" + id + "?autoplay=1&autohide=1",
                'allow': "autoplay"
            });

        modalBody.append(iframe);
        modal.modal('show');
    });

    modal.on('hide.bs.modal', () => {
        modalBody.html('');
    });
}
openVideoModal();

function onVisible( selector, callback, playback, threshold=[0.5] ) {

    let options = {
        threshold: threshold
    };
    let observer = new IntersectionObserver( onEntry, options );
    let elements = document.querySelectorAll( selector );
    // let play = selector.querySelector('.video__play');

    for ( let elm of elements ) {
        observer.observe( elm );
    }

    function onEntry( entry ) {
        entry.forEach( change => {
            let elem = change.target;
            let frame = elem.querySelector('iframe');
            if ( change.isIntersecting ) {
                // console.log('show', elem);
                callback(elem);
            } else {
                // console.log('hidden', elem);
                playback(elem);
            }
        } );
    }
}

function selectStyler() {
    $('select').each(function () {
        var $this = $(this),
            numberOfOptions = $(this).children('option').length;

        $this.addClass('s-hidden');
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select__current"></div>');

        var $styledSelect = $this.next('div.select__current');
            $styledSelect.text($this.children('option').eq(0).text());

        var $list = $('<ul />', {
            'class': 'select__options'
        }).insertAfter($styledSelect);

        for (var i = 0; i < numberOfOptions; i++) {
            $('<li />', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
        }

        var $listItems = $list.children('li');

        $styledSelect.click(function (e) {
            e.stopPropagation();
            $('div.select__current.active').each(function () {
                $(this).removeClass('active').next('ul.select__options').hide();
            });
            $(this).toggleClass('active').next('ul.select__options').toggle();
        });

        $listItems.click(function (e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass('active');
            $this.val($(this).attr('rel')).change();
            $list.hide();
        });

        $(document).click(function () {
            $styledSelect.removeClass('active');
            $list.hide();
        });
    });
}


onVisible( 'video', function(video) {
    // console.log('visible');
    video.play();
    // if (!video.onplaying) {
    // }
}, function(video) {
    // console.log('hidden');
    video.pause();
    // if (video.onplaying) {
    // }
});
