document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll(".slider .slide");
  const prevBtn = document.querySelector(".prev");
  const nextBtn = document.querySelector(".next");
  const sliderContainer = document.querySelector(".slider-container");

  if (slides.length === 0 || !prevBtn || !nextBtn || !sliderContainer) {
    console.error("Missing elements in the DOM.");
    return;
  }

  let currentIndex = 0;
  const intervalTime = 3000;
  let slideInterval;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.toggle("active", i === index);
    });
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    showSlide(currentIndex);
  }

  function startAutoSlide() {
    slideInterval = setInterval(nextSlide, intervalTime);
  }

  function stopAutoSlide() {
    clearInterval(slideInterval);
  }

  showSlide(currentIndex);
  startAutoSlide();

  nextBtn.addEventListener("click", () => {
    nextSlide();
    stopAutoSlide();
    startAutoSlide();
  });

  prevBtn.addEventListener("click", () => {
    prevSlide();
    stopAutoSlide();
    startAutoSlide();
  });

  sliderContainer.addEventListener("mouseenter", stopAutoSlide);
  sliderContainer.addEventListener("mouseleave", startAutoSlide);
});

document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll(".testimonial-slide");
  const dotsContainer = document.querySelector(".slider-dots");
  let currentIndex = 0;
  const intervalTime = 4000;
  let slideInterval;
  slides.forEach((_, i) => {
    const dot = document.createElement("div");
    dot.classList.add("dot");
    if (i === 0) dot.classList.add("active");
    dot.addEventListener("click", () => showSlide(i));
    dotsContainer.appendChild(dot);
  });

  const dots = document.querySelectorAll(".dot");

  function showSlide(index) {
    slides.forEach(slide => slide.classList.remove("active"));
    dots.forEach(dot => dot.classList.remove("active"));
    slides[index].classList.add("active");
    dots[index].classList.add("active");
    currentIndex = index;
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
  }

  function startSlideShow() {
    slideInterval = setInterval(nextSlide, intervalTime);
  }

  function stopSlideShow() {
    clearInterval(slideInterval);
  }

  // Initialize
  showSlide(currentIndex);
  startSlideShow();

  const testimonialSection = document.querySelector(".testimonials");
  testimonialSection.addEventListener("mouseenter", stopSlideShow);
  testimonialSection.addEventListener("mouseleave", startSlideShow);
});
