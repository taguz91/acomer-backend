<?php

namespace App\Http\Requests\Menu;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class MenuCreateRequest extends FormRequest
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
            'id_restaurante' => 'required|integer',
            'menu' => 'required|json'
        ];
    }

    public function messages() {
        return [
            'id_restaurante.required' => 'El id del restaurante es obligatorio.',
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
