<?php

namespace App\Http\Requests\HistorialUsuario;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class HistorialUsuarioUpdateRequest extends FormRequest
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
            'accion' => 'required|string',
        ];
    }

    public function filters() {
        return [
            'accion' => 'trim|escape'
        ];
    }
}
