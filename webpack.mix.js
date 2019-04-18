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

mix.options({
    processCssUrls: false
});

// Copy static assets
mix.copy('node_modules/font-awesome/fonts', 'public/fonts');

// Compile vendor styles
mix.styles([
    './node_modules/font-awesome/css/font-awesome.css'
], 'public/css/vendor.css');

// Compile custom styles/scripts
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
