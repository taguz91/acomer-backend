<?php

namespace App\Http\Requests\Plato;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;


class PlatoCreateRequest extends FormRequest
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
            'nombre' => 'required|max:50',
            'precio' => 'required|max:5|min:1',
            //Formato json
            'ingredientes' => 'required',
            'url_imagen' => 'required'
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'El :attribute es obligatorio',
            'nombre.max' => 'El :attribute no debe tener más de :max caracteres',
            'precio.required' => 'El :attribute es obligatorio',
            'precio.max' => 'El :attribute no debe tener más de :max caracteres',
            'precio.min' => 'El :attribute no debe tener menos de :min caracteres',
            'ingredientes.required' => 'El :attribute es obligatorio',
            'url_imagen.required' => 'El :attribute es obligatorio'
        ];
    }

    public function attributes(){
        return [
            'nombre' => 'Nombre',
            'precio' => 'Precio',
            'ingredientes' => 'Ingredientes',
            'url_imagen' => 'URL imagen'
        ];
    }

    public function filters(){
        return [
            'nombre' => 'trim|capitalize|escape',
            'precio' => 'trim|escape',
            'ingredientes' => 'trim|capitalize|escape',
            'url_imagen' => 'trim|escape'
        ];
    }
}
