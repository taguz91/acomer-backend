<?php

namespace App\Http\Resources\Administrador;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AdministradorCollection extends ResourceCollection
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
            'status' => 200,
            'data' => AdministradorResource::collection($this->collection),
            'meta' => [
                'total_resultados' => $this->collection->count()
            ]
        ];
    }
}
