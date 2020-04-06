<?php

namespace App\Http\Resources\Calificacion;

use App\Http\Resources\NewCollectionResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

use App\Http\Resources\Calificacion\CalificacionResource;

class CalificacionCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->NewCollectionResponse(
            CalificacionResource::collection($this->collection)
        );
    }
}
