<?php

namespace App\Http\Resources\Empleado;

use Illuminate\Http\Resources\Json\JsonResource;

class EmpleadoTblResource extends JsonResource
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
            'id_empleado'=>$this->id,
            'identificacion'=>$this->identificacion,
            'nombre'=>$this->nombre
        ];
    }
}
