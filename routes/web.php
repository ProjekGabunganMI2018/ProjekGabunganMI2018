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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/laravel-filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\Unisharp\Laravelfilemanager\controllers\UploadController@upload');

    Route::resource('jenisSurats', 'JenisSuratController');
    // list all lfm routes here...

    //zizaco entrust
    Route::resource('roles', 'RoleController');

    Route::resource('user_role', 'UserRoleController', ['except' => [
        'create', 'store', 'show', 'destroy',
    ]]);

    Route::resource('permissions', 'PermissionController');

    Route::resource('users', 'UserController');
});