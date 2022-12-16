/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '16px'
      },
    },
    fontFamily: {
      poppins: ['Poppins', 'sans-serif']
    },
    screens: {
      'android': '480px',      
      'tablet': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
      '3xl': '1920px',
    },
    extend: {
      
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('flowbite-typography'),
  ],
}
