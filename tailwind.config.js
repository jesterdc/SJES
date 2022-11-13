/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    fontFamily:{
      'logo-text':['Manrope', 'sans-serif'],
      'nav-text':['Inter', 'sans-serif'],
      'bold-text':['Archivo', 'sans-serif'],
      'paragraph-text':['Quicksand', 'san-serif'],
      'title-text':['Poppins', 'sans-serif']
    },

    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}