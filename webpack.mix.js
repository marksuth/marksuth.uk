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
                    'last 2 versions',
                    ' > 0.1% ',
                    'not ie <= 11',
                    'not dead',
                ]
            }
        }
   })