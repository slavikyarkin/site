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


Route::get('/admin','AdminController@home_page_admin');
Route::get('/admin/show_users','AdminController@show_users');
Route::get('/admin/show_users/show_info_user','AdminController@show_info_user');
Route::get('/admin/show_users/show_info_user','AdminController@show_info_user');
Route::get('/admin/readability','AdminController@readability');
Route::get('/admin/editing_a_schedule','AdminController@editing_a_schedule');
