<?php

Route::get('/', function () {
    return view('public.home');
})->name('public.home');

Route::get('/auth', 'LoginController@login')->name('login');
Route::get('/auth/logout', 'LoginController@logout')->name('logout');
Route::post('/auth', 'LoginController@doLogin');

Route::get('/register', 'LoginController@register')->name('register');
Route::post('/register', 'LoginController@doRegister');

Route::resource('/albums', 'AlbumController');
Route::resource('/albums/{album}/photos', 'PhotoController');
Route::resource('/albums/{album}/comments', 'CommentController');
