<?php

namespace App\Http\Requests\Empleado;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\FailedValidation;

class EmpleadoCreateRequest extends FormRequest
{
    use FailedValidation;
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
            'nombre' => 'required|max:100|min:3',
            'apellido' => 'required|max:100|min:3',
            'identificacion' => 'required|max:20|min:8'
        ];
    }

    public function attributes(){
        return [
        'nombre' => 'Nombre',
        'apellido' => 'Apellido',
        'identificacion' => 'Identificación'
        ];
    }

    public function filters(){
        return [
            'nombre' => 'trim|capitalize|escape',
            'apellido'  => 'trim|capitalize|escape',
            'identificacion'  => 'trim|capitalize|escape'
        ];
    }

}
