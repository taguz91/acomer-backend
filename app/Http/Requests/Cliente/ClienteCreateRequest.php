<?php

namespace App\Http\Requests\Cliente;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class ClienteCreateRequest extends FormRequest
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
            'nombre' => 'required|max:50|min:3|string',
            'apellido' => 'required|max:50|min:3|string',
            'identificacion' => 'required|max:20|min:8|alpha_num|unique:clientes',
            'telefono' => 'required|digits_between:7,20'
        ];
    }

    public function attributes() {
        return [
            'identificacion' => 'id',
            'telefono' => 'teléfono'
        ];
    }

    public function filters() {
        return [
            'nombre' => 'trim|capitalize|escape',
            'apellido' => 'trim|capitalize|escape',
            'identificacion' => 'trim',
            'telefono' => 'trim'
        ];
    }

}
