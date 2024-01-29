(function () {
    const anchor = document.querySelectorAll('.devAnchore');
    const anchorName = document.querySelectorAll('.devAnchore > span');
    const list = document.querySelector('.devFirst__anchor');

    if (!$('body').hasClass('page-template-page-seo-template-new')) {

        anchor.forEach((item, i) => {
            let a = document.createElement('a');
            a.href = `#${item.id}`;
            a.setAttribute('dataset-scroll-to', false);
            a.innerHTML = anchorName[i].innerHTML;
            if (list) {
                list.append(a);
            }
        });
    }


    $('[data-form]').on('click', function() {
        const id = $(this).data('target');
        const modal = $(id);
        const form = modal.find('form');
        const title = $(this).data('form');
        const subject = modal.find('[name=subject]');
        const modalTitle = modal.find('.modal-title');

        subject.val(title);
        form.attr('id', title);
        if (id !== '#sampleModal') {
            modalTitle.html(`${title} Service Request`);
            // modalTitle.html(`Do you want to order <br>a ${title} service?`);
        }
    });


    // playStopReviewVideo();
    // toggleDevList();
    checkOnResizeDev();
    // countdown();

})();

let resized = false;

$(window).resize(function(event) {
    var windowWidth = $(window).width();
    // Запрещаем выполнение скриптов при смене только высоты вьюпорта (фикс для скролла в IOS и Android >=v.5)
    if (resized == windowWidth) { return; }
    resized = windowWidth;

    checkOnResizeDev();
});

function checkOnResizeDev() {
    replaceTitle();
}

function replaceTitle() {
    const right = $('.devFirst__right');
    const h1 = $('.devFirst h1');
    const h2 = $('.devFirst h2');

    if ($(window).width() > 767) {
        h2.appendTo(right);
    } else {
        h2.insertAfter(h1);
    }
}

function setLoaderFromCF7() {
    const wpcf7forms = document.querySelectorAll( '.wpcf7' );

    wpcf7forms.forEach((form, i) => {
        const button = form.querySelector('.btn');
        const loader = document.createElement('span');
        loader.classList.add('cf7__loader');
        button.appendChild(loader);

        button.addEventListener('click', () => {
            // loader.style.display = 'block';
            button.classList.add('disabled');
            // button.setAttribute('disabled', 'disabled');
        });

        form.addEventListener( 'wpcf7beforesubmit', function( event ) {
            // hide(event);
        }, false );

        form.addEventListener( 'wpcf7invalid', function( event ) {
            hide(event);
        }, false );

        form.addEventListener( 'wpcf7spam', function( event ) {
            hide(event);
        }, false );

        form.addEventListener( 'wpcf7mailsent', function( event ) {
            hide(event);
            location.href = "/get-in-touch-success";
        }, false );

        function hide(e) {
            // loader.style.display = 'none';
            button.classList.remove('disabled');
            // button.disabled = false;
            // button.removeAttribute('disabled');
            console.log(e.type);
        }
    });
}

setLoaderFromCF7();
