module.exports = {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.js",
    "./resources/css/**/*.css",
  ],
  theme: {
    extend: {},
  },
  darkMode: "class",
  plugins: [],
};

// npx tailwindcss -c tailwind.config.js -i ./css/input.css -o ./dist/output.css --watch --minify
