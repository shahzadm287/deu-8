<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/email-compose', function () {
    return view('email.email-compose');
});
Route::get('/email-inbox', function () {
    return view('email.email-inbox');
});
Route::get('/email-read', function () {
    return view('email.email-read');
});
Route::get('/form-element', function () {
    return view('forms.form-element');
});
Route::get('/form-pickers', function () {
    return view('forms.form-pickers');
});
Route::get('/form-validation', function () {
    return view('forms.form-validation');
});

Route::get('/form-wizard', function () {
    return view('forms.form-wizard');
});
Route::get('/', function () {
    return view('index');
});

Route::get('/index-2', function () {
    return view('index-2');
});

Route::get('/my-wallet', function () {
    return view('my-wallet');
});
Route::get('/page-invoices', function () {
    return view('pages.page-invoices');
});

Route::get('/page-transaction', function () {
    return view('pages.page-transaction');
});

Route::get('/table-bootstrap-basic', function () {
    return view('table.table-bootstrap-basic');
});
Route::get('/table-datatable-basic', function () {
    return view('table.table-datatable-basic');
});
Route::get('/transaction-details', function () {
    return view('transaction-details');
});
Route::get('/uc-noui-slider', function () {
    return view('plugin.uc-noui-slider');
});

Route::get('/uc-sweetalert', function () {
    return view('plugin.uc-sweetalert');
});
Route::get('/uc-toastr', function () {
    return view('plugin.uc-toastr');
});
Route::get('/ui-accordion', function () {
    return view('boostrap.ui-accordion');
});
Route::get('/ui-alert', function () {
    return view('boostrap.ui-alert');
});
Route::get('/ui-badge', function () {
    return view('boostrap.ui-badge');
});

Route::get('/ui-button', function () {
    return view('boostrap.ui-button');
});

Route::get('/ui-button-group', function () {
    return view('boostrap.ui-button-group');
});
Route::get('/ui-card', function () {
    return view('boostrap.ui-card');
});
Route::get('/ui-carousel', function () {
    return view('boostrap.ui-carousel');
});
Route::get('/ui-dropdown', function () {
    return view('boostrap.ui-dropdown');
});
Route::get('/ui-grid', function () {
    return view('boostrap.ui-grid');
});
Route::get('/ui-list-group', function () {
    return view('boostrap.ui-list-group');
});
Route::get('/ui-modal', function () {
    return view('boostrap.ui-modal');
});
Route::get('/ui-pagination', function () {
    return view('boostrap.ui-pagination');
});

Route::get('/ui-popover', function () {
    return view('boostrap.ui-popover');
});

Route::get('/ui-progressbar', function () {
    return view('boostrap.ui-progressbar');
});

Route::get('/ui-tab', function () {
    return view('boostrap.ui-tab');
});

Route::get('/ui-typography', function () {
    return view('boostrap.ui-typography');
});
Route::get('/widget-basic', function () {
    return view('widget-basic');
});
Route::get('/page-login', function () {
    return view('auth.page-login');
});
Route::get('/page-register', function () {
    return view('auth.page-register');
});
Route::get('/uc-select2', function () {
    return view('plugin.uc-select2');
});
Route::get('/page-error', function () {
    return view('pages.page-error-404');
});
