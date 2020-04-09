<?php

namespace App\Http\Requests\Calificacion;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class CalificacionUpdateRequest extends FormRequest
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
            'id_fk' => 'required|integer',
            'id_cliente' => 'required|integer',
            'calificacion' => 'required|integer',
            'tipo_calificacion' => 'required'
        ];
    }

    public function messages(){
        return [
            #validacion id_fk
            'id_fk.required' => 'El :attribute es obligatorio', 
            'id_fk.integer' => 'El :attribute no es un numero',
            #validacion id_cliente
            'id_cliente' => 'El :attribute es obligatorio', 
            'id_cliente' => 'El :attribute no es un numero',
            #validacion calificacion
            'calificacion' => 'El :attribute es obligatorio', 
            'califacacion' => 'El :attribute no es un numero',
            
            #validacion tipo_califacion
            'tipo_calificacion' => 'El :attribute es obligatorio'
            
           
           
            
        ];
    }

    public function attributes()
    {
        return [
            'id_fk' => 'Id Foranea',
            'id_cliente' => 'Id Cliente',
            'calificacion' => 'Calificacion',
            'tipo_calificacion' => 'Tipo Calificacion'
        ];
    }
    
}
