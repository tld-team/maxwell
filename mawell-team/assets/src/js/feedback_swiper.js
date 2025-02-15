import Swiper from "swiper";
import {FreeMode, Navigation, Thumbs} from "swiper/modules";

function feedback_swiper() {
    new Swiper(".feedback_swiper", {
        modules: [Thumbs, FreeMode, Navigation],
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
}

feedback_swiper()