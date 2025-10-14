import Swiper from 'swiper'
import 'swiper/css'

document.addEventListener('DOMContentLoaded', () => {
  if (window.Swiper || Swiper) {
    document.querySelectorAll('.swiper').forEach(el => {
      new Swiper(el, {
        loop: true,
        autoplay: { delay: 3500, disableOnInteraction: false },
        pagination: { el: el.querySelector('.swiper-pagination'), clickable: true },
        navigation: {
          nextEl: el.querySelector('.swiper-button-next'),
          prevEl: el.querySelector('.swiper-button-prev'),
        },
      })
    })
  }
})