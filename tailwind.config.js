/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    container:{
      center: true,
    }
  },
  plugins: [
    require("daisyui"),
    require("tailwindcss-animate"),
  ],
}
