<?php

namespace App\Http\Resources\Categoria;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoriaResource extends JsonResource
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
            'id_categoria'=> $this->id,
            'nombre'=>$this->nombre,
            'numero_platos'=>$this->numero_platos
        ];
    }
}
