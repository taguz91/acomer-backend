<?php

namespace App\Http\Resources\Reporte;

use Illuminate\Http\Resources\Json\JsonResource;

class ReporteResource extends JsonResource
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
            'id'=> $this->id,
            'id_restaurante'=>$this->id_restaurante,
            'reporte'=>$this->reporte,
            'fecha'=>$this->fecha,
            'nombre'=>$this->nombre
        ];
    }
}
