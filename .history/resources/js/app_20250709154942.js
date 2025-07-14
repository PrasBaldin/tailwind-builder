import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

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
