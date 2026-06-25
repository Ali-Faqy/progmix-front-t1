import Swiper from "swiper";
import { Pagination, Navigation } from "swiper/modules";

import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";
const swiper = new Swiper(".swiper", {
    modules: [Pagination],
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
});

const swiperProfile = new Swiper(".swiper-profile", {
    modules: [Navigation],
    slidesPerView: 2.5,
    loop: true,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next-profile",
        prevEl: ".swiper-button-prev-profile",
    },
});
