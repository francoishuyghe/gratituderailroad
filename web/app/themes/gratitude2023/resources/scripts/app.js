import domReady from '@roots/sage/client/dom-ready';
import 'bootstrap';

/**
 * Application entrypoint
 */
domReady(async () => {

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
    if(navbarToggle.classList.contains('collapsed')){
      navbarToggle.classList.add('expanded');
      navbarToggle.classList.remove('collapsed');
      navbar.classList.toggle('--open');
      document.body.classList.toggle('--fixed');
    } else {
      navbarToggle.classList.remove('expanded');
      navbarToggle.classList.add('collapsed');
      navbar.classList.toggle('--open');
      document.body.classList.toggle('--fixed');
    }
  })


  // Filtering Portfolio
  let portfolioFilters = document.getElementById('portfolioFilters');
  if(portfolioFilters){
    import('./modules/filters.js');
  }

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
