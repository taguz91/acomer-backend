<?php

namespace App\Http\Resources\Empleado;

use Illuminate\Http\Resources\Json\JsonResource;

class EmpleadoResource extends JsonResource
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
            'id_usuario' => $this->id_usuario,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'identificacion' => $this->identificacion,
            'id_rol' => $this->id_rol,
            'foto_url' => $this->foto_url,
            $this->mergeWhen(
                $this->resource->relationLoaded('usuario') && !is_null($this->usuario),
                new UsuarioTblResource($this->usuario)
            )
        ];
    }
}
