const { env } = require('minimist')(process.argv.slice(2))

// 後端
// npm run watch -- --env.mode=backend
// npm run production -- --env.mode=backend

// 前端 (默認)
// npm run watch -- --env.mode=frontend
// npm run production -- --env.mode=frontend

if (env && env.mode) {
  require(`${__dirname}/webpack.mix.${env.mode}.js`)
} else {
  require(`${__dirname}/webpack.mix.frontend.js`)
}
