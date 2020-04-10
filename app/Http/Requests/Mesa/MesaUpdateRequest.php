<?php

namespace App\Http\Requests\Mesa;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class MesaUpdateRequest extends FormRequest
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
            'numero' => 'required|integer',
            'capacidad' => 'required|integer',
            'descripcion'  => 'required|max:40'
        ];
    }

    public function messages(){
        return [
            #validacion numero
            'numero.required' => 'El :attribute es obligatorio', 
            'numero.integer' => 'El :attribute no es un numero', 
            #validacion capacidad
            'capacidad.required' => 'El :attribute es obligatorio',
            'capacidad.integer' => 'El :attribute no es un numero',
            
            #validacion descripcion
            'notas.required' => 'El :attribute es obligatorio',
            'notas.max' => 'El :attribute no puede tener mas de 40 caracteres'

           
            
        ];
    }
    public function attributes()
    {
        return [
            'numero' => 'Numero Mesa',
            'capacidad' => 'Capacidad Mesa',
            'descripcion' => 'Descripcion Mesa',
        ];
    }

    public function filters(){
        return [
            'descripcion' => 'trim'
        ];
    }
}
