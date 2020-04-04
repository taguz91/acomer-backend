<?php

namespace App\Http\Requests\HistorialUsuario;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class HistorialUsuarioCreateRequest extends FormRequest
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
            'id_usuario' => 'required|integer',
            'accion' => 'required|string',
        ];
    }

    public function messages() {
        return [
            'id_usuario.required' => 'El id de usuario es obligatorio.',
            'id_usuario.integer' => 'El id del usuario debe ser un entero.',
            'accion.required' => 'La acción es requrerida.',
            'accion.string' => 'La acción debe ser un string valido.'
        ];
    }

    public function filters() {
        return [
            'accion' => 'trim|escape'
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
