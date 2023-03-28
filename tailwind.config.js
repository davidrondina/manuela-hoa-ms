/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        backgroundColor: ({ theme }) => ({
            // 'sidebar': defaultTheme.backgroundColor.bg-green-800,
            // 'btn': theme('theme.backgroundColor.bg-green-700'),
            'theme-green': 'rgb(22 101 52)',
            'theme-light-green': 'rgb(22 101 61)',
        }),
        fontFamily: {
            'karla': ['karla', 'sans-serif']
        },
        colors: {
            'regal-blue': '#243c5a',
            'theme-green': 'rgb(22 101 52)',
            'theme-light-green': 'rgb(22 101 61)',
        },
    },
  },
  plugins: [],
}
