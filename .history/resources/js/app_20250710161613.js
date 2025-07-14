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

// |
// |
// |
// | Parallax Hero
// |
function showSlide(index) {
  // Will be initialized below
}

// Make sure it's attached early
window.showSlide = showSlide;

document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll(".parallax-image");
  const titles = Array.from(slides).map((slide) => slide.dataset.title);
  const descs = Array.from(slides).map((slide) => slide.dataset.desc);
  const titleEl = document.getElementById("heroTitle");
  const descEl = document.getElementById("heroDesc");
  const parallaxEl = document.getElementById("heroParallax");
  let currentIndex = 0;
  let interval = null;

  window.showSlide = function (index) {
    slides.forEach((slide, i) => {
      slide.style.opacity = i === index ? "1" : "0";
    });

    if (titleEl) titleEl.textContent = titles[index];
    if (descEl) descEl.textContent = descs[index];
    currentIndex = index;

    const navDots = document.querySelectorAll(".hero-nav-dot");
    navDots.forEach((dot, i) => {
      dot.classList.remove("bg-sky-500", "bg-gray-300");
      dot.classList.add(i === index ? "bg-sky-500" : "bg-gray-300");
    });

    clearInterval(interval);
    startSlider();
  };

  function startSlider() {
    interval = setInterval(() => {
      currentIndex = (currentIndex + 1) % slides.length;
      showSlide(currentIndex);
    }, 7500);
  }

  showSlide(0);
  startSlider();

  window.addEventListener("scroll", () => {
    if (parallaxEl) {
      const scrollY = window.scrollY;
      parallaxEl.style.transform = `translateY(${scrollY * 0.5}px) scale(${
        1 + scrollY * 0.00005
      })`;
    }
  });
});
