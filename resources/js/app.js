import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// resources/js/app.js


window.initSwipers = function () {
    document.querySelectorAll('.kelasSwiper, .kelasTerbaruSwiper').forEach(function (el) {
        if (el.swiper) return;

        const isTerbaru = el.classList.contains('kelasTerbaruSwiper');

        const swiper = new Swiper(el, {
            slidesPerView: 2,
            spaceBetween: 20,
            navigation: {
                nextEl: el.querySelector('.swiper-button-next'),
                prevEl: el.querySelector('.swiper-button-prev'),
            },
            breakpoints: {
                768: {
                    slidesPerView: isTerbaru ? 2 : 2,
                },
                1024: {
                    slidesPerView: isTerbaru ? 2 : 3,
                }
            }
        });

        setTimeout(() => swiper.update(), 100);
    });
};

document.addEventListener("DOMContentLoaded", () => {
    window.initSwipers();
});

if (window.livewire) {
    window.livewire.hook('message.processed', () => {
        window.initSwipers();
    });
}
