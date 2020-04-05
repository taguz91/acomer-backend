<?php

namespace App\Http\Requests\Calificacion;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class CalificacionCreateRequest extends FormRequest
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
            'id_cliente' => 'required|integer',
            'calificacion' => 'required|number|min:1|max:10',
            'tipo_calificacion' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'id_fk' => 'Id Foranea',
            'id_cliente' => 'Id Cliente',
            'calificacion' => 'Calificacion',
            'tipo_calificacion' => 'Tipo Calificacion'
        ];
    }
    
}
