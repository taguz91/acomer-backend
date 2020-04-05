<?php

namespace App\Http\Requests\Reporte;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class ReporteCreateRequest extends FormRequest
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

    
    public function rules()
    {
        return [
           
            'nombre' => 'required|max=50|min=15'
        ];
    }

    public function attributes()
    {
        return [
            'nombre' => 'Nombre Del Reporte',
        ];
    }

    public function filters(){
        return [
            'nombre' => 'trim|capitalize|escape'
        ];
    }
    
}
