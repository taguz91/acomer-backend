<?php

namespace App\Http\Resources\Sucursal;

use App\Http\Resources\NewCollectionResponse;
use App\Http\Resources\Sucursal\SucursalResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SucursalCollection extends ResourceCollection
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
            SucursalResource::collection($this->collection)
        );
    }
}
