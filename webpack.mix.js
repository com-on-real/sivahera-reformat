const mix = require('laravel-mix');


mix
//  .combine(['resources/sass/theme/*'], 'public/css/theme.css')
//  .combine(['resources/js/theme/*'], 'public/js/theme.js')
    .sass('resources/sass/main.sass', 'public/css/main.css')
    .copyDirectory('resources/js/theme/', 'public/js')
    .copyDirectory('resources/sass/theme/', 'public/css');

if (mix.inProduction()) {
    mix.version();
}
//  .copyDirectory('resources/img', 'public/img');
