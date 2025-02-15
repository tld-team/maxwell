import Swiper from "swiper";
import {Autoplay, FreeMode, Navigation, Thumbs} from "swiper/modules";

function mySwiper() {
    var thumbSwiper = new Swiper(".mySwiper", {
        modules: [Thumbs, FreeMode, Navigation],
        loop: false,
        effect: "fade",
        speed: 1000,
        watchSlidesProgress: true,
    });

    var topSwiper = new Swiper(".mySwiper2", {
        speed: 1000,
        spaceBetween: 10,
        modules: [Thumbs, FreeMode, Autoplay, Navigation],
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".cre-button-next",
            prevEl: ".cre-button-prev",
        },
        thumbs: {
            swiper: thumbSwiper,
        },
        watchSlidesProgress: true,
    });
}
mySwiper();