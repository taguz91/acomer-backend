<?php

namespace App\Http\Requests\Reserva;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class ReservaUpdateRequest extends FormRequest
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
            'id_mesa' => 'required|integer',
            'fecha_reserva' => 'required|date_format:Y-m-d H:m:s',
            'numero_personas' => 'required|integer',
            'platos' => 'required|json',
            'total' => 'required|between:0,99.9'
        ];
    }
}
