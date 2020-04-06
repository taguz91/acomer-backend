<?php

namespace App\Http\Resources\Menu;

use App\Http\Resources\Menu\MenuResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MenuCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'status' => 200,
            'data' => MenuResource::collection($this->collection),
            'meta' => [
                'total_resultados' => $this->collection->count()
            ]
        ];
    }
}
