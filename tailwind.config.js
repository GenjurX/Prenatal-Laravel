/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue"],
  theme: {
   extend: {
      colors: {
        primary: '#E72B6F',
        secondary: '#789A40',
        section1bg: '#F7E0E1',
        grayfill: '#F7F7F7'
      },
    },
  },
  plugins: [],
}
