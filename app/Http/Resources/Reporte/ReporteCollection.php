<?php

namespace App\Http\Resources\Reporte;

use App\Http\Resources\NewCollectionResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Reporte\ReporteResource;

class ReporteCollection extends ResourceCollection
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
            ReporteResource::collection($this->collection)
        );
    }
}
