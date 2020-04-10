<?php

namespace App\Http\Resources\Favorito;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Plato\PlatoTblResource;
use App\Http\Resources\Cliente\ClienteTblResource;

class FavoritoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            //'id_plato' => $this->id_plato,
            //'id_cliente' => $this->id_cliente,
            $this->mergeWhen(
                $this->resource->relationLoaded('plato') && !is_null($this->plato),
                new PlatoTblResource($this->plato)
            ),
            $this->mergeWhen(
                $this->resource->relationLoaded('cliente') && !is_null($this->cliente),
                new ClienteTblResource($this->cliente)
            )
        ];
    }
}
