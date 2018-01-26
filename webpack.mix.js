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

mix.js(['resources/assets/js/app.js',
    'resources/assets/js/jquery.js',
    'resources/assets/js/metisMenu.js',
    'resources/assets/js/sb-admin-2.js',
    'resources/assets/js/scripts.js'

     ],'public/js')

   .sass('resources/assets/sass/app.scss', 'public/css')
   .styles(['resources/assets/js/css/libs/blog-post.css',
       'resources/assets/js/css/libs/metisMenu.css',
       'resources/assets/js/css/libs/sb-admin-2.css',
       'resources/assets/js/css/libs/font-awesome.css'
   ], 'public/css/libs.css');
