import './bootstrap';

import Alpine from 'alpinejs';

import $ from 'jquery';


window.Alpine = Alpine;

Alpine.start();

const menuToggle = document.getElementById('menuToggle');

menuToggle.addEventListener('click', () => {
    const menu = document.getElementById('nav');
    menu.classList.remove('closure');
    menu.classList.add('entry');
    menu.style.display = "flex";
    menuToggle.style.display = "none";


})

$('.close').click(() => {
    $('nav').hide();
    $('#menuToggle').show();
} );

const swiper = new Swiper('.swiper-container', {
  slidesPerView: 2,
  spaceBetween: 10,
  centeredSlides: true,
  loop: false,
  autoplay: {
      delay: 5000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
  },
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
  pagination: {
      el: '.swiper-pagination',
      clickable: true,
  },
  effect: 'coverflow',
  coverflowEffect:{ scale: 0.9, 
    depth:200,
    rotate:15,
    stretch:80, 
  },
  breakpoints:{ 767: {slidesPerView: 2 }, 
    1024: {slidesPerView: 2 }, 
  },
});

  
  // Audio Controls
  const audio = document.getElementById('audio');
  const playPauseBtn = document.getElementById('play-pause');
  const progressBar = document.getElementById('progress-bar');
  const volumeSlider = document.getElementById('volume-slider');
  const volumeUp = document.getElementById('volume-up');
  const volumeDown = document.getElementById('volume-down');
  
  let currentAudio = null;
  
  // Load and Play Track
  const loadTrack = (index) => {
    const slide = swiper.slides[index];
    const audioSrc = slide.getAttribute('data-audio');
    audio.src = audioSrc;
    audio.play();
    playPauseBtn.textContent = 'Pause';
    currentAudio = slide;
  };
  
  // Sync Swiper and Audio
  swiper.on('slideChange', () => {
    loadTrack(swiper.activeIndex);
  });
  
  // Play/Pause
  playPauseBtn.addEventListener('click', () => {
    if (audio.paused) {
      audio.play();
      playPauseBtn.textContent = 'Pause';
    } else {
      audio.pause();
      playPauseBtn.textContent = 'Play';
    }
  });
  
  // Update Progress Bar
  audio.addEventListener('timeupdate', () => {
    progressBar.value = (audio.currentTime / audio.duration) * 100;
  });
  
  progressBar.addEventListener('input', (e) => {
    audio.currentTime = (e.target.value / 100) * audio.duration;
  });
  
  // Volume Controls
  volumeSlider.addEventListener('input', (e) => {
    audio.volume = e.target.value;
  });
  
  volumeUp.addEventListener('click', () => {
    audio.volume = Math.min(audio.volume + 0.1, 1);
    volumeSlider.value = audio.volume;
  });
  
  volumeDown.addEventListener('click', () => {
    audio.volume = Math.max(audio.volume - 0.1, 0);
    volumeSlider.value = audio.volume;
  });