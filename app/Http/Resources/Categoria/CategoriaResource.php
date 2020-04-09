<?php

namespace App\Http\Resources\Categoria;

use App\Http\Resources\Restaurante\RestauranteResource;
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
            // 'id_restaurante'=>$this->id_restaurante,
            'nombre'=>$this->nombre,
            'numero_platos'=>$this->numero_platos,
            $this->mergeWhen(
                $this->resource->relationLoaded('restaurante') && !is_null($this->restaurante),
                new RestauranteResource($this->restaurante)
            )
        ];
    }
}
