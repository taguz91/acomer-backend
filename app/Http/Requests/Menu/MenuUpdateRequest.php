<?php

namespace App\Http\Requests\Menu;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class MenuUpdateRequest extends FormRequest
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
            'nombre' => 'required',
            'menu' => 'required|json',
            'mes_inicio' => 'required',
            'mes_fin' => 'required'
        ];
    }
}
