const mix = require('laravel-mix')

mix.postCss('src/css/style.css', '', [
  require('tailwindcss')(),
  require('postcss-nested')(),
])
