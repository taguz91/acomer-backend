<?php

namespace App\Http\Resources\Producto;

use Illuminate\Http\Resources\Json\JsonResource;

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
            'precio' => $this->precio
        ];
    }
}
