import domReady from '@roots/sage/client/dom-ready';
import '@scripts/modules/affinityUtils.js'
import 'bootstrap';


/**
 * Application entrypoint
 */
domReady(async () => {

  let test = $; // this somehow breaks jQuery if removed

  // Initiate Lenis
  import('./modules/lenis.js');

  //Handle changing banner color when scrolled
  changeTopBannerColor();
  window.onscroll = function(e) {
    changeTopBannerColor();
  }

  function changeTopBannerColor(){
    let banner = document.querySelector('header.banner')
    if(window.scrollY > 100){
      banner.classList.add('scrolled')
    } else {
      banner.classList.remove('scrolled')
    }
  }

  // Mobile navigation
  let navbar = document.getElementsByClassName('nav-primary')[0];
  let navbarToggle = document.getElementById('navbarToggle');

  navbarToggle.addEventListener("click", (e) => {
    navbarToggle.classList.toggle('is-active');
    navbar.classList.toggle('is-open');
  })


  // Filtering Portfolio
  let portfolioFilters = document.getElementById('portfolioFilters');
  if(portfolioFilters){
    import('./modules/filters.js');
  }
  
  let blog = document.querySelector('.blog');
  if(blog){
    import('./modules/posts-ajax.js');
  }

  let swiper = document.querySelector('.swiper-container');
  if(swiper){
    import('./modules/swiper.js');
  }

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
