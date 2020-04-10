<?php

namespace App\Http\Resources\Sucursal;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Restaurante\RestauranteNombreResource;


class SucursalResource extends JsonResource
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
            'horario_atencion' => $this->horario_atencion,
            'numero' => $this->numero,
            'direccion' => $this->direccion,
            //'latitud' => $this->latitud,
            //'longitud' => $this->longitud,
            $this->mergeWhen(
                $this->resource->relationLoaded('restaurante') && !is_null($this->restaurante),
                new RestauranteNombreResource($this->restaurante)
            )
        ];
    }
}
