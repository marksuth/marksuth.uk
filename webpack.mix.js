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

mix.js('themes/cooper/resources/js/app.js', 'themes/cooper/static/js')
    .sass('themes/cooper/resources/sass/style.scss', 'themes/cooper/static/css/style.css')
    .options({
        autoprefixer: {
            options: {
                browsers: [
                    'Firefox >= 38',
                    'Chrome >= 41',
                    'Safari >= 9',
                    'ie 11',
                    'not dead',
                ]
            }
        }
   })