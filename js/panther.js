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
    // .to('body', {
    //     overflow: 'hidden',
    // })
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
        y: '50%',
        opacity: 0
    })
    .from('.firstScreen__right', {
        y: '50%',
        opacity: 0
    })
    .from('.panther', {
        duration: 1.5,
        opacity: 0
    })
    // .to('body', {
    //     overflow: 'inherit',
    // })
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

let titleHei = $('.facts__title').innerHeight();
let scrollHei = $('.facts').innerHeight() - titleHei;
if ($(window).width() > 767) {
    gsap.to('.facts__trap', {
            scrollTrigger: {
                trigger: '.facts',
                start: "top top",
                end: "bottom "+titleHei+"px",
                scrub: true,
            },
            y: scrollHei,
            ease: 'linear',
    });
}

gsap.utils.toArray('.facts__item').forEach(item => {
    const text = item.querySelector('.facts__text'),
          num = item.querySelector('.facts__number');

    gsap.from(text, {
        scrollTrigger: {
            trigger: item,
            start: "top 50%",
            end: 'bottom bottom',
            // scrub: true,
        },
        // stagger: 0.1,
        y: '50%',
        duration: 1,
        delay: 0.2,
        opacity: 0,
        ease: "power2.out",
        // stagger: 0.5
    });

    gsap.from(num, {
        scrollTrigger: {
            trigger: item,
            start: "top 50%",
            end: 'bottom bottom',
            // scrub: true,
        },
        // stagger: 0.1,
        y: '50%',
        duration: 1,
        opacity: 0,
        ease: "power2.out",
        // stagger: 0.5
    });
});

gsap.utils.toArray('.canHelp__item').forEach(item => {
    const text = item.querySelector('.canHelp__text'),
          letter = item.querySelector('.canHelp__preffix'),
          name = item.querySelector('.canHelp__name'),
          btn = item.querySelector('.btn'),
          more = item.querySelector('.canHelp__more');

    const options = {
        scrollTrigger: {
            trigger: item,
            start: "top 50%",
            end: 'bottom bottom',
        },
        y: '50%',
        x: 0,
        duration: 1,
        opacity: 0,
        delay: 0,
        ease: "power2.out",
    };

    gsap.from(letter, options);

    options.delay = 0.2;
    gsap.from(name, options);

    options.delay = 0.4;
    gsap.from(text, options);

    options.delay = 0.6;
    options.y = 100;
    gsap.from(more, options);

    options.delay = 1;
    options.y = 0;
    options.x = 100;
    ease = 'none';
    gsap.from(btn, options);
});

gsap.utils.toArray('.speaks__item:not(:first-child)').forEach((item, i) => {
    const options = {
        scrollTrigger: {
            trigger: item,
            start: "top 70%",
            end: 'bottom bottom',
        },
        y: '50%',
        x: 0,
        duration: 1,
        opacity: 0,
        delay: i/10,
        // stagger: 0.2
    };
    // setTimeout(function () {
    //
    // }, 10);
    gsap.from(item, options);
});

// gsap.from('.speaks__item:not(:first-child)', {
//     scrollTrigger: {
//         trigger: '.speaks',
//         start: "top 30%",
//         end: 'bottom bottom',
//     },
//     y: '50%',
//     x: 0,
//     duration: 1,
//     opacity: 0,
//     delay: 0,
//     stagger: 0.2
// });

gsap.utils.toArray('.fadeRight').forEach(item => {
    gsap.from(item, {
        scrollTrigger: {
            trigger: item,
            start: "top 90%",
            end: 'bottom 40%',
            // scrub: true,
            // pin: true,
        },
        stagger: 0.1,
        x: '-10%',
        opacity: 0
    });
});

gsap.utils.toArray('.review__box').forEach(item => {
    gsap.from(item, {
        scrollTrigger: {
            trigger: item,
            start: "top 90%",
            end: 'bottom 40%',
            // scrub: true,
            // pin: true,
        },
        stagger: 0.1,
        y: '20%',
        opacity: 0
    });
});

gsap.from('.review__video', {
    scrollTrigger: {
        trigger: '.review__video',
        start: "top 90%",
        end: 'bottom 40%',
        // scrub: true,
        // pin: true,
    },
    stagger: 0.1,
    x: '-20%',
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
