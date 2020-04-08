<?php

namespace App\Http\Requests\Promocion;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class PromocionCreateRequest extends FormRequest
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
            'id_fk' => 'required|integer',
            'tipo_promocion' => 'required|integer',
            'fecha_inicio' => 'required|datetime',
            'fecha_fin' => 'required|datetime',
            'precio' => 'required',
            'descuento' => 'required|integer',
            'extra' => 'required|json'
        ];
    }
}
