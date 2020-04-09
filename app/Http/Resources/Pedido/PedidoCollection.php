<?php

namespace App\Http\Resources\Pedido;

use App\Http\Resources\NewCollectionResponse;
use App\Http\Resources\Pedido\PedidoResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PedidoCollection extends ResourceCollection
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
            PedidoResource::collection($this->collection)
        );
    }
}
