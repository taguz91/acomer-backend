<?php

namespace App\Http\Requests\Restaurante;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class RestauranteCreateRequest extends FormRequest
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
            'nombre_comercial' => 'required|max:25|min:6',
            'nombre_fiscal' => 'required|max:30|min:6'
        ];
    }
    public function messages(){
        return [
            #validacion nombre_comercial
            'nombre_comercial.required' => 'El :attribute es obligatorio', 
            'nombre_comercial.min' => 'El :attribute debe tener minimo 6 caracteres',
            'nombre_comercial.max' => 'El :attribute no puede tener mas de 25 caracteres',
            #validacion nombre_comercial
            'nombre_fiscal.required' => 'El :attribute es obligatorio',
            'nombre_fiscal.min' => 'El :attribute debe tener minimo 6 caracteres',
            'nombre_fiscal.max' => 'El :attribute no puede tener mas de 30 caracteres',
            
        ];
    }

    public function attributes()
    {
        return [
            'nombre_comercial' => 'Nombre Comercial',
            'nombre_fiscal' => 'Nombre Fiscal'
        ];
    }

    public function filters(){
        return [
            'nombre_comercial' => 'trim|capitalize|escape',
            'nombre_fiscal' => 'trim|capitalize|escape'
        ];
    }
    
}
