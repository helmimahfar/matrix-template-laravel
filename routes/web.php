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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('template.dashboard.index');
});
Route::get('/charts', function () {
    return view('template.charts.index');
});
Route::get('/widgets', function () {
    return view('template.widgets.index');
});
Route::get('/tables', function () {
    return view('template.tables.index');
});
Route::get('/full-width', function () {
    return view('template.full-width.index');
});
Route::get('/form-basic', function () {
    return view('template.forms.form-basic.index');
});
Route::get('/form-wizard', function () {
    return view('template.forms.form-wizard.index');
});
Route::get('/buttons', function () {
    return view('template.buttons.index');
});
Route::get('/material-icons', function () {
    return view('template.icons.material-icons.index');
});
Route::get('/font-awesome-icons', function () {
    return view('template.icons.font-awesome-icons.index');
});
Route::get('/elements', function () {
    return view('template.elements.index');
});
Route::get('/dashboard2', function () {
    return view('template.addons.dashboard2.index');
});
Route::get('/gallery', function () {
    return view('template.addons.gallery.index');
});
Route::get('/calendar', function () {
    return view('template.addons.calendar.index');
});
Route::get('/invoice', function () {
    return view('template.addons.invoice.index');
});
Route::get('/chat-option', function () {
    return view('template.addons.chat-option.index');
});
Route::get('/login', function () {
    return view('template.authentication.login.index');
});
Route::get('/register', function () {
    return view('template.authentication.register.index');
});
Route::get('/error403', function () {
    return view('template.errors.error403.index');
});
Route::get('/error404', function () {
    return view('template.errors.error404.index');
});
Route::get('/error405', function () {
    return view('template.errors.error405.index');
});
Route::get('/error500', function () {
    return view('template.errors.error500.index');
});
