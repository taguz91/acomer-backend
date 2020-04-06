<?php

namespace App\Http\Resources\Sugerencia;

use App\Http\Resources\NewCollectionResponse;
use App\Http\Resources\Sugerencia\SugerenciaResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SugerenciaCollection extends ResourceCollection
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
            SugerenciaResource::collection($this->collection)
        );
    }
}
