<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/help', 'HelpController@index')->name('help');
Route::get('/about', 'AboutController@index')->name('about');

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('{all?}', 'HomeController@fallback')
     ->name('fallback')
     ->where('all', '.*');
