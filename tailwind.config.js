module.exports = {
    purge: [

        './resources/**/*.blade.php',

        './resources/**/*.js',

        './resources/**/*.vue',

      ],
    corePlugins: {
        container: false,
    },
  darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
    },
  variants: {
        extend: {},
  },
  plugins: [],
}
