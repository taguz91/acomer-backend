<?php

namespace App\Http\Resources\MesaDia;

use Illuminate\Http\Resources\Json\ResourceCollection;

class MesaCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
