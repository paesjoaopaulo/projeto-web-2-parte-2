<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('api.')->group(function () {
    Route::resource('albums/{album}/photos', 'Api\ApiPhotoController')->only(['index', 'store', 'show', 'update', 'destroy']);
    Route::resource('albums/{album}/comments', 'Api\ApiCommentController')->only(['index', 'store', 'show', 'update', 'destroy']);
    Route::resource('albums', 'Api\ApiAlbumController')->only(['index', 'store', 'show', 'update', 'destroy']);
});