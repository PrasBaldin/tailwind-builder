module.exports = {
  content: ["./resources/**/*.blade.php", "./**/*.php"],
  theme: {
    extend: {},
  },
  plugins: [],
};

// npx tailwindcss -c tailwind.config.js -i ./resources/assets/css/app.css -o ./public/css/app.css --watch
