const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

const env = process.env.NODE_ENV;

mix.js('resources/js/app.js', 'public/build');
mix.sass('resources/sass/app.scss', 'public/build')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .purgeCss({
        enabled: env === 'production',
        extensions: ['php'],
        globs: [
            path.join(__dirname, 'resources/views/**/*.blade.php'),
        ]
});
mix.version();
