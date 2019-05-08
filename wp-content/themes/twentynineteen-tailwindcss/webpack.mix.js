let mix = require('laravel-mix')

mix.disableNotifications()
  .postCss('assets/css/style.css', '', [
    require('tailwindcss')(),
    require('postcss-nested')(),
  ])
  .browserSync({
    proxy: 'wordcamp2019.docksal',
    notify: false,
    files: [
      '**/*.php',
      'assets/css/**/*.css'
    ],
  })
