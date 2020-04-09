<?php

namespace App\Http\Resources\Producto;

use App\Http\Resources\NewCollectionResponse;
use App\Http\Resources\Producto\ProductoResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductoCollection extends ResourceCollection
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
            ProductoResource::collection($this->collection)
        );
    }
}
