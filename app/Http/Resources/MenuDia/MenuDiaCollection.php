<?php

namespace App\Http\Resources\MenuDia;


use App\Http\Resources\NewCollectionResponse;
use App\Http\Resources\MenuDia\MenuDiaResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MenuDiaCollection extends ResourceCollection
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
            MenuDiaResource::collection($this->collection)
        );
    }
}
