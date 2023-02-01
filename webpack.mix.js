const mix = require('laravel-mix');

//Admin
//CSS
mix.sass('resources/assets/admin/scss/admin.scss', 'public/assets/admin/css')

//JS
    .js('resources/assets/admin/script/admin.js', 'public/assets/admin/script')

    .copy('resources/assets/admin/script/datatables-translates', 'public/assets/admin/script/datatables-translates')
    .copy('resources/assets/admin/libs/', 'public/assets/admin/libs/')


//Site
.copy('resources/assets/site/', 'public/assets/site/');
