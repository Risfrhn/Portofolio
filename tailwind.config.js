/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    container:{
      center:true,
      padding: '20px',
    },
    extend: {
      fontFamily: {
        custom: ['Fredoka'], // Menambahkan font kustom
        screens:{
          '2xl':'1320px',
        },
      },
      width: {
        'w-1\/2 ': '55%', // Ganti 'custom-width' dengan nama yang diinginkan
      },
    },
    
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

