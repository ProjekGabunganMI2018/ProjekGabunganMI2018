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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('asal_surat', 'AsalSuratController');

Route::resource('disposisi', 'DisposisiController');

Route::resource('jenis_surat', 'JenisSuratController');

Route::resource('surat_masuk', 'SuratMasukController');

Route::resource('surat_keluar', 'SuratKeluarController');
