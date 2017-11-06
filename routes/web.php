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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController')->name('dashboard');

// Route::get('/perusahaan', 'PerusahaanController@index')->name('perusahaan.index');

/* Dinas */
Route::resource('dinas', 'DinasController');
Route::get('/dinas-data', 'DinasController@data')->name('dinas.data');
Route::get('/dinas-form/{id}', 'DinasController@form')->name('dinas.form');
Route::get('/dinas-status/{id}/{st}', 'DinasController@status')->name('dinas.status');
/* User */
Route::resource('user', 'UserController');
Route::get('/user-data', 'UserController@data')->name('user.data');
Route::get('/user-form/{id}', 'UserController@form')->name('user.form');
Route::get('/user-status/{id}/{st}', 'UserController@status')->name('user.status');
/* Perusahaan */
Route::resource('perusahaan', 'PerusahaanController');
Route::get('/perusahaan-data', 'PerusahaanController@data')->name('perusahaan.data');
Route::get('/perusahaan-form/{id}', 'PerusahaanController@form')->name('perusahaan.form');
Route::get('/perusahaan-status/{id}/{st}', 'PerusahaanController@status')->name('perusahaan.status');
// Tenaga Ahli
Route::resource('tenagaahli', 'TenagaahliController');
Route::get('/tenagaahli-data', 'TenagaahliController@data')->name('tenagaahli.data');
Route::get('/tenagaahli-form/{id}', 'TenagaahliController@form')->name('tenagaahli.form');
Route::get('/tenagaahli-status/{id}/{st}', 'TenagaahliController@status')->name('tenagaahli.status');

