<?php

namespace App\Http\Resources\Sucursal;

use Illuminate\Http\Resources\Json\JsonResource;

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
            'id_restaurante' => $this->id_restaurante,
            'horario_atencion' => $this->horario_atencion,
            'numero' => $this->numero,
            'direccion' => $this->direccion,
            'latitud' => $this->latitud,
            'longitud' => $this->longitud
        ];
    }
}
