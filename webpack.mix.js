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
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/errors.scss', 'public/css')
   .sass('resources/assets/sass/navigation.scss', 'public/css/navigation')
   .sass('resources/assets/sass/footer.scss', 'public/css/footer')
   .sass('resources/assets/sass/recipe.scss', 'public/css')
   .sass('resources/assets/sass/babys.scss', 'public/css')
   .sass('resources/assets/sass/nutrition.scss', 'public/css/nutrition')
   .sass('resources/assets/sass/eggs101.scss', 'public/css/eggs101');
