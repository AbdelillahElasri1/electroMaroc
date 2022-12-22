/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {backgroundImage: {
      'hero': "url('/assets/image/pexels-fauxels-3183132.jpg')",
      // 'footer-texture': "url('/img/footer-texture.png')",
    }},
  },
  plugins: [],
}

