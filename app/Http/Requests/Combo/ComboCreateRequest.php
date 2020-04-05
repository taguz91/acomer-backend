<?php

namespace App\Http\Requests\Combo;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class ComboCreateRequest extends FormRequest
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
            'id_restaurante' => 'required|integer',
            'id_platos' => 'required|json',
            'precio_final' => 'required|between:0,99.9',
            'extra' => 'json'
        ];
    }

}
