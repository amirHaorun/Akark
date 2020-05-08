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
    .js('resources/js/aos.js', 'public/js')
    .js('resources/js/bootstrap-datepicker.min.js', 'public/js')
    .js('resources/js/circleaudioplayer.js', 'public/js')
    .js('resources/js/jquery.countdown.min.js', 'public/js')
    .js('resources/js/jquery.magnific-popup.min.js', 'public/js')
    .js('resources/js/jquery.stellar.min.js', 'public/js')
    .js('resources/js/jquery-3.3.1.min.js', 'public/js')
    .js('resources/js/jquery-migrate-3.0.1.min.js', 'public/js')
    .js('resources/js/jquery-ui.js', 'public/js')
    .js('resources/js/main.js', 'public/js')
    .js('resources/js/mediaelement-and-player.min.js', 'public/js')
    .js('resources/js/owl.carousel.min', 'public/js')
    .js('resources/js/player.js', 'public/js')
    .js('resources/js/popper.min.js', 'public/js')
    .js('resources/js/slick.min.js', 'public/js');

