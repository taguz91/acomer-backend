<?php

namespace App\Http\Resources\Pedido;

use Illuminate\Http\Resources\Json\JsonResource;

class PedidoTblResource extends JsonResource
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
            'id_pedido' => $this ->id,
            'platos' => $this ->platos
        ];
    }
}
