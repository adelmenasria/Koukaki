// Parallax Hero
function parallaxHero() {
  const scrolled = window.scrollY;
  const video = document.querySelector('.banner-video');
  const logo = document.querySelector('.main-logo');

  video.style.transform = 'translateY(' + (scrolled * 0.5) + 'px)';
  logo.style.transform = 'translateY(' + (scrolled * 0.3) + 'px)';
}

window.addEventListener('scroll', parallaxHero);



// 3 Animations on scroll with IntersectionObserver API

// Fade-in apparition on scroll for all articles in #story section
let observerFadeIn = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('fade-in-visible');
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.4 });

document.querySelectorAll('.fade-in').forEach(element => {
  observerFadeIn.observe(element);
});


// Animation Clouds of #place
let observerClouds = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const clouds = document.querySelector('.clouds');
      clouds.style.transition = 'transform 4500ms';
      clouds.style.transform = 'translateX(-300px)';
    }
  });
}, { threshold: 1.0 });

const place = document.querySelector('#place');
observerClouds.observe(place);


// Animation Titles-reveal (word from up, one by one)
let observerTitles = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      let titleReveal = entry.target.querySelector('.title-reveal-container');
      if (!titleReveal.classList.contains('title-reveal')) {
        titleReveal.classList.add('title-reveal');
      }
      observerTitles.unobserve(entry.target);
    }
  });
}, { threshold: 0.6 });

const titlesAnimate = document.querySelectorAll('.title-reveal-scope');
titlesAnimate.forEach(titleAnimate => observerTitles.observe(titleAnimate));


// Swiper carousel for characters
const swiper = new Swiper('.swiper', {
  direction: 'horizontal',
  loop: false,
  slidesPerView: 3,
  effect: 'coverflow',
  coverflowEffect: {
    slideShadows: false,
    stretch: 0,
  },
});


// Menu
function toggleNav() {
  const overlay = document.getElementById('menu-overlay');
  const toggler = document.getElementById('navbar-toggler');

  overlay.classList.toggle('show');
  toggler.classList.toggle('is-opened'); 
}

document.getElementById('navbar-toggler').addEventListener('click', toggleNav);

// Close the menu when a link is clicked
const links = document.querySelectorAll('.nav-link');
links.forEach(link => link.addEventListener('click', toggleNav));



