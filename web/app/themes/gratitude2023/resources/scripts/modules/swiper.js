import Swiper from 'swiper';

let swiperContainer = document.querySelector('.swiper-container');
let sliderSettings = {
  slidesPerView: "auto",
  centeredSlides: true,
  spaceBetween: 10,
  loop: true,
// Responsive breakpoints
  breakpoints: {
    // when window width is >= 
    576: {
      centeredSlides: false,
      slidesPerView: 2,
      spaceBetween: 20
    },
    992: {
      centeredSlides: false,
      slidesPerView: swiperContainer.dataset.slides,
      spaceBetween: 40
    }
  }
}

if(swiperContainer.dataset.name == 'testimonials'){
  sliderSettings.breakpoints = {}
  sliderSettings.navigation = {                       
    nextEl: ".button-next",
    prevEl: ".button-prev",
    enabled: true, 
  }
  sliderSettings.pagination = {
    el: '.swiper-pagination',
    clickable: true, 
  }
  sliderSettings.autoplay = { delay: 5000, }                
}

const swiper = new Swiper(swiperContainer, sliderSettings);

if(swiperContainer.dataset.name == 'testimonials'){
  document.querySelector('.button-next').addEventListener("click", () => swiper.slideNext())
  document.querySelector('.button-prev').addEventListener("click", () => swiper.slidePrev())
}
