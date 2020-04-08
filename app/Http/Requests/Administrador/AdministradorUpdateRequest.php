<?php

namespace App\Http\Requests\Administrador;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class AdministradorUpdateRequest extends FormRequest
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
            'id_rol' => 'required|integer'
        ];
    }
}
