<?php

namespace App\Http\Resources\Usuario;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\NewCollectionResponse;
use App\Http\Resources\Usuario\UsuarioResource;

class UsuarioCollection extends ResourceCollection
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
            UsuarioResource::collection($this->collection)
        );
    }
}
