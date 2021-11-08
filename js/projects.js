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

    onVisible( '.video__wrapper' );

    function onVisible( selector ) {

        let options = {
            threshold: [ 0.5 ]
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
                    if (!frame) {
                        elem.querySelector('.video__play:not([data-video-id])').click();
                    }
                } else {
                    if (frame) {
                        elem.querySelector('iframe').remove();
                    }
                }
            } );
        }
    }
})();
