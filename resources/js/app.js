
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay, EffectFade } from 'swiper/modules';


document.addEventListener('DOMContentLoaded', function () {
    const menuBtn = document.querySelector('.menu-btn');
    const mobileMenu = document.querySelector('.mobile-menu');
    const servicesBtn = document.querySelector('.services-btn');
    const servicesDropdown = document.querySelector('.services-dropdown');
    const servicesArrow = servicesBtn.querySelector('svg');

    menuBtn.addEventListener('click', function (e) {
        e.stopPropagation();
        this.classList.toggle('active');
        mobileMenu.classList.toggle('active');
    });

    servicesBtn.addEventListener('click', function (e) {
        e.stopPropagation();
        servicesDropdown.classList.toggle('active');
        servicesArrow.classList.toggle('rotate-180');
    });

    document.addEventListener('click', function (e) {
        if (!mobileMenu.contains(e.target) && e.target !== menuBtn) {
            mobileMenu.classList.remove('active');
            menuBtn.classList.remove('active');
            servicesDropdown.classList.remove('active');
            servicesArrow.classList.remove('rotate-180');
        }
    });

    mobileMenu.addEventListener('click', function (e) {
        e.stopPropagation();
    });
});

;

document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.hero-slider', {
        modules: [Navigation, Pagination, Autoplay, EffectFade],
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
    });
});