<?php

namespace App\Http\Resources\HistorialUsuario;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Usuario\UsuarioTblResource;

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
            $this->mergeWhen(
                $this->resource->relationLoaded('usuario'), 
                new UsuarioTblResource($this->usuario)
            )
        ];
    }
}
