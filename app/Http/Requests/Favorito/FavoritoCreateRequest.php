<?php

namespace App\Http\Requests\Favorito;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class FavoritoCreateRequest extends FormRequest
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
            'id_plato' => 'required'
        ];
    }

    public function messages(){
        return [
            'id_plato.required' => 'El :attribute es obligatorio' 
        ];
    }

    public function attributes(){
        return [
            'id_plato' => 'Código Plato'
        ];
    }

    public function filters(){
        return [
            'id_plato' => 'trim|escape'
        ];
    }
}

