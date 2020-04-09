<?php

namespace App\Http\Resources\Pedido;

use App\Http\Resources\Empleado\EmpleadoResource;
use App\Http\Resources\Mesa\MesaResource;
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
            'id_pedido'=> $this->id,
            'id_restaurante'=> $this->id_restaurante,
            // 'id_empleado'=> $this->id_empleado,
            // 'id_mesa'=> $this->id_mesa,
            'platos'=>$this->platos,
            'notas'=>$this->notas,
            $this->mergeWhen(
                $this->resource->relationLoaded('mesa') && !is_null($this->mesa),
                new MesaResource($this->mesa)
            ),
            $this->mergeWhen(
                $this->resource->relationLoaded('empleado') && !is_null($this->empleado),
                new EmpleadoResource($this->empleado)
            )

        ];
    }
}
