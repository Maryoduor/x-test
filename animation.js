document.addEventListener("DOMContentLoaded", () => {
  const animatedEls = document.querySelectorAll('.fade-in, .slide-left, .slide-right, .zoom-in');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.2 });

  animatedEls.forEach(el => observer.observe(el));
});
