<?php

namespace App\Http\Resources\Calificacion;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Cliente\ClienteTblResource;

class CalificacionResource extends JsonResource
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
            'id_calificacion'=> $this->id,
            'id_fk'=> $this->id_fk,
            'calificacion' => $this->calificacion,
            'tipo_calificacion' => $this->tipo_calificacion,
            $this->mergeWhen(
                $this->resource->relationLoaded('cliente') && !is_null($this->cliente),
                new ClienteTblResource($this->cliente)
            )
            
        ];
    }
}
