const mix = require('laravel-mix')

mix
  .setPublicPath('public/frontend/')
  .js(['resources/js/app/app.js', 'resources/js/app/main.js'], 'app.js')
  .sass('resources/sass/app/app.scss', 'app.css')
  .options({
    processCssUrls: false
  })
  .extract()

if (!mix.inProduction()) {
  mix
    .webpackConfig({
      devtool: 'source-map'
    })
    .sourceMaps()
} else {
  mix.version()
}

// mix.browserSync({
//   proxy: 'localhost:8000',
//   notify: false,
//   ghostMode: false,
//   files: [
//     'app/**/*.php',
//     'resources/views/**/*.php',
//     'public/**/*.js',
//     'public/**/*.css'
//   ]
// })

// mix.disableNotifications()
