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
    return view('AdminHome');
});


Auth::routes();

Route::get('/UserHome', 'HomeController@index')->name('UserHome');

Route::resource('Profile', 'ProfileController');

Route::get('/Profile', 'ProfileController@Profile');

Route::post('/addProfile', 'ProfileController@addProfile')->name('addprofile');

Route::get('/UserHome', 'ProfileController@showProfile')->name('showprofile');

Route::get('/Profile', 'ProfileController@updateProfile')->name('updateprofile');


