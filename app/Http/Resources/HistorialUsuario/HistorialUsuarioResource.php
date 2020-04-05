<?php

namespace App\Http\Resources\HistorialUsuario;

use Illuminate\Http\Resources\Json\JsonResource;

class HistorialUsuarioResource extends JsonResource
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
            'id' => $this->id,
            'accion' => $this->accion,
            'plataforma' => '',
            'fecha' => $this->created_at,
            $this->mergeWhen($this->resource->relationLoaded('usuario'), [
                'id_usuario' => $this->usuario->id,
                'username' => $this->usuario->nombre,
                'correo' => $this->usuario->correo,
            ])
        ];
    }
}
