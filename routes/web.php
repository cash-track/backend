<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/help', 'HelpController@index')->name('help');
Route::get('/about', 'AboutController@index')->name('about');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('/email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('/email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('/email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('{all?}', 'HomeController@fallback')
     ->name('fallback')
     ->where('all', '.*');
