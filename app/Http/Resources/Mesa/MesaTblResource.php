<?php

namespace App\Http\Resources\Mesa;

use Illuminate\Http\Resources\Json\JsonResource;

class MesaTblResource extends JsonResource
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
            'id_mesa'=>$this->id,
            'numero'=>$this->numero
        ];
    }
}
