const mix = require('laravel-mix');

require('laravel-mix-artisan-serve');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/pages/welcome.js', 'public/js/pages')
    .sass('resources/sass/app.scss', 'public/css')
    .copy('resources/fonts', 'public/fonts')
    .sourceMaps()
    .serve();
