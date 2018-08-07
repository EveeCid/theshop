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

mix.scripts([
            'resources/assets/bower_components/jquery/dist/jquery.min.js',
            'resources/assets/bower_components/bootstrap/dist/js/bootstrap.min.js',
            'resources/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
            'resources/assets/bower_components/fastclick/lib/fastclick.js',
            'resources/assets/js/adminlte.min.js',
            'resources/assets/js/demo.js',
        ],'public/js/guest.js')
    .sass('resources/assets/sass/guest.scss', 'public/css/guest.css');

