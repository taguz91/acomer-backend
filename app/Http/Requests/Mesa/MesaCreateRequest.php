<?php

namespace App\Http\Requests\Mesa;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class MesaCreateRequest extends FormRequest
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
            'numero' => 'required',
            'capacidad' => 'required',
            'descripcion'  => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'numero' => 'Numero Mesa',
            'capacidad' => 'Capacidad Mesa',
            'descripcion' => 'Descripcion Mesa',
        ];
    }

    public function filters(){
        return [
            'descripcion' => 'trim'
        ];
    }

}
