<?php

namespace App\Http\Resources\Favorito;

use App\Http\Resources\NewCollectionResponse;
use App\Http\Resources\Favorito\FavoritoCollection;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FavoritoCollection extends ResourceCollection
{
    use NewCollectionResponse;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->newCollectionResponse(
            FavoritoResource::collection($this->collection)
        );
    }
}
