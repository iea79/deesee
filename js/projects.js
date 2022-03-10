(function () {
    let players = document.querySelectorAll('.video__wrapper');

    players.forEach((player, i) => {
    });

    document.querySelectorAll('.lotti').forEach((el, i) => {
        lottie.loadAnimation({
            container: el, // the dom element that will contain the animation
            renderer: 'svg',
            autoplay: false,
            loop: false,
            path: el.dataset.path,
            name: el.dataset.name,
            rendererSettings: {
                progressiveLoad: false,
            }
        });
    });

    onVisible( '.lotti', function (el) {
        // let svg = el.querySelector('svg');
        lottie.play(el.dataset.name);
    }, function(el) {
        lottie.stop(el.dataset.name);
    }, [0.1]);

    onVisible( '.video__wrapper', function(elem) {
        let frame = elem.querySelector('iframe');
        if (!frame) {
            try {
                elem.querySelector('.video__play:not([data-video-id])').click();
            } catch (e) {}
        }
    }, function(elem) {
        let frame = elem.querySelector('iframe');
        if (frame) {
            elem.querySelector('iframe').remove();
        }
    } );

})();
