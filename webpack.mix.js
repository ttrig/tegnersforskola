const mix = require('laravel-mix');

mix.setPublicPath('public')
    .js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])

if (mix.inProduction()) {
    mix.version()
} else {
    mix.sourceMaps()
    mix.browserSync({
        ui: false,
        proxy: '127.0.0.1:8000',
        open: false,
        notify: false,
    })
}
