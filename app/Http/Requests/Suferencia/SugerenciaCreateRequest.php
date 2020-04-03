<?php

namespace App\Http\Requests\Suferencia;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class SugerenciaCreateRequest extends FormRequest
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
            'id_cliente' => 'integer',
            'sugerencia' => 'required|string'
        ];
    }

    public function messages() {
        return [
            'id_cliente.integer' => 'El id del cliente debe ser un entero.',
            'sugerencia.required' => 'La sugerencia es obligatoria.',
            'sugerencia.string' => 'La sugerencia debe ser un string.'
        ];
    }

    public function filters() {
        return [
            'sugerencia' => 'trim|escape'
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
