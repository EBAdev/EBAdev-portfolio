/* eslint-disable no-undef */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        moonliteSolid: ['Moonlite Solid', 'sans-serif'],
        moonliteOutline: ['Moonlite Outline', 'sans-serif'],
      },
      animation: {
        'bounce-slow': 'bounce 3s ease-in-out infinite',
      },
    },
    gap: {
      8: '2rem',
    },
    container: {
      center: true,
      padding: '1rem',
    },
  },
  plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
}
