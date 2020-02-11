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

Route::prefix('admin')->group(function () {
    Route::get('dashboard', 'DashboardController@dashboard');

    Route::resource('/roles', 'RoleController');
    
    Route::resource('/categories', 'CategoryController');
});