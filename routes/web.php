<?php

Route::get('/', function () {
    return view('public.home');
});


Route::resource('/albums', 'AlbumController');
