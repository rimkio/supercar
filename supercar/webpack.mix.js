const mix = require('laravel-mix');
mix.setPublicPath('dist');
mix.setResourceRoot('../');
mix.autoload({
   jquery: ['$', 'jQuery', 'window.jQuery']
});
mix.copyDirectory('assets/images', 'dist/images');
mix.js('assets/js/app.js', 'dist/js')
   .sass('assets/scss/app.scss', 'dist/css')
   .extract()
   .version();
