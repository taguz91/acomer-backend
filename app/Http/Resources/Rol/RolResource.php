<?php

namespace App\Http\Resources\Rol;

use Illuminate\Http\Resources\Json\JsonResource;

class RolResource extends JsonResource
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
            'id_rol' => $this->id,
            'nombre' => $this->nombre,
            'fecha_creacion' => $this->created_at
        ];
    }
}
