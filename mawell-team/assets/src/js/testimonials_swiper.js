// swiper.js

import Swiper from "swiper/bundle";
import { Thumbs, FreeMode, Navigation, Autoplay } from "swiper/modules";

function testimonials_swiper() {
    new Swiper(".testimonials_swiper", {
        modules: [Thumbs, FreeMode, Navigation],
        loop: true,
        navigation: {
            nextEl: ".button-next",
            prevEl: ".button-prev",
        },
        pagination: {
            clickable: true,
            el: ".swiper-pagination",
        },
        breakpoints: {
            440: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
    });
}

testimonials_swiper();
