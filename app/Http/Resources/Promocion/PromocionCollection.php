<?php

namespace App\Http\Resources\Promocion;

use App\Http\Resources\NewCollectionResponse;
use App\Http\Resources\Promocion\PromocionResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PromocionCollection extends ResourceCollection
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
            PromocionResource::collection($this->collection)
        );
    }
}
