console.log('panther');
// import { gsap } from 'gsap';
// import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

// gsap.to("#panther", {
//     scrollTrigger: "#firstScreen",
// });

const panther = document.querySelector('.panther__img'),
      fScreen = document.querySelector('#firstScreen');

ScrollTrigger.defaults({
    // markers: true
});

gsap.timeline()
    .from('.header__center', {
        y: '-100%',
        opacity: 0
    })
    .from('.menu-item', {
        y: '-100%',
        stagger: 0.1,
        opacity: 0
    })
    .from('.header__border', {
        duration: 0.3,
        xPercent: -100
    })
    .from('.firstScreen__left', {
        x: '-100%',
        opacity: 0
    })
    .from('.firstScreen__right', {
        x: '100%',
        opacity: 0
    })
    .from('.panther', {
        duration: 1.5,
        opacity: 0
    })
    .from('.firstScreen__bottom', {
        y: '100%',
        opacity: 0
    });

gsap.to(panther, {
    scrollTrigger: {
        trigger: fScreen,
        start: "0%",
        end: '300%',
        scrub: true,
        // pin: true,
    },
    y: '130%',
    x: '150%',
    scale: 4.5,
    opacity: -0.5
});

gsap.from('.facts__number', {
    scrollTrigger: {
        trigger: '.facts',
        start: "top 80%",
        end: 'bottom 40%',
        // scrub: true,
        // pin: true,
    },
    // stagger: 0.1,
    y: '30%',
    opacity: 0
});

gsap.from('.facts__text', {
    scrollTrigger: {
        trigger: '.facts',
        start: "top 90%",
        end: 'bottom 20%',
        // scrub: true,
        // pin: true,
    },
    // stagger: 0.1,
    y: '30%',
    opacity: 0
});


gsap.from('.fadeRight', {
    scrollTrigger: {
        trigger: '.fadeRight',
        start: "top 90%",
        end: 'bottom 40%',
        // scrub: true,
        // pin: true,
    },
    stagger: 0.1,
    x: '-10%',
    opacity: 0
});


function hoverBtn() {
    let btn = document.querySelectorAll('.btn');

    btn.forEach((item) => {
        let overlay = document.createElement('span');

        overlay.classList.add('btn__overlay');
        overlay.style.display = 'none';
        item.appendChild(overlay);

        item.addEventListener('mouseenter', (e) => {
            let left = e.offsetX,
                top = e.offsetY;
            overlay.style.cssText = 'display: block; left: '+left+'px; top: '+top+'px';
        });

        item.addEventListener('mouseleave', () => {
            overlay.style.display = 'none';
        });

    });

}
hoverBtn();
