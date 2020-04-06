<?php

namespace App\Http\Requests\Categoria;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class CategoriaCreateRequest extends FormRequest
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
           
            'nombre' => 'required',
            'numero_platos' => 'required'
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
