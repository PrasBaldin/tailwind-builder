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
