<?php

namespace App\Http\Requests\Url;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class UrlUpdateRequest extends FormRequest
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
            'plataforma' => 'required|string',
            'url' => 'required|url',
            'permisos' => 'required|string'
        ];
    }

    public function filters() {
        return [
            'plataforma' => 'trim',
            'url' => 'trim',
            'permisos' => 'trim'
        ];
    }
}
