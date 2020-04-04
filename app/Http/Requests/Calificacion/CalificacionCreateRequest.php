<?php

namespace App\Http\Requests\Calificacion;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class CalificacionCreateRequest extends FormRequest
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
           'id_fk' => 'required',
           'id_cliente' => 'required',
            'calificacion' => 'required',
            'tipo_calificacion' => 'required'
        ];
    }

    public function messages()
    {
        return [
            
            'id_fk.required' => 'El :attribute es obligatorio',
            'id_cliente.required' => 'El :attribute es obligatorio',
            'calificacion.required' => 'El :attribute es obligatorio',
            'tipo_calificacion.required' => 'El :attribute es obligatorio',
           
        ];
    }

    public function attributes()
    {
        return [
            'id_fk' => 'Id Foranea',
            'id_cliente' => 'Id Cliente',
            'calificacion' => 'Calificacion',
            'tipo_calificacion' => 'Tipo Calificacion'
        ];
    }

    public function filters(){
        return [
            'calificacion' => 'trim'
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
