<?php

namespace App\Http\Resources\Url;

use Illuminate\Http\Resources\Json\JsonResource;

class UrlResource extends JsonResource
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
            'id_url' => $this->id,
            'plataforma' => $this->plataforma,
            'url' => $this->url,
            'permisos' => $this->permisos
        ];
    }
}
