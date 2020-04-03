<?php

namespace App\Http\Requests\Categoria;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class CategoriaCreateRequest extends FormRequest
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
           
            'nombre' => 'required|max=50|min=15',
            'numero_platos' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El :attribute es obligatorio',
            'numero_platos.required' => 'El :attribute es obligatorio',
        ];
    }

    public function attributes()
    {
        return [
            'nombre' => 'Nombre Categoria',
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
