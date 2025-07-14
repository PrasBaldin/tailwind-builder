module.exports = {
  content: ["./resources/**/*.blade.php", "./**/*.php", "./css/*.css"],
  theme: {
    extend: {},
  },
  plugins: [],
};

// npx tailwindcss -c tailwind.config.js -i ./css/input.css -o ./dist/output.css --watch --minify
