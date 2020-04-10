<?php

namespace App\Http\Requests\Sucursal;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class SucursalUpdateRequest extends FormRequest
{
    use FailedValidation;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [ 
            //'id_restaurante' => 'required|max:50',
            'horario_atencion' => 'required', //Definir bien
            'numero' => 'required|max:20|min:1',
            'direccion' => 'required|max:100',
            'latitud' => 'required', 
            'longitud' => 'required'
        ];
    }

    public function attributes(){
        return [
            'horario_atencion' => 'Horario Atención',
            'numero' => 'Número de restaurante',
            'direccion' => 'Dirección'
        ];
    }

    public function filters(){
        return [
            //'id_restaurante' => 'trim|escape',
            'horario_atencion' => 'trim|escape',
            'numero' => 'trim|escape',
            'direccion' => 'trim|capitalize|escape'
        ];
    }
}
