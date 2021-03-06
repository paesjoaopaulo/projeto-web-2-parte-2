<?php

namespace App\Http\Controllers\Api;

use App\Album;
use App\Http\Resources\PhotoResource;
use App\Photo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Album $album)
    {
        return PhotoResource::collection($album->photos);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return new PhotoResource(Photo::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album, Photo $photo)
    {
        return new PhotoResource($album->photos()->findOrFail($photo));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album, Photo $photo)
    {
        $photo = $album->photos()->findOrFail($photo);
        return new PhotoResource($photo->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album, Photo $photo)
    {
        //
    }
}
