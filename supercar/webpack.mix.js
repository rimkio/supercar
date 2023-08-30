const mix = require('laravel-mix');
mix.setPublicPath('dist');
mix.setResourceRoot('../');
mix.autoload({
   jquery: ['$', 'jQuery', 'window.jQuery']
});
mix.copyDirectory('assets/images', 'dist/images');
mix.js('assets/js/main.js', 'dist/js-custom')
   .sass('assets/scss/main.scss', 'dist/css')
   .extract()
   .version();
