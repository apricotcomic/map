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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/phpinfo', 'HomeController@phpinfo')->name('phpinfo');

Route::get('/map/menu', 'map\uploadController@menu')->name('menu');

Route::get('/map/upload', 'map\uploadController@index')->name('upload');

Route::post('/map/upload', 'map\uploadController@upload');

Route::resource('admin', 'adminController');

Route::resource('floor', 'FloorController');

Route::resource('facility', 'FacilityController');

Route::post('/facility/add', 'FacilityController@add')->name('facility.add');

Route::resource('item', 'ItemController');

Route::resource('binditem', 'BinditemController');

Route::get('/vew', function(){ return view('vewsample'); });
