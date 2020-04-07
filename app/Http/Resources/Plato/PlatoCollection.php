<?php

namespace App\Http\Resources\Plato;

use App\Http\Resources\NewCollectionResponse;
use App\Http\Resources\Plato\PlatoResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PlatoCollection extends ResourceCollection
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
            PlatoResource::collection($this->collection)
        );
    }
}