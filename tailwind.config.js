/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/**.js',
    './resources/**/**.vue',
    './resources/**/**.php',
    './resources/**/**/**.js',
    './resources/**/**/**.vue',
    './resources/**/**/**/**.php',
    './resources/**/**/**/**.js',
    './resources/**/**/**/**.vue',
    './resources/**/**/**/**.php',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    // ...
  ],
}
