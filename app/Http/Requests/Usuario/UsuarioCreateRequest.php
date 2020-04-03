<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class UsuarioCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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

    public function messages(){
        return[
        'nombre.required' => 'El :attribute es obligatorio',
        'nombre.max' => 'El :attribute no debe tener más de :max caracteres',
        'nombre.min' => 'El :attribute no debe tener menos de :min caracteres',
        'clave.required' => 'El :attribute es obligatorio',
        'clave.required' => 'El :attribute no debe tener más de :max caracteres',
        'correo.required' => 'El :attribute es obligatorio',
        'correo.max' => 'El :attribute no debe tener más de :max caracteres' 
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
