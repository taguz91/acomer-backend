<?php

namespace App\Http\Resources\MesaDia;

use App\Http\Resources\NewCollectionResponse;
use App\Http\Resources\Mesa\MesaResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MesaCollection extends ResourceCollection
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
        return $this->NewCollectionResponse(
            MesaResource::collection($this->collection)
        );
    }
}
