const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/backend/js/app.js', 'public/backend/js').postCss('resources/assets/backend/css/app.css', 'public/backend/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
])
.combine([
    'node_modules/admin-lte/plugins/jquery/jquery.min.js',
    'node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'node_modules/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
    'node_modules/admin-lte/plugins/jquery-mousewheel/jquery.mousewheel.js',
    'node_modules/admin-lte/plugins/raphael/raphael.min.js',
    'node_modules/admin-lte/plugins/jquery-mapael/jquery.mapael.min.js',
    'node_modules/admin-lte/plugins/jquery-mapael/maps/usa_states.min.js',
    'node_modules/admin-lte/plugins/chart.js/Chart.min.js',
    'node_modules/admin-lte/plugins/datatables/jquery.dataTables.min.js',
    'node_modules/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js',
    'node_modules/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js',
    'node_modules/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js',
    'node_modules/admin-lte/plugins/select2/js/select2.full.min.js',
    'node_modules/admin-lte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js',
    'node_modules/admin-lte/plugins/moment/moment.min.js',
    'node_modules/admin-lte/plugins/inputmask/jquery.inputmask.min.js',
    'node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js',
    'node_modules/admin-lte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js',
    'node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
    'node_modules/admin-lte/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
    'node_modules/admin-lte/plugins/toastr/toastr.min.js',
    'node_modules/tinymce/tinymce.min.js',
    'node_modules/pikaday/pikaday.js',
    'node_modules/pikaday/plugins/pikaday.jquery.js',
    'node_modules/admin-lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js',
    'node_modules/admin-lte/dist/js/adminlte.min.js',
], 'public/backend/js/vendor.js')
.copyDirectory('./node_modules/admin-lte/plugins/fontawesome-free/webfonts', './public/backend/webfonts')
.copyDirectory('./node_modules/tinymce/themes', './public/backend/js/themes')
.copyDirectory('./node_modules/tinymce/icons', './public/backend/js/icons')
.copyDirectory('./node_modules/tinymce/skins', './public/backend/js/skins')
.copyDirectory('./node_modules/tinymce/plugins', './public/backend/js/plugins')
.copyDirectory('./node_modules/admin-lte/dist/img', './public/backend/img')
.options({
    processCssUrls: false
})
.version()
.browserSync({
    proxy: 'http://127.0.0.1:8000'
});
