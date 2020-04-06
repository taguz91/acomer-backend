<?php

namespace App\Http\Resources\Combo;

use App\Http\Resources\Combo\ComboResource;
use App\Http\Resources\NewCollectionResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ComboCollection extends ResourceCollection
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
            ComboResource::collection($this->collection)
        );
    }
}
