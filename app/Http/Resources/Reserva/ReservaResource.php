<?php

namespace App\Http\Resources\Reserva;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Cliente\ClienteTblResource;

class ReservaResource extends JsonResource
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
            'id_reserva' => $this->id,
            'fecha_reserva' => $this->fecha_reserva,
            'numero_personas' => $this->numero_personas,
            'total' => $this->total,
            $this->mergeWhen(
                $this->resource->relationLoaded('cliente') && !is_null($this->cliente),
                new ClienteTblResource($this->cliente)
            )
        ];
    }
}
