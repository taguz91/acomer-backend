<?php

namespace App\Http\Requests\Combo;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class ComboCreateRequest extends FormRequest
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
            'id_restaurante' => 'required|integer',
            'id_platos' => 'required|json',
            'precio_final' => 'required|between:0,99.9',
            'extra' => 'json'
        ];
    }

    public function messages() {
        return [
            'id_restaurante.required' => 'El id del restaurante es obligatorio.',
            'id_restaurante.integer' => 'El :attribute debe ser un entero.',
            'id_platos.required' => 'Debe indicar los platos del menú.',
            'id_platos.json' => 'No es un json valido.',
            'extra.json' => 'No es un json valido.'
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
