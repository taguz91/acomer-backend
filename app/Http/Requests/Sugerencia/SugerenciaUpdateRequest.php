<?php

namespace App\Http\Requests\Sugerencia;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class SugerenciaUpdateRequest extends FormRequest
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
            'id_cliente' => 'integer',
            'sugerencia' => 'required|string'
        ];
    }

    public function filters() {
        return [
            'sugerencia' => 'trim|escape'
        ];
    }
}
