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

<<<<<<< HEAD
Route::get('/AsalSurat', 'AsalSuratController@index');
=======
Route::resource('asal_surat', 'AsalSuratController');
>>>>>>> 768ef618a4528e32a5f15f49a918e67fdd8cbdea
