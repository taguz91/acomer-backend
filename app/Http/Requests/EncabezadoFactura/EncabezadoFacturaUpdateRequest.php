<?php

namespace App\Http\Requests\EncabezadoFactura;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class EncabezadoFacturaUpdateRequest extends FormRequest
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
            'nombre' => 'required|max:100|min:3',
            'direccion' => 'required|max:150|min:5',
            'telefono' => 'required|max:20|min:7',
            'identificacion' => 'required|max:20|min:8'
        ];
    }

    public function attributes(){
        return [
        'nombre' => 'Nombre',
        'direccion' => 'Dirección',
        'telefono' => 'Teléfono',
        'identificacion' => 'Identificación'
        ];
    }

    public function filters(){
        return [
            'nombre' => 'trim|capitalize|escape',
            'direccion' => 'trim|capitalize|escape',
            'telefono' => 'trim|escape',
            'identificacion' => 'trim|escape'
        ];
    }
}
