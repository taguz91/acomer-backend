<?php

namespace App\Http\Resources\Url;

use App\Http\Resources\Url\UrlResource;
use App\Http\Resources\NewCollectionResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UrlCollection extends ResourceCollection
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
            UrlResource::collection($this->collection)
        );
    }
}
