(function () {
    // gsap.registerPlugin(ScrollTrigger);
    // let container = document.querySelector('.horizontallScroll');
    // gsap.to(container, {
    //     x: () => -(container.scrollWidth - document.documentElement.clientWidth) + "px",
    //     ease: "none",
    //     scrollTrigger: {
    //         trigger: container,
    //         invalidateOnRefresh: true,
    //         // pin: true,
    //         scrub: 1,
    //         end: () => "+=" + container.offsetWidth
    //     }
    // })
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
                // context: canvasContext, // the canvas context
                // scaleMode: 'noScale',
                // clearCanvas: false,
                progressiveLoad: false, // Boolean, only svg renderer, loads dom elements when needed. Might speed up initialization for large number of elements.
                // hideOnTransparent: true //Boolean, only svg renderer, hides elements when opacity reaches 0 (defaults to true)
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
            elem.querySelector('.video__play:not([data-video-id])').click();
        }
    }, function(elem) {
        let frame = elem.querySelector('iframe');
        if (frame) {
            elem.querySelector('iframe').remove();
        }
    } );

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
})();
