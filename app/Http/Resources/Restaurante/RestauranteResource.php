<?php

namespace App\Http\Resources\Restaurante;

use Illuminate\Http\Resources\Json\JsonResource;

class RestauranteResource extends JsonResource
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
            'id_restaurante'=> $this->id,
            'nombre_comercial'=>$this->nombre_comercial,
            'nombre_fiscal'=>$this->nombre_fiscal,
            'inicio_suscripcion'=>$this->inicio_suscripcion,
            'ultimo_pago'=>$this->ultimo_pago,
            'fecha_proximo_pago'=>$this->fecha_proximo_pago
        ];
    }
}
