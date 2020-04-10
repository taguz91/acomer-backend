<?php

namespace App\Http\Requests\Plato;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class PlatoCreateRequest extends FormRequest
{
    use FailedValidation;
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
            'nombre' => 'required|max:50',
            'precio' => 'required|max:5|min:1',
            //Formato json
            'ingredientes' => 'required',
            'url_imagen' => 'required'
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
