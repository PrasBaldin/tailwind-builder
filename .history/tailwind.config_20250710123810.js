module.exports = {
  content: ["./resources/**/*.blade.php", "./resources/**/*.css", "./**/*.php"],
  theme: {
    extend: {},
  },
  darkMode: "class",
  plugins: [],
};

// npx tailwindcss -c tailwind.config.js -i ./css/input.css -o ./dist/output.css --watch --minify
