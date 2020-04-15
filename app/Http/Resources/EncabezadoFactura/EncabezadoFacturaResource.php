<?php

namespace App\Http\Resources\EncabezadoFactura;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Restaurante\RestauranteNombreResource;
use App\Http\Resources\Cliente\ClienteTblResource;
use App\Http\Resources\Pedido\PedidoTblResource;

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
            'total' => $this->total,
            'fecha' => $this->fecha,
            'nombre_encfac' => $this->nombre,
            //'direccion' => $this->direccion,
            //'telefono' => $this->telefono,
            //'identificacion' => $this->identificacion,
            $this->mergeWhen(
                $this->resource->relationLoaded('restaurante') && !is_null($this->restaurante),
                new RestauranteNombreResource($this->restaurante)
            ),
            $this->mergeWhen(
                $this->resource->relationLoaded('cliente') && !is_null($this->cliente),
                new ClienteTblResource($this->cliente)
            ),
            $this->mergeWhen(
                $this->resource->relationLoaded('pedido') && !is_null($this->pedido),
                new PedidoTblResource($this->pedido)
            ),
        ];
    }
}
