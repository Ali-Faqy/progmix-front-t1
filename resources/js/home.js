import Swiper from "swiper";
import { Pagination, Navigation } from "swiper/modules";

import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";
import $ from "jquery";
window.$ = window.jQuery = $;

import "magnific-popup";
import "magnific-popup/dist/magnific-popup.css";

// import "./chatbot.js";
import "./jChatbot.js";
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

document.addEventListener("DOMContentLoaded", () => {
     $(".video-popup").magnificPopup({
        type: "iframe",
    });
//     $(".video-popup").magnificPopup({
//     type: "inline",
//     midClick: true,
// });
    const counts = document.querySelectorAll(".section-statistic-number");
    const section = document.querySelector(".section-statistic");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;

                counts.forEach((count) => {
                    function update() {
                        const target = parseInt(count.dataset.target);
                        const counter = parseInt(count.innerText) || 0;
                        const inc = 1;

                        if (counter < target) {
                            count.innerText =
                                "+" + Math.min(counter + inc, target);
                            setTimeout(update, 100);
                        } else {
                            count.innerText = "+" + target;
                        }
                    }

                    update();
                });

                observer.unobserve(section);
            });
        },
        {
            threshold: 0.7,
        },
    );

    observer.observe(section);
});
