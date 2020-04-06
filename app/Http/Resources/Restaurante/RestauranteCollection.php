<?php

namespace App\Http\Resources\Restaurante;

use App\Http\Resources\NewCollectionResponse;
use App\Http\Resources\Restaurante\RestauranteResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RestauranteCollection extends ResourceCollection
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
        return $this->NewCollectionResponse(
            RestauranteResource::collection($this->collection)
        );
    }
}
