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
        'hero-bgindex': "url('/storage/images/bg3.webp')",
        'hero-bgindex2': "url('/public/assets/images/bg2.png')",
      },
      colors:{
        'herologo':'#fec200',
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

