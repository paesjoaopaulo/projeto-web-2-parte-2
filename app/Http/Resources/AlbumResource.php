<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AlbumResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'created_at' => $this->created_at->format('d/m/Y H:i'),
            'updated_at' => $this->updated_at->format('d/m/Y H:i'),
            'cover' => new PhotoResource($this->cover()),
            'photos' => PhotoResource::collection($this->photos),
            'comments' => CommentResource::collection($this->comments),
            'link' => url(route('albums.show', $this)),
            'link_api' => url(route('api.albums.show', $this))
        ];
    }
}
