<?php

namespace App\Http\Resources\EncabezadoFactura;

use App\Http\Resources\NewCollectionResponse;
use App\Http\Resources\EncabezadoFactura\EncabezadoFacturaResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class EncabezadoFacturaCollection extends ResourceCollection
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
            EncabezadoFacturaResource::collection($this->collection)
        );
    }
}
