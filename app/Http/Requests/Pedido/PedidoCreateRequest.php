<?php

namespace App\Http\Requests\Pedido;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class PedidoCreateRequest extends FormRequest
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
            'id_empleado' => 'required|integer',
            'id_mesa' => 'required|integer',
            'platos'=> 'required',
            'notas'  => 'required|max:100'
        ];
    }

    public function attributes()
    {
        return [
            'notas' => 'Notas Pedido',
        ];
    }

    public function messages(){
        return [
            #validacion id_empleado
            'id_empleado.required' => 'El :attribute es obligatorio', 
            'id_empleado.integer' => 'El :attribute no es un numero', 
            #validacion id_mesa
            'id_mesa.required' => 'El :attribute es obligatorio',
            'id_mesa.integer' => 'El :attribute no es un numero',
            #validacion id_restaurante
            'id_restaurante.required' => 'El :attribute es obligatorio',
            'id_restaurante.integer' => 'El :attribute no es un numero',
            #validacion platos
            'platos.required' => 'El :attribute es obligatorio',
            #validacion notas
            'notas.required' => 'El :attribute es obligatorio',
            'notas.max' => 'El :attribute no puede tener mas de 100 caracteres'

           
            
        ];
    }
    public function filters(){
        return [
            'notas' => 'trim'
        ];
    }

}
