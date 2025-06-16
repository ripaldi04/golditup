import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// resources/js/app.js


window.initSwipers = function () {
    document.querySelectorAll('.kelasSwiper, .kelasTerbaruSwiper').forEach(function (el) {
        const slides = el.querySelectorAll('.swiper-slide');
        if (!slides.length) {
            console.warn('Lewati init swiper: tidak ada slide ditemukan di', el);
            return;
        }

        // Destroy swiper lama jika sudah ada
        if (el.swiper) {
            el.swiper.destroy(true, true);
        }

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
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: isTerbaru ? 2 : 3
                }
            }
        });

        requestAnimationFrame(() => {
            swiper.slideTo(0, 0);
            swiper.update();
            console.log('Swiper init & update:', el);
        });
    });
};

// Jalankan saat pertama kali halaman dimuat
document.addEventListener("DOMContentLoaded", () => {
    window.initSwipers();
});

// DARI LIVEWIRE EVENT MANUAL
window.addEventListener('initSwipersManually', () => {
    setTimeout(() => {
        window.initSwipers();
    }, 100);
});
