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
    route::get('/register', 'BerandaController@register')->name('register');
});

Route::group(['middleware' => ['auth', 'ceklevel:Admin,User']], function(){
    route::get('/beranda', 'BerandaController@index')->name('beranda');
    route::get('/biodata', 'BerandaController@biodata')->name('biodata');
    route::get('/pengajaran', 'BerandaController@pengajaran')->name('pengajaran');
    route::get('/penunjang', 'BerandaController@penunjang')->name('penunjang');   
});