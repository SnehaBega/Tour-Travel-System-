const images = document.querySelectorAll('.slider-image');
const navButtons = document.querySelectorAll('.slider-nav button');

let currentSlide = 0;

function showSlide(slideIndex) {
  images.forEach((image) => {
    image.style.display = 'none';
  });
  images[slideIndex].style.display = 'block';
}

function showNextSlide() {
  currentSlide++;
  if (currentSlide >= images.length) {
    currentSlide = 0;
  }
  showSlide(currentSlide);
}

// navButtons.forEach((button, index) => {
//   button.addEventListener('click', () => {
//     current
