const mix = require('laravel-mix')

mix.postCss('src/css/style.css', '', [
  require('tailwindcss')('./tailwind.config.js'),
  require('postcss-nested')(),
])
