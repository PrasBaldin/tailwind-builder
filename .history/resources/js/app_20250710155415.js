import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

// Animasi Loading
window.addEventListener("load", function () {
  const loader = document.getElementById("admin-loader");
  if (loader) {
    setTimeout(() => {
      loader.style.opacity = "0";
      loader.style.pointerEvents = "none";
      setTimeout(() => loader.remove(), 1000); // animasi fade out
    }, 250); // delay sebelum menghilangkan loader
  }
});

// Cek apakah browser yang dipakai EDGE atau bukan
document.addEventListener("DOMContentLoaded", function () {
  const isEdge = navigator.userAgent.includes("Edg");
  const wrapper = document.getElementById("edge-wrapper");
  if (wrapper) {
    wrapper.className = isEdge ? "edge" : "not-edge";
  }
});

// Parallax Hero
document.addEventListener("DOMContentLoaded", function () {
  const slides = document.querySelectorAll(".parallax-image");
  const titleEl = document.getElementById("heroTitle");
  const descEl = document.getElementById("heroDesc");
  const parallaxEl = document.getElementById("heroParallax");

  const titles = Array.from(slides).map((slide) => slide.dataset.title);
  const descs = Array.from(slides).map((slide) => slide.dataset.desc);

  let currentIndex = 0;
  let interval = null;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.style.opacity = i === index ? "1" : "0";
    });

    if (titleEl) titleEl.textContent = titles[index];
    if (descEl) descEl.textContent = descs[index];
    currentIndex = index;

    clearInterval(interval);
    startSlider();
  }

  function startSlider() {
    interval = setInterval(() => {
      currentIndex = (currentIndex + 1) % slides.length;
      showSlide(currentIndex);
    }, 7500);
  }

  window.showSlide = showSlide; // ✅ expose global function for Blade onclick

  // Auto-start & first render
  showSlide(0);
  startSlider();

  // Parallax effect
  window.addEventListener("scroll", () => {
    if (parallaxEl) {
      const scrollY = window.scrollY;
      const translateY = scrollY * 0.5;
      const scale = 1 + scrollY * 0.00005;
      parallaxEl.style.transform = `translateY(${translateY}px) scale(${scale})`;
    }
  });
});
