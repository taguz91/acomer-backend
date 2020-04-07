<?php

namespace App\Http\Resources\EncabezadoFactura;

use Illuminate\Http\Resources\Json\JsonResource;

class EncabezadoFacturaResource extends JsonResource
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
            'id_cliente' => $this->id_cliente,
            'id_pedido' => $this->id_pedido,
            'total' => $this->total,
            'fecha' => $this->fecha,
            'nombre' => $this->nombre,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'identificacion' => $this->identificacion
        ];
    }
}
