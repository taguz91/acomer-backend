<?php

namespace App\Http\Resources\Plato;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Restaurante\RestauranteNombreResource;

class PlatoResource extends JsonResource
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
            //'id_restaurante' => $this->id_restaurante,
            'nombre' => $this->nombre,
            'precio' => $this->precio,
            'ingredientes' => $this->ingredientes,
            $this->mergeWhen(
                $this->resource->relationLoaded('restaurante') && !is_null($this->restaurante),
                new RestauranteNombreResource($this->restaurante)
            )
        ];
    }
}
