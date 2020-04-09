<?php

namespace App\Http\Requests\Categoria;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class CategoriaUpdateRequest extends FormRequest
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
           
            'nombre' => 'required|max:20|min:4',
            'numero_platos' => 'required|integer'
        ];
    }
    public function messages(){
        return [
            #validacion nombre
            'nombre.required' => 'El :attribute es obligatorio', 
            'nombre.min' => 'El :attribute debe tener minimo 4 caracteres',
            'nombre.max' => 'El :attribute no puede tener mas de 20 caracteres',
            #validacion numero_platos
            'numero_platos.required' => 'El :attribute es obligatorio',
            'numero_platos.integer' => 'El :attribute no es un numero'
           
            
        ];
    }

    public function attributes()
    {
        return [
            'nombre' => 'Nombre Categoria',
        ];
    }

    public function filters(){
        return [
            'nombre' => 'trim|capitalize|escape'
        ];
    }
}
