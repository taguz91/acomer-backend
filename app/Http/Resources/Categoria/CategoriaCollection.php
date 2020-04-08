<?php

namespace App\Http\Resources\Categoria;

use App\Http\Resources\NewCollectionResponse;
use App\Http\Resources\Categoria\CategoriaResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoriaCollection extends ResourceCollection
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
           CategoriaResource::collection($this->collection)
        );
    }
}
