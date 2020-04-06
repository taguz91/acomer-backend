<?php

namespace App\Http\Resources\MenuDia;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuDiaResource extends JsonResource
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
            'id_menu_dia' => $this->id,
            'id_restaurante' => $this->id_restaurante,
            'menu_dia' => $this->menu_dia,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
        ];
    }
}
