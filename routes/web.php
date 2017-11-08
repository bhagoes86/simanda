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

Route::get('/dashboard', 'DashboardController')->name('dashboard')->middleware('auth');

Route::post('/logout','UserController@performLogout');

/* Dinas */
Route::resource('dinas', 'DinasController');
Route::get('/dinas-data', 'DinasController@data')->name('dinas.data')->middleware('auth');
Route::get('/dinas-form/{id}', 'DinasController@form')->name('dinas.form')->middleware('auth');
Route::get('/dinas-status/{id}/{st}', 'DinasController@status')->name('dinas.status')->middleware('auth');

/* User */
Route::resource('user', 'UserController');
Route::get('/user-data', 'UserController@data')->name('user.data')->middleware('auth');
Route::get('/user-form/{id}', 'UserController@form')->name('user.form')->middleware('auth');
Route::get('/user-status/{id}/{st}', 'UserController@status')->name('user.status')->middleware('auth');

/* Perusahaan */
Route::resource('perusahaan', 'PerusahaanController');
Route::get('/perusahaan-data', 'PerusahaanController@data')->name('perusahaan.data')->middleware('auth');
Route::get('/perusahaan-form/{id}', 'PerusahaanController@form')->name('perusahaan.form')->middleware('auth');
Route::get('/perusahaan-status/{id}/{st}', 'PerusahaanController@status')->name('perusahaan.status')->middleware('auth');

// Tenaga Ahli
Route::resource('tenagaahli', 'TenagaahliController');
Route::get('/tenagaahli-data', 'TenagaahliController@data')->name('tenagaahli.data')->middleware('auth');
Route::get('/tenagaahli-form/{id}', 'TenagaahliController@form')->name('tenagaahli.form')->middleware('auth');
Route::get('/tenagaahli-status/{id}/{st}', 'TenagaahliController@status')->name('tenagaahli.status')->middleware('auth');

// POKJA
Route::resource('pokja', 'PokjaController');
Route::get('/pokja-data', 'PokjaController@data')->name('pokja.data')->middleware('auth');
Route::get('/pokja-form/{id}', 'PokjaController@form')->name('pokja.form')->middleware('auth');
Route::get('/pokja-status/{id}/{st}', 'PokjaController@status')->name('pokja.status')->middleware('auth');

// Jenis Pekerjaan
Route::resource('pekerjaan', 'PekerjaanController');
Route::get('/pekerjaan-data', 'PekerjaanController@data')->name('pekerjaan.data');
Route::get('/pekerjaan-form/{id}', 'PekerjaanController@form')->name('pekerjaan.form');
Route::get('/pekerjaan-status/{id}/{st}', 'PekerjaanController@status')->name('pekerjaan.status');

