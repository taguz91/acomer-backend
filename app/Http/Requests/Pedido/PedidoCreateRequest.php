<?php

namespace App\Http\Requests\Pedido;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class PedidoCreateRequest extends FormRequest
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
           
            'id_empleado' => 'required',
        'id_mesa' => 'required',
        'platos'=> 'required',
        'notas'  => 'required|max=100|min=20'
        ];
    }

    public function messages()
    {
        return [
            'notas.required' => 'El :attribute es obligatorio',
        ];
    }

    public function attributes()
    {
        return [
            'notas' => 'Notas Pedido',
        ];
    }

    public function filters(){
        return [
            'notas' => 'trim'
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
