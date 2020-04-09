<?php

namespace App\Http\Resources\Reporte;

use App\Http\Resources\NewCollectionResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Reporte\ReporteResource;

class ReporteCollection extends ResourceCollection
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
            ReporteResource::collection($this->collection)
        );
    }
}
