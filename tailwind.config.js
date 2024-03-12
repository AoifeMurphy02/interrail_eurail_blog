module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Kalam', 'sans-serif'],
      },
      
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
  }
}
