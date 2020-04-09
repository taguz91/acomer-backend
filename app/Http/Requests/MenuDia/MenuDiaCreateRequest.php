<?php

namespace App\Http\Requests\MenuDia;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class MenuDiaCreateRequest extends FormRequest
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
            'menu_dia' => 'required|json',
            'fechas' => 'required|json',
            'id_restaurante' => 'required|integer',
            'descripcion'=>'required|max:40',
            'precio'=>'required'
        ];
    }

    public function messages(){
        return [
            #validacacion id_restaurante
            'id_restaurante.required' => 'el :attribute es obligatorio',
            'id_restaurante.integer' => 'el :attribute no es un numero',
            #validacion menu_dia
            'menu_dia.required' => 'El :attribute es obligatorio', 
           
            #validacion fechas
            'fechas.required' => 'El :attribute es obligatorio',

            #validacion descripcion
            'descripcion.required' => 'El :attribute es obligatorio',
            'descripcion.max' => 'El :attribute no puede ser mayor a 40 caracteres',
            #validacion precio
            'precio.required' => 'El :attribute es obligatorio'
           

           
            
        ];
    }

    public function attributes()
    {
        return [
            'menu_dia' => 'Menu del Dia',
        ];
    }

}
