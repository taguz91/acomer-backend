<?php

namespace App\Http\Resources\Combo;

use Illuminate\Http\Resources\Json\JsonResource;

class ComboResource extends JsonResource
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
            'id_combo' => $this->id,
            'nombre' => $this->nombre,
            'platos' => sizeof($this->platos),
            'precio' => $this->precio_final,
            'extra' => sizeof($this->extra),
        ];
    }
}
