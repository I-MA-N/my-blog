/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./**/*.php"
  ],
  theme: {
    extend: {
      container: {
        center: true
      }
    },
    fontFamily: {
      'Vazir': 'Vazir',
      'OpenSans': 'OpenSans'
    }
  },
  plugins: [],
}

