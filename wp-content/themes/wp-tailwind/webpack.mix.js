const mix = require('laravel-mix')

mix.postCss('src/css/style.css', '', [
  require('postcss-nested')(),
  require('tailwindcss')('./tailwind.config.js'),
])
