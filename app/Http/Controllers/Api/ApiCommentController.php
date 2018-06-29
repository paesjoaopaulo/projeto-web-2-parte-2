<?php

namespace App\Http\Controllers\Api;

use App\Album;
use App\Comment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Album $album)
    {
        return $album->comments;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Album $album)
    {
        return $album->comments()->save(Comment::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album, Comment $comment)
    {
        return $album->comments()->findOrFail($comment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album, Comment $comment)
    {
        $comment = $album->comments()->findOrFail($comment);
        return $comment->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album, Comment $comment)
    {
        //
    }
}
