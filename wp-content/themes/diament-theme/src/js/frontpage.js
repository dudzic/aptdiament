import Macy from "macy";
import Swiper, { Navigation, Pagination, Autoplay } from "swiper";

Swiper.use([Navigation, Pagination, Autoplay]);

(() => {
    Macy({
        container: ".frontpage-blog-grid",
        waitForImages: false,
        margin: 60,
        columns: 2,
        breakAt: {
            768: {
                columns: 1,
            },
        },
    });
})();

(() => {
    new Swiper(".frontpage-job-offers-slider", {
        slidesPerView: 3,
        spaceBetween: 20,
        speed: 1200,
        autoplay: {
            delay: 6000,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            bulletClass: "frontpage-job-offerts-pagination__bullet",
            bulletActiveClass:
                "frontpage-job-offerts-pagination__bullet--active",
        },
        navigation: {
            nextEl: ".frontpage-job-offers-slider-navigation__next",
            prevEl: ".frontpage-job-offers-slider-navigation__prev",
        },
    });
})();
