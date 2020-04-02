<?php

namespace App\Http\Requests\Restaurante;

use Dotenv\Exception\ValidationException;
use Illuminate\Foundation\Http\FormRequest;

class RestauranteCreateRequest extends FormRequest
{
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
            'nombre_comercial' => 'required|max=50|min=15',
            'nombre_fiscal' => 'required|max=50|min=15'
        ];
    }

    public function messages()
    {
        return [
            'nombre_comercial.required' => 'El :attribute es obligatorio',
            'nombre_fiscal.required'=> 'El :attribute es obligatorio'
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
