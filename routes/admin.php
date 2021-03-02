<?php

Route::get('admins/login','Admin\Auth\LoginController@showAdminLoginForm')->name('admins.login');
Route::post('admins/login', 'Admin\Auth\LoginController@login')->name('admins.login');
Route::get('logout', 'Admin\Auth\LoginController@logout')->name('admins.logout');