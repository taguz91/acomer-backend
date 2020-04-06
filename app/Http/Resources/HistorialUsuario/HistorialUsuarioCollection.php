<?php

namespace App\Http\Resources\HistorialUsuario;

use App\Http\Resources\NewCollectionResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\HistorialUsuario\HistorialUsuarioResource;

class HistorialUsuarioCollection extends ResourceCollection
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
            HistorialUsuarioResource::collection($this->collection),
        );
    }
}
