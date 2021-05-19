const mix = require('laravel-mix');
mix.options({
    fileLoaderDirs:  {
        fonts: 'static/fonts'
    },
    processCssUrls: false,
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
});

mix.js('themes/cooper/resources/js/app.js', 'themes/cooper/static/js')
    .sass('themes/cooper/resources/sass/style.scss', 'themes/cooper/static/css/style.css')