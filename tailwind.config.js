/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
         'body':['Kanit', 'sans-serif'],
      },
      backgroundImage: {
        'hero-bgindex': "url('/public/assets/images/bg3.png')",
        'hero-bgindex2': "url('/public/assets/images/bg2.png')",
      },
      colors:{
        'herologo':'#F1D900',
        'footercolor':'#0A0027',
        'bgcard':'#0E0038'
      },
      boxShadow: {
        '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
      }
    },
  },
  plugins: [],
}

