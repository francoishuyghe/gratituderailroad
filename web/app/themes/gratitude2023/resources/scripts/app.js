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
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
