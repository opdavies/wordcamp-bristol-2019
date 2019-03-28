let mix = require('laravel-mix')

mix.disableNotifications()
  .postCss('src/css/style.css', '', [
    require('tailwindcss')('./tailwind.config.js'),
    require('postcss-nested')(),
  ])
  .browserSync({
    proxy: 'wordcamp2019.docksal',
    notify: false,
    files: [
      '**/*.php',
      'src/css/**/*.css'
    ],
  })
