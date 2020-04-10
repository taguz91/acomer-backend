<?php

namespace App\Http\Requests\Usuario;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class UsuarioCreateRequest extends FormRequest
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
            'nombre' => 'required|max:50|min:3',
            'clave' => 'required|max:50',
            'correo' => 'required|max:100'
        ];
    }

    public function attributes(){
        return [
            'nombre' => 'Nombre',
            'clave' => 'Clave',
            'correo' => 'Correo' 
        ];
    }

    public function filters(){
        return [
            'nombre' => 'trim|capitalize|escape',
            'clave' => 'trim|capitalize|escape',
            'correo' => 'trim|capitalize|escape'
        ];
    }
}
