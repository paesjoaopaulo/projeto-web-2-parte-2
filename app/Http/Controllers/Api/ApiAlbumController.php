<?php

namespace App\Http\Controllers\Api;

use App\Album;
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
        return Album::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Album::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  Album $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        return $album;
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
        return $album->update($request->all());
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
