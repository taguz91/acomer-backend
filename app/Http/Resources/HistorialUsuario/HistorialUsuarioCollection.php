<?php

namespace App\Http\Resources\HistorialUsuario;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\HistorialUsuario\HistorialUsuarioResource;

class HistorialUsuarioCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => HistorialUsuarioResource::collection($this->collection),
            'meta' => [
                'total' => $this->collection->count()
            ]
        ];
    }
}
