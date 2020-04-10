<?php

namespace App\Http\Resources\Plato;

use Illuminate\Http\Resources\Json\JsonResource;

class PlatoTblResource extends JsonResource
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
            'id_plato' => $this->id,
            'nombre' => $this->nombre
        ];
    }
}
