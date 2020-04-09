<?php

namespace App\Http\Requests\Producto;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class ProductoUpdateRequest extends FormRequest
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
            'stock' => 'required|integer',
            'precio' => 'required|digits_between:0,999.99',
            'id_categoria' => 'required|integer',
            'url_image' => 'url'
        ];
    }

    public function filters()
    {
        return [
            'nombre' => 'trim|escape',
            'url_image' => 'trim'
        ];
    }
}
