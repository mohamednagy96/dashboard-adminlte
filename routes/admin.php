<?php


Route::get('/', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');
Route::resource('pages', 'PageController');
Route::resource('posts', 'PostController');

Route::resource('admin_users', 'AdminUserController');

Route::resource('settings', 'SettingController');



