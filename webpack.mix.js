// const { Dropdown } = require('bootstrap');
let mix = require('laravel-mix');



mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/bootstrap/dist/js/bootstrap.js'
], 'public/js/app.js', './');

// });
mix.browserSync({
proxy:'appnew.test'

});

if (mix.inProduction())
{
    mix.version();
}