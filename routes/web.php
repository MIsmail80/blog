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

Route::get('/', 'HomeController@homePage');

Route::get('/profile', 'UserController@getProfile');
Route::post('/save-profile', 'UserController@saveProfile');

Route::get('/login', 'UserController@getLogin');
Route::post('/login', 'UserController@postLogin');

Route::get('/logout', 'UserController@logout');

Route::get('/register', 'UserController@getRegister');
Route::post('/register', 'UserController@postRegister');

Route::resource('posts', 'PostController');
