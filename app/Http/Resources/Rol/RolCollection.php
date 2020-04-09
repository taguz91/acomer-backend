<?php

namespace App\Http\Resources\Rol;

use App\Http\Resources\Rol\RolResource;
use App\Http\Resources\NewCollectionResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RolCollection extends ResourceCollection
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
            RolResource::collection($this->collection)
        );
    }
}
