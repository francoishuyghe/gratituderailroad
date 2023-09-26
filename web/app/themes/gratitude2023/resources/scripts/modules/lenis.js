import Lenis from '@studio-freight/lenis'
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger.js';

gsap.registerPlugin(ScrollTrigger);
const lenis = new Lenis({
    smooth: true,
  })

  function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
  }

  requestAnimationFrame(raf)

  //Manifesto
  gsap.timeline({
    scrollTrigger: {
      trigger: '#manifesto',
      start: 'bottom bottom',
      end: 'bottom center',
      scrub: true,
  },
  })
  .to('#manifesto h1', {
    opacity: 0,
  })

  // Stacked illustrations
  const stackedIllustrations = document.querySelectorAll('.wp-block-image.stacked')
    stackedIllustrations.forEach(stack => {
      
        gsap.timeline({
          scrollTrigger: {
            trigger: stack,
            start: 'top bottom',
            end: 'top top',
            scrub: true,
        },
        })
        .to(stack, {
          ease: 'none',
          '--movement': 25,
          y: -50,
        })
    
      });

      // Post Cards
      ScrollTrigger.batch('.post-card', {
        onEnter: elements => {
          gsap.from(elements, {
            y: 60,
            stagger: 0.15
          });
        },
        start: 'top bottom',
        end: 'top center',
        scrub: true,
      });