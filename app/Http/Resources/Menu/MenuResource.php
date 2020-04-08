<?php

namespace App\Http\Resources\Menu;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuResource extends JsonResource
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
            'id_menu' => $this->id,
            'fecha_creacion' => $this->created_at,
            'nombre' => $this->nombre,
            'mes_inicio' => $this->mes_inicio,
            'mes_fin' => $this->mes_fin
        ];
    }
}
