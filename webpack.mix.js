const mix = require('laravel-mix');

//  mix.js('resources/js/app.js', 'public/js')
//  .js('resources/js/bootstrap.js', 'public/js')
//  .sass('resources/sass/app.scss', 'public/css')
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
