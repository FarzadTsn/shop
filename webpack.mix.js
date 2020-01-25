const mix = require('laravel-mix');

mix.autoload({
    jquery: ['$', 'window.jQuery',"jQuery","window.$","jquery","window.jquery"]
});
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

mix.js('resources/js/app.js', 'public/jsfront').
    js('resources/js/appdashboard.js', 'public/jsfront').
    sass('resources/sass/app.scss', 'public/cssfront').
    sass('resources/sass/appdashboard.scss', 'public/cssfront');
