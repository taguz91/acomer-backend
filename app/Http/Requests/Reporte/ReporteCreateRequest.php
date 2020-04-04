<?php

namespace App\Http\Requests\Reporte;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class ReporteCreateRequest extends FormRequest
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

    
    public function rules()
    {
        return [
           
            'nombre' => 'required|max=50|min=15'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El :attribute es obligatorio',
           
        ];
    }

    public function attributes()
    {
        return [
            'nombre' => 'Nombre Del Reporte',
        ];
    }

    public function filters(){
        return [
            'nombre' => 'trim|capitalize|escape'
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
