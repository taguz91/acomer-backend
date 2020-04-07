<?php

namespace App\Http\Resources\Empleado;

use App\Http\Resources\NewCollectionResponse;
use App\Http\Resources\Empleado\EmpleadoResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class EmpleadoCollection extends ResourceCollection
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
            EmpleadoResource::collection($this->collection)
        );
    }
}
