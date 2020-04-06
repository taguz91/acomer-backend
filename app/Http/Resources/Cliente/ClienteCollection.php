<?php

namespace App\Http\Resources\Cliente;

use App\Http\Resources\NewCollectionResponse;
use App\Http\Resources\Cliente\ClienteResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ClienteCollection extends ResourceCollection
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
            ClienteResource::collection($this->collection)
        );
    }
}
