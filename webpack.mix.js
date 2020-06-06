const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/build');
mix.sass('resources/sass/app.scss', 'public/build');
mix.version();
