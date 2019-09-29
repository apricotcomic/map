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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/phpinfo', 'HomeController@phpinfo')->name('phpinfo');

Route::get('/map/menu', 'map\mapController@menu')->name('menu');

Route::get('/map/upload', 'map\mapController@index')->name('upload');

Route::post('/map/upload', 'map\mapController@upload');

Route::resource('admin', 'adminController');
