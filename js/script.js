

ScrollReveal().reveal('.img-fluid', { delay: 500 });

window.Vue = require('vue');

import VideoBg from 'vue-videobg'

Vue.component('video-bg', VideoBg)

import VueAos from 'vue-aos'
Vue.component('vue-aos', VueAos)


import VueParallaxJs from 'vue-parallax-js'
Vue.use(VueParallaxJs)

import VueScrollReveal from 'vue-scroll-reveal';
Vue.use(VueScrollReveal, {
    scale: 1,
    distance: '1000px',
    mobile: false
});

window.onload = function () {
    const app = new Vue({
        el: '#app',
        created() {

            // Hide Header on on scroll down
            var didScroll;
            var lastScrollTop = 0;
            var delta = 5;
            var navbarHeight = $('header').height();

            $(window).scroll(function (event) {
                didScroll = true;
            });

            setInterval(function () {
                console.log(didScroll);
                if (didScroll) {
                    hasScrolled();
                    didScroll = false;
                }
            }, 250);

            function hasScrolled() {

                return;

                var st = $(window).scrollTop();

                console.log(st);

                // Make sure they scroll more than delta
                if (Math.abs(lastScrollTop - st) <= delta)
                    return;

                // If they scrolled down and are past the navbar, add class .nav-up.
                // This is necessary so you never see what is "behind" the navbar.
                console.log(st, lastScrollTop, navbarHeight);
                if (st > lastScrollTop && st > 100) {
                    console.log('scroll down');
                    // Scroll Down
                    $('header').removeClass('hidden');
                } else if (st <= 300) {
                    console.log('scroll up');

                    $('header').addClass('hidden');

                }

                lastScrollTop = st;
            }
        }
    });
}