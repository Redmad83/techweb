let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/infinity/css/base.css',
    'resources/assets/infinity/css/vendor.css',
    'resources/assets/infinity/css/main.css',

], 'public/assets/css/infinity.css');

mix.scripts([
    'resources/assets/infinity/js/modernizr.js',
    'resources/assets/infinity/js/pace.min.js',

], 'public/assets/js/infinityUp.js');

mix.scripts([
    'resources/assets/infinity/js/jquery-2.1.3.min.js',
    'resources/assets/infinity/js/plugins.js',
    'resources/assets/infinity/js/main.js',

], 'public/assets/js/infinityDown.js');
