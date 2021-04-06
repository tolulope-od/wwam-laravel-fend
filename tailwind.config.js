module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.jsx',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'wwam-blue': '#45b7d3',
        'wwam-pink': '#c0417f',
        'wwam-green': '#34cf95',
        'wwam-yellow': '#f3b82a',
        'wwam-black': '#272727',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('daisyui'),
  ],
}
