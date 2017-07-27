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
Route::post('/home', 'HomeController@update_avatar')->name('home');


Route::group(['prefix'=>'admin','middleware'=>'web', 'auth'], function() {
    Route::get('/', ['uses'=>'Admin\AdminController@show','as'=>'admin_index']);
    Route::get('/show_users', ['uses'=>'Admin\AdminShowController@show','as'=>'admin_show_users']);
});
