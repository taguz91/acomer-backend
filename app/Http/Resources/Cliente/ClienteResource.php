<?php

namespace App\Http\Resources\Cliente;

use Illuminate\Http\Resources\Json\JsonResource;

class ClienteResource extends JsonResource
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
            'id' => $this->id,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'identificacion' => $this->identificacion,
            'telefono' => $this->telefono,
            'numero_compras' => $this->numero_compras,
            'ultima_compra' => $this->ultima_compra,
            'total_consumos' => $this->total_consumos
        ];
    }
}
