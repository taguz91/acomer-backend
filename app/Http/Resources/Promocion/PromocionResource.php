<?php

namespace App\Http\Resources\Promocion;

use Illuminate\Http\Resources\Json\JsonResource;

class PromocionResource extends JsonResource
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
            'id_restaurante' =>$this->id_restaurante,
            'id_fk' =>$this->id_fk,
            'fecha_inicio' =>$this->fecha_inicio,
            'fecha_fin' =>$this->fecha_fin,
            'precio' =>$this->precio,
            'descuento' =>$this->descuento,
            'extra'=>$this->extra
        ];
    }
}
