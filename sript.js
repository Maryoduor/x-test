const slides = document.querySelectorAll('.slider img');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
const dots = document.querySelectorAll('.slider-dots span');
let index = 0;
let slideInterval;

function showSlide(i) {
    slides.forEach((s,j)=>s.classList.toggle('active', j===i));
    dots.forEach((d,j)=>d.classList.toggle('active', j===i));
    index = i;
}
prev.addEventListener('click', ()=>showSlide((index-1+slides.length)%slides.length));
next.addEventListener('click', ()=>showSlide((index+1)%slides.length));
dots.forEach(dot => dot.addEventListener('click', ()=>showSlide(parseInt(dot.dataset.index))));
function startSlider(){ slideInterval = setInterval(()=>showSlide((index+1)%slides.length), 3000);}
function stopSlider(){ clearInterval(slideInterval);}
document.querySelector('.slider-container').addEventListener('mouseenter', stopSlider);
document.querySelector('.slider-container').addEventListener('mouseleave', startSlider);
startSlider();

const tSlides = document.querySelectorAll('.testimonial-slide');
const tDots = document.querySelectorAll('.testimonial-dots span');
let tIndex = 0;
let tInterval;
function showTestimonial(i){
    tSlides.forEach((s,j)=>s.classList.toggle('active', j===i));
    tDots.forEach((d,j)=>d.classList.toggle('active', j===i));
    tIndex = i;
}
tDots.forEach(dot=>dot.addEventListener('click', ()=>showTestimonial(parseInt(dot.dataset.index))));
function startTestimonial(){ tInterval = setInterval(()=>showTestimonial((tIndex+1)%tSlides.length), 4000);}
function stopTestimonial(){ clearInterval(tInterval);}
document.querySelector('.testimonial-container').addEventListener('mouseenter', stopTestimonial);
document.querySelector('.testimonial-container').addEventListener('mouseleave', startTestimonial);
startTestimonial();

function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return rect.top <= window.innerHeight && rect.bottom >= 0;
}
function scrollAnimations() {
    const elements = document.querySelectorAll('.fade-in');
    elements.forEach(el => {
        if(isInViewport(el)) el.classList.add('visible');
    });
}
window.addEventListener('scroll', scrollAnimations);
window.addEventListener('load', scrollAnimations);

const imgSlides = document.querySelectorAll(".slider img");
const imgPrev = document.querySelector(".slider-container .prev");
const imgNext = document.querySelector(".slider-container .next");
const imgDots = document.querySelectorAll(".slider-dots span");
let imgIndex = 0;
let imgInterval;

function showImgSlide(index) {
    imgSlides.forEach((s,i) => s.classList.toggle('active', i===index));
    imgDots.forEach((d,i) => d.classList.toggle('active', i===index));
    imgIndex = index;
}
imgNext.addEventListener("click", ()=>showImgSlide((imgIndex+1)%imgSlides.length));
imgPrev.addEventListener("click", ()=>showImgSlide((imgIndex-1+imgSlides.length)%imgSlides.length));
imgDots.forEach(dot => dot.addEventListener("click", ()=>showImgSlide(parseInt(dot.dataset.index))));
function startImgSlider() { imgInterval = setInterval(()=>showImgSlide((imgIndex+1)%imgSlides.length), 3000); }
function stopImgSlider() { clearInterval(imgInterval); }
document.querySelector(".slider-container").addEventListener("mouseenter", stopImgSlider);
document.querySelector(".slider-container").addEventListener("mouseleave", startImgSlider);
startImgSlider();




function showTestimonial(index) {
    tSlides.forEach((s,i) => s.classList.toggle('active', i===index));
    tDots.forEach((d,i) => d.classList.toggle('active', i===index));
    tIndex = index;
}
tDots.forEach(dot => dot.addEventListener("click", ()=>showTestimonial(parseInt(dot.dataset.index))));
function startTestimonialSlider() { tInterval = setInterval(()=>showTestimonial((tIndex+1)%tSlides.length), 4000); }
function stopTestimonialSlider() { clearInterval(tInterval); }
document.querySelector(".testimonial-container").addEventListener("mouseenter", stopTestimonialSlider);
document.querySelector(".testimonial-container").addEventListener("mouseleave", startTestimonialSlider);
startTestimonialSlider();
function scrollAnimations() {
    const elements = document.querySelectorAll('.fade-in, .team-member');
    elements.forEach((el, index) => {
        if (isInViewport(el) && !el.classList.contains('visible')) {
            setTimeout(() => {
                el.classList.add('visible');
            }, index * 150); 
        }
    });
}
window.addEventListener('scroll', scrollAnimations);
window.addEventListener('load', scrollAnimations);
document.addEventListener("DOMContentLoaded", () => {
  const fadeElements = document.querySelectorAll(".fade-in");

  function reveal() {
    fadeElements.forEach(el => {
      const position = el.getBoundingClientRect().top;
      if (position < window.innerHeight - 100) {
        el.classList.add("show");
      }
    });
  }

  window.addEventListener("scroll", reveal);
  reveal();
});

document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll(".fade-in");

  const reveal = () => {
    const windowHeight = window.innerHeight;

    elements.forEach(el => {
      const position = el.getBoundingClientRect().top;
      if (position < windowHeight - 100) {
        el.classList.add("active");
      }
    });
  };

  window.addEventListener("scroll", reveal);
  reveal();
});
