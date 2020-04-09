<?php

namespace App\Http\Resources\Mesa;

use App\Http\Resources\Restaurante\RestauranteResource;
use Illuminate\Http\Resources\Json\JsonResource;

class MesaResource extends JsonResource
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
            'id_mesa'=> $this->id,
            // 'id_restaurante'=> $this->id_restaurante,
            'numero'=>$this->numero,
            'capacidad'=>$this->capacidad,
            'descripcion'=>$this->descripcion,
            $this->mergeWhen(
                $this->resource->relationLoaded('restaurante') && !is_null($this->restaurante),
                new RestauranteResource($this->restaurante)
            )
            
        ];
    }
}
