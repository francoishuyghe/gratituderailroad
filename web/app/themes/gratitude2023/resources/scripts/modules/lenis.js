import Lenis from '@studio-freight/lenis'
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger.js';

gsap.registerPlugin(ScrollTrigger);

// Only smooth scroll on desktop
if( window.innerHeight > 800 ){
  const lenis = new Lenis({
    smooth: true,
  })
  
  function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
  }
  
  requestAnimationFrame(raf)
}

  //Manifesto
  gsap.timeline({
    scrollTrigger: {
      trigger: '#manifesto',
      start: 'top top',
      end: 'bottom top',
      scrub: true,
  },
  })
  .to('#manifesto h1', {
    opacity: 0,
  })

  // Stacked illustrations
  const stackedIllustrations = document.querySelectorAll('.wp-block-image.stacked')

  let mm = gsap.matchMedia(),
  breakPoint = 800;

  mm.add({

    // set up any number of arbitrarily-named conditions. The function below will be called when ANY of them match.
    isDesktop: `(min-width: ${breakPoint}px)`,
    isMobile: `(max-width: ${breakPoint - 1}px)`,

  }, (context) => {

    // context.conditions has a boolean property for each condition defined above indicating if it's matched or not.
    let { isDesktop, isMobile } = context.conditions;

    stackedIllustrations.forEach(stack => {
      
      gsap.timeline({
        scrollTrigger: {
          trigger: stack,
          start: 'top bottom',
          end: 'top center',
          scrub: true,
      },
      })
      .from(stack, {
        y: isDesktop ? 50 : 24,
      })
      .to(stack, {
        ease: 'none',
        '--movement': isDesktop? 25 : 12,
        y: 0,
      })
  
    });

    // Post Cards
    ScrollTrigger.batch('.wp-block-latest-news .post-card', {
      onEnter: elements => {
        gsap.from(elements, {
          y: isDesktop ? 50 : 20,
          stagger: 0.15
        });
      },
      start: 'top bottom',
      end: 'top center',
      scrub: true,
    });

  }); 
    
