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

Route::group(['prefix' => 'cekbarang'], function(){
Route::get('/cekbarang', 'CekbarangController@index')->name('cekbarang.index');
Route::get('/cekbarang', 'CekbarangController@create')->name('cekbarang.create');
Route::post('/cekbarang', 'CekbarangController@edit')->name('cekbarang.index');
});