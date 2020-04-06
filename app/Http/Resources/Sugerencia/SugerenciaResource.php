<?php

namespace App\Http\Resources\Sugerencia;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Cliente\ClienteTblResource;

class SugerenciaResource extends JsonResource
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
            'id' => $this->id,
            'sugerencia' => $this->sugerencia,
            'fecha' => $this->created_at,
            $this->mergeWhen(
                $this->resource->relationLoaded('cliente'),
                new ClienteTblResource($this->cliente)
            )
        ];
    }
}
