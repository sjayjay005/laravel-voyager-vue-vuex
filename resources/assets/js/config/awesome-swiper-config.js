/**
* Home vue awesome-swiper
*/
const homeSlider = {
  slidesPerView: 1,
  spaceBetween: 0,
  centeredSlides: true,
  loop: true,

  keyboard: {
    enabled: true,
  },

  autoplay: {
    delay: 2500,
    disableOnInteraction: true
  },

  pagination: {
    el: '.swiper-pagination',
    dynamicBullets: true
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },

  breakpoints: {
    1024: {
      slidesPerView: 1,
      spaceBetween: 40
    },
    768: {
      slidesPerView: 5,
      spaceBetween: 30
    },
    640: {
      slidesPerView: 3,
      spaceBetween: 20
    },
    568: {
      slidesPerView: 1,
      spaceBetween: 10
    }
  }
}

export { homeSlider };
