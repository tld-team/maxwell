import Swiper from "swiper";
import {FreeMode, Navigation, Thumbs} from "swiper/modules";



document.addEventListener("DOMContentLoaded", function () {
    function testimonials() {
        new Swiper(".testimonials", {
            modules: [Thumbs, FreeMode, Navigation],
            loop: true,
            navigation: {
                nextEl: ".testimonials-button-next",
                prevEl: ".testimonials-button-prev",
            },
            pagination: {
                clickable: true,
                el: ".swiper-pagination",
            },
        });
    }
    testimonials()
});