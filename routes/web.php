<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('Pengguna.login');
})->name('login');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'ceklevel:Admin']], function () {
    route::get('/daftar', 'BerandaController@daftar')->name('daftar');
});

Route::group(['middleware' => ['auth', 'ceklevel:Admin,User']], function(){
    route::get('/beranda', 'BerandaController@index')->name('beranda');
    route::get('/biodata', 'BiodataController@index')->name('biodata');
    route::get('/pengajaran', 'PengajaranController@index')->name('pengajaran');
    route::get('/penunjang', 'PenunjangController@index')->name('penunjang');

    route::get('/create-biodata', 'BiodataController@create')->name('create-biodata');
    route::post('/simpan-biodata', 'BiodataController@store')->name('simpan-biodata');
    route::get('/edit-biodata/{id}', 'BiodataController@edit')->name('edit-biodata');
    route::post('/update-biodata/{id}', 'BiodataController@update')->name('update-biodata');
    route::get('/delete-biodata/{id}', 'BiodataController@destroy')->name('delete-biodata');

    route::get('/create-pengajaran', 'PengajaranController@create')->name('create-pengajaran');
    route::post('/simpan-pengajaran', 'PengajaranController@store')->name('simpan-pengajaran');
    route::get('/edit-pengajaran/{id}', 'PengajaranController@edit')->name('edit-pengajaran');
    route::post('/update-pengajaran/{id}', 'PengajaranController@update')->name('update-pengajaran');
    route::get('/delete-pengajaran/{id}', 'PengajaranController@destroy')->name('delete-pengajaran');

    route::get('/create-penunjang', 'PenunjangController@create')->name('create-penunjang');
    route::post('/simpan-penunjang', 'PenunjangController@store')->name('simpan-penunjang');
    route::get('/edit-penunjang/{id}', 'PenunjangController@edit')->name('edit-penunjang');
    route::post('/update-penunjang/{id}', 'PenunjangController@update')->name('update-penunjang');
    route::get('/delete-penunjang/{id}', 'PenunjangController@destroy')->name('delete-penunjang');
});