<?php

namespace App\Http\Requests\Mesa;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class MesaCreateRequest extends FormRequest
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
           
           'numero' => 'required',
           'capacidad' => 'required',
        'descripcion'  => 'required|max=100|min=20'
        ];
    }

    public function messages()
    {
        return [
            'numero.required' => 'El :attribute es obligatorio',
            'capacidad.required' => 'El :attribute es obligatorio',
            'descripcion.required' => 'El :attribute es obligatorio',
        ];
    }

    public function attributes()
    {
        return [
            'numero' => 'Numero Mesa',
            'capacidad' => 'Capacidad Mesa',
            'descripcion' => 'Descripcion Mesa',
        ];
    }

    public function filters(){
        return [
            'descripcion' => 'trim'
        ];
    }

    protected function failedValidation(Validator $validator){
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(
            response()->json(
                ['errores' => $errors], 
                JsonResponse::HTTP_UNPROCESSABLE_ENTITY
            )
        );
    }
}
