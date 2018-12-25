// vue.config.js
// refer to https://cli.vuejs.org/config/#vue-config-js

module.exports = {

  // proxy API requests during development
  devServer: {
    proxy: {
      '/pages': {target: 'http://test-laravel.local'}
    },
    open: true,
    clientLogLevel: 'info'
  },

  // output built static files to Laravel's public dir.
  // note the "build" script in package.json needs to be modified as well.
  outputDir: '../dist',

  // modify the location of the generated HTML file.
  // make sure to do this only in production.
  indexPath: process.env.NODE_ENV === 'production'
    // replace this to wherever your actual file should go.
    // This is important as the versioned asset files are refered
    // by every newly gend file
    ? '../resources/views/spa.blade.php'
    : 'index.html'

}
