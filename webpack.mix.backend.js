const mix = require('laravel-mix')

mix
  .setPublicPath('public/backend/')
  .js('resources/js/admin/app.js', 'app.js')
  .sass('resources/sass/admin/app.scss', 'app.css')
  .options({
    processCssUrls: false
  })
  .webpackConfig({
    externals: {
      vue: 'Vue'
    }
  })
  .extract()

if (!mix.inProduction()) {
  // mix
  //   .webpackConfig({
  //     devtool: 'source-map'
  //   })
  //   .sourceMaps()
} else {
  mix.version()
}

mix.browserSync({
  proxy: 'localhost:8000',
  notify: false,
  ghostMode: false,
  files: [
    'app/**/*.php',
    'resources/views/**/*.php',
    'public/**/*.js',
    'public/**/*.css',
    'packages/laravel-helper/src/**/*.php'
  ]
})

mix.disableNotifications()
