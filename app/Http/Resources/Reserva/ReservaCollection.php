<?php

namespace App\Http\Resources\Reserva;

use App\Http\Resources\NewCollectionResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ReservaCollection extends ResourceCollection
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
        return [
            $this->newCollectionResponse(
                ReservaCollection::collection($this->collection),
            )
        ];
    }
}
