<?php

namespace App\Http\Resources\Calificacion;

use Illuminate\Http\Resources\Json\JsonResource;

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
            'id'=> $this->id,
            'id_fk'=> $this->id_fk,
            'id_cliente'=> $this->id_cliente,
            'calificacion'=>$this->calificacion,
            'tipo_calificacion'=>$this->tipo_calificacion
            
        ];
    }
}
