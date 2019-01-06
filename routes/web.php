<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/help', 'HelpController@index')->name('help');
Route::get('/about', 'AboutController@index')->name('about');