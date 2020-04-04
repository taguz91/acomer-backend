<?php

namespace App\Http\Requests\Sucursal;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class SucursalCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;//AQUI TENGO QUE CAMBIAR A TRUE???
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [ 
            'id_restaurante' => 'required|max:50',
            'horario_atencion' => 'required', //Definir bien
            'numero' => 'required|max:20|min:1',
            'direccion' => 'required|max:100',
            //Definir si van o no
            //'latitud' => 'required', 
            //'longitud' => 'required'
        ];
    }

    public function messages(){
        return [
            'id_restaurante.required' => 'El :attribute es obligatorio',
            'id_restaurante.max' => 'El :attribute no debe tener más de :max caracteres',
            'horario_atencion.required' => 'El :attribute es obligatorio',
            'numero.required' => 'El :attribute es obligatorio',
            'numero.max' => 'El :attribute no debe tener más de :max caracteres',
            'numero.min' => 'El :attribute no debe tener menos de :max caracteres',
            'direccion.required' => 'El :attribute es obligatorio',
            'direccion.max' => 'El :attribute no debe tener más de :max caracteres'
            //Estos atributos no sé si deban ir
            //'latitud.required' => 'El :attribute es obligatorio',
            //'longitud.required' => 'El :attribute es obligatorio'
        ];
    }

    public function attributes(){
        return [
            'id_resturante' => 'Código Restaurante',
            'horario_atencion' => 'Horario Atención',
            'numero' => 'Número de restaurante',
            'direccion' => 'Dirección'
        ];
    }

    public function filters(){
        return [
            'id_restaurante' => 'trim|escape',
            'horario_atencion' => 'trim|escape',
            'numero' => 'trim|escape',
            'direccion' => 'trim|capitalize|escape'
        ];
    }
}
