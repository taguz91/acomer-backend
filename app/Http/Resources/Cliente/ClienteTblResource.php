<?php

namespace App\Http\Resources\Cliente;

use Illuminate\Http\Resources\Json\JsonResource;

class ClienteTblResource extends JsonResource
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
            'id_cliente' => $this->id,
            'nombre_cli' => $this->nombre,
            'apellido_cli' => $this->apellido,
            'identificacion_cli' => $this->identificacion,
            'telefono_cli' => $this->telefono
        ];
    }
}
