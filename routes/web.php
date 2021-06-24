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
    return view('email-compose');
});
Route::get('/email-inbox', function () {
    return view('email-inbox');
});
Route::get('/email-read', function () {
    return view('email-read');
});
Route::get('/form-element', function () {
    return view('form-element');
});
Route::get('/form-pickers', function () {
    return view('form-pickers');
});
Route::get('/form-validation', function () {
    return view('form-validation');
});

Route::get('/form-wizard', function () {
    return view('form-wizard');
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
    return view('page-invoices');
});

Route::get('/page-transaction', function () {
    return view('page-transaction');
});

Route::get('/table-bootstrap-basic', function () {
    return view('table-bootstrap-basic');
});
Route::get('/table-datatable-basic', function () {
    return view('table-datatable-basic');
});
Route::get('/transaction-details', function () {
    return view('transaction-details');
});
Route::get('/uc-noui-slider', function () {
    return view('uc-noui-slider');
});

Route::get('/uc-sweetalert', function () {
    return view('uc-sweetalert');
});
Route::get('/uc-toastr', function () {
    return view('uc-toastr');
});
Route::get('/ui-accordion', function () {
    return view('ui-accordion');
});
Route::get('/ui-alert', function () {
    return view('ui-alert');
});
Route::get('/ui-badge', function () {
    return view('ui-badge');
});

Route::get('/ui-button', function () {
    return view('ui-button');
});

Route::get('/ui-button-group', function () {
    return view('ui-button-group');
});
Route::get('/ui-card', function () {
    return view('ui-card');
});
Route::get('/ui-carousel', function () {
    return view('ui-carousel');
});
Route::get('/ui-dropdown', function () {
    return view('ui-dropdown');
});
Route::get('/ui-grid', function () {
    return view('ui-grid');
});
Route::get('/ui-list-group', function () {
    return view('ui-list-group');
});
Route::get('/ui-modal', function () {
    return view('ui-modal');
});
Route::get('/ui-pagination', function () {
    return view('ui-pagination');
});

Route::get('/ui-popover', function () {
    return view('ui-popover');
});

Route::get('/ui-progressbar', function () {
    return view('ui-progressbar');
});

Route::get('/ui-tab', function () {
    return view('ui-tab');
});

Route::get('/ui-typography', function () {
    return view('ui-typography');
});
Route::get('/widget-basic', function () {
    return view('widget-basic');
});
Route::get('/page-login', function () {
    return view('page-login');
});
Route::get('/page-register', function () {
    return view('page-register');
});
