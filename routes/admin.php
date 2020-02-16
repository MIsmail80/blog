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

Route::prefix('admin')->group(function () {
    // Put here not authentecated routes
    Route::get('login', 'LoginController@index');
    Route::post('login', 'LoginController@authenticate');


    Route::middleware('myauth')->group(function () {
        // Put here authentecated routes
        Route::get('logout', 'LoginController@logout');
    
        Route::get('dashboard', 'DashboardController@dashboard');

        Route::resource('/roles', 'RoleController');

        Route::resource('/categories', 'CategoryController');
    });
});
