let mix = require('laravel-mix')

mix.disableNotifications()
  .postCss('assets/css/main.css', 'style.css', [
    require('tailwindcss')(),
    require('postcss-nested')(),
  ])
  .browserSync({
    proxy: 'wordcamp2019.docksal',
    notify: false,
    open: false,
    files: [
      '**/*.php',
      {
        match: 'style.css',
        fn: function (event, file) {
          this.reload()
        }
      }
    ]
  })
