<?php

namespace App\Http\Requests\Promocion;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class PromocionUpdateRequest extends FormRequest
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
            'id_fk' => 'required|integer',
            'tipo_promocion' => 'required|integer',
            'fecha_inicio' => 'required|datetime',
            'fecha_fin' => 'required|datetime',
            'precio' => 'required',
            'descuento' => 'required|integer',
            'extra' => 'required|json'
        ];
    }

    public function attributes(){
        return [
            'id_fk' => 'id',
            'tipo_promocion' => 'Tipo Promocion',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Fin',
            'precio' => 'Precio',
            'descuento' => 'Descuento',
            'extra' => 'Extra'
        ];
    }

    public function filters(){
        return [
            'id_fk' => 'trim|escape',
            'tipo_promocion' => 'trim|capitalize|escape',
            'fecha_inicio' => 'trim|escape',
            'fecha_fin' => 'trim|escape',
            'precio' => 'trim|escape',
            'descuento' => 'trim|escape',
            'extra' => 'trim|escape'
        ];
    }
}
