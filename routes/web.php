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

Route::get('/perusahaan', 'PerusahaanController@index')->name('perusahaan.index');
Route::get('/perusahaan/create', 'PerusahaanController@create')->name('perusahaan.create');

Route::get('/tenaga-ahli', 'TenagaAhliController@index')->name('ta.index');
Route::get('/tenaga-ahli/create', 'TenagaAhliController@create')->name('ta.create');
