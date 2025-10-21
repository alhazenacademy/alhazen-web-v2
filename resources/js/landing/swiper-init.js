import Swiper from "swiper";
import {
    Navigation,
    Pagination,
    Autoplay,
    Keyboard,
    A11y
} from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

export const worksSwiper = new Swiper(".student-works-swiper", {
  modules: [Navigation, Pagination, Autoplay, Keyboard, A11y],
  loop: true,
  autoHeight: false,
  spaceBetween: 24,
  keyboard: { enabled: true },
  a11y: {
    enabled: true,
    prevSlideMessage: "Previous slide",
    nextSlideMessage: "Next slide",
    firstSlideMessage: "This is the first slide",
    lastSlideMessage: "This is the last slide",
    paginationBulletMessage: "Go to slide {{index}}",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
    dynamicMainBullets: 3,
  },
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },
  breakpoints: {
    0:   { slidesPerView: 1, spaceBetween: 16 },
    640: { slidesPerView: 2, spaceBetween: 20 },
    1024:{ slidesPerView: 4, spaceBetween: 24 },
  },
  observer: true,
  observeParents: true,
});