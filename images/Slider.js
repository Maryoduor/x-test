const slides = document.querySelectorAll('.slide');
const next = document.querySelector('.next');
const prev = document.querySelector('.prev');
const slider = document.querySelector('.slider-container');

let index = 0;

function showSlide(n) {
  index = (n + slides.length) % slides.length;
  slides.forEach((slide, i) => {
    slide.style.display = i === index ? 'block' : 'none';
  });
}

let auto = setInterval(() => showSlide(index + 1), 3000);
slides[currentIndex].classList.remove("active");
slides[nextIndex].classList.add("active");

next.addEventListener('click', () => {
  clearInterval(auto);
  showSlide(index + 1);
  auto = setInterval(() => showSlide(index + 1), 3000);
});

prev.addEventListener('click', () => {
  clearInterval(auto);
  showSlide(index - 1);
  auto = setInterval(() => showSlide(index + 1), 3000);
});

let startX = 0;
let endX = 0;

slider.addEventListener('touchstart', (e) => {
  startX = e.touches[0].clientX;
});

slider.addEventListener('touchend', (e) => {
  endX = e.changedTouches[0].clientX;
  handleSwipe();
});

function handleSwipe() {
  const diff = startX - endX;

  if (diff > swipeThreshold) {
    clearInterval(auto);
    showSlide(index + 1);
    auto = setInterval(() => showSlide(index + 1), 3000);
  } else if (diff < -swipeThreshold) {
    clearInterval(auto);
    showSlide(index - 1);
    auto = setInterval(() => showSlide(index + 1), 3000);
  }
}

showSlide(index);
