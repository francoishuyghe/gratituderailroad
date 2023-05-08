import Swiper from 'swiper';

let swiperContainer = document.querySelector('.swiper-container');

const swiper = new Swiper(swiperContainer, {
    slidesPerView: 1,
    spaceBetween: 10,
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    // when window width is >= 640px
    992: {
      slidesPerView: swiperContainer.dataset.slides,
      spaceBetween: 40
    }
  }
});