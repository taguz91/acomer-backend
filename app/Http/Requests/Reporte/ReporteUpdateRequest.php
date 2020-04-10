<?php

namespace App\Http\Requests\Reporte;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class ReporteUpdateRequest extends FormRequest
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
           
            'nombre' => 'required|max:20|min:6',
            'id_restaurante' => 'required|integer'
        ];
    }

    public function messages(){
        return [
            #validacion nombre_comercial
            'nombre.required' => 'El :attribute es obligatorio', 
            'nombre.min' => 'El :attribute debe tener minimo 6 caracteres',
            'nombre.max' => 'El :attribute no puede tener mas de 20 caracteres',
             #validacion id_restaurante
             'id_restaurante.required' => 'El :attribute es obligatorio', 
             'id_restaurante.integer' => 'El :attribute no es un numero' 
           
            
        ];
    }

    public function attributes()
    {
        return [
            'nombre' => 'Nombre Del Reporte',
        ];
    }

    public function filters(){
        return [
            'nombre' => 'trim|capitalize|escape'
        ];
    }
    
}
