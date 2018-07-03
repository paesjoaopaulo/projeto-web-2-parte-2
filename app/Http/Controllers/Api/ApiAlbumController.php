<?php

namespace App\Http\Controllers\Api;

use App\Album;
use App\Http\Resources\AlbumResource;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiAlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AlbumResource::collection(Album::all());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $album = Album::create($request->only(['title', 'description']));
        foreach ($request->get('photo') as $photo) {
            $photos[] = new Photo(['url' => $photo['url'], 'description' => $photo['description']]);
        }
        $album->photos()->saveMany($photos);
        return new AlbumResource($album);
    }

    /**
     * Display the specified resource.
     *
     * @param  Album $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        return new AlbumResource($album);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Album $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        $album->update($request->all());
        return new AlbumResource($album);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Album $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        //
    }
}
