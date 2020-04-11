<?php

namespace App\Http\Resources\Producto;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Restaurante\RestauranteNombreResource;

class ProductoResource extends JsonResource
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
            'id_producto' => $this->id,
            'nombre' => $this->nombre,
            'stock' => $this->stock,
            'precio' => $this->precio,
            $this->mergeWhen(
                $this->resource->relationLoaded('restaurante') && !is_null($this->restaurante),
                new RestauranteNombreResource($this->restaurante)
            )
        ];
    }
}
