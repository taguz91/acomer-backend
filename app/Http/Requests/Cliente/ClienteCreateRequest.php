<?php

namespace App\Http\Requests\Cliente;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class ClienteCreateRequest extends FormRequest
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
            'nombre' => 'required|max:50|min:3|string',
            'apellido' => 'required|max:50|min:3|string',
            'identificacion' => 'required|max:20|min:8|string',
            'telefono' => 'required|max:20|min:7|numeric'
        ];
    }

    public function messages() {
        return [ 
            'nombre.required' => 'El :attribute es obligatorio.',
            'nombre.max' => 'El :attribute no debe tener más de :max caracteres.',
            'identificacion.required' => 'La :attribute es obligatoria.',
            'apellido.required' => 'El apellido es obligatorio.',
            'telefono.required' => 'El :attribute es obligatorio.',
            'nombre.min' => 'Es muy pequeno.'
        ];
    }

    public function attributes() {
        return [
            'nombre' => 'Nombres',
            'apellido' => 'Apellidos',
            'identificacion' => 'Identificación',
            'telefono' => 'Teléfono'
        ];
    }

    public function filters() {
        return [
            'nombre' => 'trim|capitalize|escape',
            'apellido' => 'trim|capitalize|escape'
        ];
    }

    protected function failedValidation(Validator $validator){
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(
            response()->json(
                [
                    'errores' => $errors
                ],
                JsonResponse::HTTP_UNPROCESSABLE_ENTITY
            )
        );
    }

}
