<?php

namespace App\Http\Resources\Empleado;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Usuario\UsuarioTblResource;
use App\Http\Resources\Restaurante\RestauranteNombreResource;

class EmpleadoResource extends JsonResource
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
            'id_empleado' => $this->id,
            'id_restaurante' => $this->id_restaurante,
            'id_usuario' => $this->id_usuario,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'identificacion' => $this->identificacion,
            'id_rol' => $this->id_rol,
            $this->mergeWhen(
                $this->resource->relationLoaded('usuario') && !is_null($this->usuario),
                new UsuarioTblResource($this->usuario)
            ),
            $this->mergeWhen(
                $this->resource->relationLoaded('restaurante') && !is_null($this->restaurante),
                new RestauranteNombreResource($this->restaurante)
            )
        ];
    }
}
