<?php

namespace App\Http\Requests\EncabezadoFactura;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class EncabezadoFacturaCreateRequest extends FormRequest
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
            'direccion' => 'required|max:150|min:5',
            'telefono' => 'required|max:20|min:7',
            'identificacion' => 'required|max:20|min:8'
        ];
    }

    public function messages(){
        return [
        'nombre.required' => 'El :attribute es obligatorio',
        'nombre.max' => 'El :attribute no debe tener más de :max caracteres',
        'nombre.min' => 'El :attribute no debe tener menos de :min caracteres',
        'direccion.required' => 'El :attribute es obligatorio',
        'direccion.max' => 'El :attribute no debe tener más de :max caracteres',
        'direccion.min' => 'El :attribute no debe tener menos de :min caracteres',
        'telefono.required' => 'El :attribute es obligatorio',
        'telefono.max' => 'El :attribute no debe tener más de :max caracteres',
        'telefono.min' => 'El :attribute no debe tener menos de :min caracteres',
        'identificacion.required' => 'El :attribute es obligatorio',
        'identificacion.max' => 'El :attribute no debe tener más de :max caracteres',
        'identificacion.min' => 'El :attribute no debe tener menos de :min caracteres'
        ];
    }

    public function attributes(){
        return [
        'nombre' => 'Nombre',
        'direccion' => 'Dirección',
        'telefono' => 'Teléfono',
        'identificacion' => 'Identificación'
        ];
    }

    public function filters(){
        return [
            'nombre' => 'trim|capitalize|escape',
            'direccion' => 'trim|capitalize|escape',
            'telefono' => 'trim|escape',
            'identificacion' => 'trim|escape'
        ];
    }
}
