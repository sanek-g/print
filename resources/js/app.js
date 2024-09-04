// core version + navigation, pagination modules:
import Swiper from 'swiper';
// import { Autoplay, Navigation, Pagination } from 'swiper/modules';
import { Autoplay, Navigation } from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
// import 'swiper/css/pagination';

// init Swiper:
const swiper = new Swiper('.titleSwiper', {
   // configure Swiper to use modules
   modules: [Navigation],
  slidesPerView: 1,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  // centeredSlides: true,
  // autoplay: {
  //   delay: 5000,
  //   disableOnInteraction: false,
  // },
  loop: true,
  allowTouchMove:false,
 
});

// init Swiper:
const swiper2 = new Swiper('.contentSwiper', {
  // configure Swiper to use modules
  modules: [Autoplay],
 slidesPerView: 1,
 // centeredSlides: true,
 autoplay: {
   delay: 2500,
   disableOnInteraction: false,
 },
 loop: true,
 breakpoints: {
  1024: {
    slidesPerView: 2,
   
  },
},
});

// init Swiper:
const swiper3 = new Swiper('.mySwiper', {
  // configure Swiper to use modules
  modules: [Autoplay],
 slidesPerView: 2,
 // centeredSlides: true,
 autoplay: {
   delay: 2500,
   disableOnInteraction: false,
 },
 loop: true,

});


// document.addEventListener('DOMContentLoaded', function(){
//   const els = document.querySelectorAll('.is_loadet')
//   if(els.length){

//     els.forEach((el)=>{
//       el.classList.remove('is_loadet')
//     })

   
//   }
  
// })


const nav = document.getElementById('nav')
const triggerHeight = window.innerHeight - 10; // Höhe des Bildschirms
// let lastScrollTop = 0;

window.addEventListener('scroll', () => {

  let currentScroll = window.scrollY || document.documentElement.scrollTop;

  if(currentScroll > triggerHeight){
    // nav.classList.remove('hidden')
    nav.classList.add('show')
   
  } else if(currentScroll < triggerHeight){
    nav.classList.remove('show')
    // nav.classList.add('hidden')
  }
  
})

const arrow = document.getElementById('arrow')

arrow.addEventListener('click', function(arrow) {

  arrow.preventDefault();
  const targetId = this.getAttribute('href').substring(1);
  const targetElement = document.getElementById(targetId);
  const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY;
  const startPosition = window.scrollY;
  const distance = targetPosition - startPosition;
  const duration = 1000; // Dauer des Scrollens in Millisekunden
  let start = null;

  

  function step(timestamp) {
      if (!start) start = timestamp;
      const progress = timestamp - start;
      const easeInOutQuad = progress => progress < 0.5 ? 2 * progress * progress : -1 + (4 - 2 * progress) * progress;
      const scrollProgress = easeInOutQuad(progress / duration);
      window.scrollTo(0, startPosition + distance * scrollProgress);
      if (progress < duration) window.requestAnimationFrame(step);
  }

  window.requestAnimationFrame(step);
});


const openButton = document.getElementById('menu-open')
const closeButton = document.getElementById('menu-close')
const menu = document.getElementById('mobile-menu')


openButton.addEventListener('click', function() {  

  menu.classList.toggle('hide')
  
})

closeButton.addEventListener('click', function() {  

  menu.classList.toggle('hide')
 
})



