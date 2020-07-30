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
Route::namespace('Admin\Auth')->name('admin.')->prefix('admin')->group(function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login.show');
    Route::post('login', 'LoginController@login')->name('login');
});


Route::post('admin/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');


// Auth::routes();

