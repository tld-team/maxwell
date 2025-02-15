import Swiper from "swiper";
import {FreeMode, Thumbs} from "swiper/modules";

function testimonial_directory() {
    new Swiper("#testimonial_directory", {
        modules: [Thumbs, FreeMode],
        slidesPerView: 1,
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        breakpoints: {
            400: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 50,
            },
        },
    });
}

testimonial_directory()