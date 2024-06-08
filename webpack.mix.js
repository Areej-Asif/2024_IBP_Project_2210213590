const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
mix.styles([
    'resources/theme/css/dashlite.css',
    'resources/theme/css/theme.css',
], 'public/css/theme.css')
mix.scripts([
    'resources/theme/js/bundle.js',
    'resources/theme/js/datatable-btns.js',
    'resources/theme/js/scripts.js',
], 'public/js/theme.js')
