// const { Dropdown } = require('bootstrap');
const mix = require('laravel-mix');



mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/bootstrap/dist/js/bootstrap.js'
], 'public/js/all.js', './');

// });
mix.browserSync({
proxy:'appnew.test'

});

// if (mix.inProduction())
// {
//     mix.version();
// }