const mix = require('laravel-mix')

mix.postCss('src/css/style.css', '', [
  require('tailwindcss')('./tailwind.config.js'),
  require('postcss-nested')(),
])

mix.browserSync({
  proxy: 'wordcamp2019.docksal',
  notify: false,
  files: [
    '**/*.php',
    'src/**/*.css'
  ],
})
