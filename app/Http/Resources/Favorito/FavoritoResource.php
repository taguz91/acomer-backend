<?php

namespace App\Http\Resources\Favorito;

use Illuminate\Http\Resources\Json\JsonResource;

class FavoritoResource extends JsonResource
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
            'id_plato' => $this->id_plato,
            'id_cliente' => $this->id_cliente
        ];
    }
}
