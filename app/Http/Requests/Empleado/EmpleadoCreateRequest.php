<?php

namespace App\Http\Requests\Empleado;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class EmpleadoCreateRequest extends FormRequest
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
            'nombre' => 'required|max:100|min:3',
            'apellido' => 'required|max:100|min:3',
            'identificacion' => 'required|max:20|min:8'
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'El :attribute es obligatorio',
            'nombre.max' => 'El :attribute no debe tener más de :max caracteres',
            'nombre.min' => 'El :attribute no debe tener menos de :min caracteres',
            'apellido.required' => 'El :attribute es obligatorio',
            'apellido.max' => 'El :attribute no debe tener más de :max caracteres',
            'apellido.min' => 'El :attribute no debe tener menos de :min caracteres',
            'identifiacion.required' => 'El :attribute es obligatorio',
            'identificacion.max' => 'El :attribute no debe tener más de :max caracteres',
            'identificacion.min' => 'El :attribute no debe tener menos de :min caracteres'
        ];
    }

    public function attributes(){
        return [
        'nombre' => 'Nombre',
        'apellido' => 'Apellido',
        'identificacion' => 'Identificación'
        ];
    }

    public function filters(){
        return [
            'nombre' => 'trim|capitalize|escape',
            'apellido'  => 'trim|capitalize|escape',
            'identificacion'  => 'trim|capitalize|escape'
        ];
    }

}
