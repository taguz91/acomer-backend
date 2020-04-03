<?php

namespace App\Http\Requests\MenuDia;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class MenuDiaCreateRequest extends FormRequest
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
           
            'menu_dia' => 'required',
       
        ];
    }

    public function messages()
    {
        return [
            'menu_dia.required' => 'El :attribute es obligatorio',
        ];
    }

    public function attributes()
    {
        return [
            'menu_dia' => 'Menu del Dia',
        ];
    }

    
    // public function filters(){
    //     return [
    //         'menu_dia' => 'trim'
    //     ];
    // }

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
