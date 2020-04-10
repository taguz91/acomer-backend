<?php

namespace App\Http\Resources\Restaurante;

use Illuminate\Http\Resources\Json\JsonResource;

class RestauranteNombreResource extends JsonResource
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
            'id_restaurante' => $this->id,
            'nombre_restaurante' => $this->nombre_comercial

        ];
    }
}
