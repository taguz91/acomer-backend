<?php

namespace App\Http\Requests\Rol;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class RolCreateRequest extends FormRequest
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
            'nombre' => 'required|string'
        ];
    }

    public function filters() {
        return [
            'nombre' => 'trim|escape'
        ];
    }
}
