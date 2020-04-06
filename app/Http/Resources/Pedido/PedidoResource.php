<?php

namespace App\Http\Resources\Pedido;

use Illuminate\Http\Resources\Json\JsonResource;

class PedidoResource extends JsonResource
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
            'id'=> $this->id,
            'id_restaurante'=> $this->id_restaurante,
            'id_empleado'=> $this->id_empleado,
            'id_mesa'=> $this->id_mesa,
            'platos'=>$this->platos,
            'notas'=>$this->notas
        ];
    }
}
