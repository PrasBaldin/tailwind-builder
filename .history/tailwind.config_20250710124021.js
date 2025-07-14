module.exports = {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/css/**/*.css",
    "./resources/js/**/*.js",
  ],
  theme: {
    extend: {},
  },
  darkMode: "class",
  plugins: [],
};

// npx tailwindcss -c tailwind.config.js -i ./css/input.css -o ./dist/output.css --watch --minify
